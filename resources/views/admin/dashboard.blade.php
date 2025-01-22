<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="{{asset('admin/component/style.css')}}">
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="sidebar-header">
        <h2>Admin</h2>
      </div>
      <nav class="sidebar-menu">
        <p>General</p>
        <ul>
          <li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
          <li><a href="{{ route('tambahproduk.index') }}"><i class="icon-product"></i> Produk</a></li>
          <li><a href="#"><i class="icon-history"></i> Histori</a></li>
          <li><a href="#"><i class="icon-customer"></i> Pelanggan</a></li>
          <li><a href="#"><i class="icon-staff"></i> Petugas</a></li>
        </ul>
        <ul class="logout">
          <li><a href="#"><i class="icon-logout"></i> Logout</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header class="navbar">
        <div class="navbar-brand">
          <img src="./asset -ujilevel/logo.png" alt="Logo" class="logo">
          <span>Street Striders</span>
        </div>
        <div class="navbar-actions">
          <i class="icon-bell"></i>
          <i class="icon-cart"></i>
          <div class="user-menu">
            <span>Admin</span>
            <i class="icon-dropdown"></i>
          </div>
        </div>
      </header>

      <section class="content">
        <div class="grid">
          <div class="card"></div>
          <div class="card"></div>
          <div class="card"></div>
          <div class="card"></div>
        </div>
        <footer>
          <p>Toko Online</p>
        </footer>
      </section>
    </main>
  </div>
  

</body>


</html>

<form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                     this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
    </form>
