<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Surfsidemedia\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::instance('cart')->content();
        return view('cart',compact('items'));
    }

    public function add_to_cart(Request $request)
    {
        Cart::instance('cart')->add($request->id,$request->name,$request->quantity,$request->price)->associate('app\Models\Product');
        return redirect()->back();
    }

    public function increase_cart_quantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        return redirect()->back();
    }

    public function decrease_cart_quantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        return redirect()->back();
    }

    public function remove_item($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        return redirect()->back();
    }

    public function empty_cart()
    {
        Cart::instance('cart')->destroy();
        return redirect()->back();
    }

    public function apply_coupon(Request $request)
    {
        $coupon = $request->coupon_code;
        if(isset($coupon_code))
        {
            $coupon = Coupon::where('coupon_code',$coupon_code)->where('expiry_date','>=',Carbon::today())
            ->where('cart_value',',<=',Cart::instance('cart')->subtotal())->first();
            if(!$coupon)
            {
                return redirect()->back()->with('errr','Invalid coupon code');
            }
            else{
                Session::put('coupon',[
                    'name' => $coupon->coupon_code,
                    'type' => $coupon->type,
                    'value' => $coupon->value,
                    'cart_value' => $coupon->cart_value
                ]);
                $this->calculateDiscount();
                return redirect()->back()->with('success','Coupon code applied successfully');
            }
        }
        else{
            return redirect()->back()->with('errr','Invalid coupon code');
        }
    }
    
    public function calculateDiscount()
    {
        $discount = 0; 
        if(Session::get('coupon'))
        {
            if(Session::get('coupon')['type']=='fixed')
            {
                $discount = Session::get('coupon')['value'];
            }
            else{
                $discount = (Cart::instance('cart')->subtotal() * Session::get('coupon')['value'])/100;
            }

            $subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $discount;
            $taxAfterDiscount = ($subtotalAfterDiscount * config('cart.tax'))/100;
            $totalAfterDiscount = $subtotalAfterDiscount + $taxAfterDiscount;

            Session::put('discount',[
                'discount' => number_format(floatval($discount,),2,',',''),
                'subtotal' => number_format(floatval($subtotalAfterDiscount),2,',',''),
                'tax' => number_format(floatval($taxAfterDiscount),2,',',''),
                'total' => number_format(floatval($totalAfterDiscount),2,',','')
            ]);
        }
    }

    public function remove_coupon_code()
    {
        Session::forget('coupon');
        Session::forget('discount');
        return redirect()->back()->with('success','Coupon code removed successfully');
    }

    public function checkout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }

        $address = Address::where('user_id',Auth::user())->where('is_default',1)->first();
        return view('checkout',compact('address'));
    }

}
