<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-text mx-3">TOKO SERBA</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Main Menu
</div>

<!-- Nav Item - Charts -->
<li class="nav-item {{ Request::is('management-users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('guzzle.index') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>DATA BARANG</span></a>
</li>

<!-- Nav Item - Charts -->

<!-- Nav Item - Charts -->

<!-- Nav Item - Charts -->

   

<!-- Divider -->


<!-- Heading -->


<!-- Nav Item - Tables -->


<!-- Divider -->


<!-- Sidebar Toggler (Sidebar) -->
