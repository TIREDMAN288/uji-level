<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profiles'; // Menentukan nama tabel secara eksplisit

    protected $fillable = [
        'username', 'name', 'email', 'phone', 'gender',
        'province', 'city', 'district', 'postal_code', 'profile_image'
    ];

    // Pastikan user_id tidak bisa diisi langsung oleh user
    protected $guarded = ['user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
