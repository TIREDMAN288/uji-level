<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="{{asset('user/style.css')}}" />
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <a href=""><img src="{{ asset('image/asset -ujilevel/icon1.png') }}" alt=""></a>
            <span>Street Straiders</span>
        </div>
        <div class="chat-body">
            <div class="message received">
                Pesan dari lawan bicara.
            </div>
            <div class="message sent">
                Pesan dari pengguna sendiri.
            </div>
        </div>
        <div class="chat-footer">
            <input type="text" placeholder="Ketik di sini">
            <button>&#10148;</button>
        </div>
    </div>
</body>
</html>
