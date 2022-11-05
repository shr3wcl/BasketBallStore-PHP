<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-basketball-ball"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Giaybongro.com <sup>ADMIN</sup></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="?mod=dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Admin
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Management</span>
        </a>

        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Page: </h6>
                <a class="collapse-item" href="?mod=account">Account</a>
                <a class="collapse-item" href="?mod=product">Product</a>
                <a class="collapse-item" href="?mod=category">Category</a>
                <a class="collapse-item" href="?mod=productType">Product Type</a>
                <a class="collapse-item" href="?mod=promotion">Promotion</a>
                <a class="collapse-item" href="?mod=banner">Banner</a>
                <a class="collapse-item" href="?mod=bill">Bill</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>