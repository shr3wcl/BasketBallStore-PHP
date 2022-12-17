<header class="fixed-top">
    <nav class="navbar navbar-expand-sm fs-7 bg-light" id="">
        <div class="container-fluid w-100 d-flex justify-content-start mx-1">
            <div class="fw-light">
                <a href="https://www.google.com/maps/place/Vietnam+-+Korea+University+of+Information+and+Communication+Technology./@15.9752982,108.250161,17z/data=!3m1!4b1!4m6!3m5!1s0x3142108997dc971f:0x1295cb3d313469c9!8m2!3d15.9752931!4d108.252355!16s%2Fg%2F1yjg80dyy" class="text-decoration-none text-muted me-2" style="font-size: 12px" target="_blank"><i class="fa-solid fa-location-dot me-1" ></i>Address:
                    470 Tran Dai Nghia</a>
                <a href="#" class="text-decoration-none text-muted" style="font-size: 12px"><i class="fa-solid fa-phone me-1"></i>Phone:
                    0123456789</a>
            </div>
        </div>
        <div class="container-fluid w-100 d-flex justify-content-end mx-2">
            <?php
            $login = isset($_SESSION['login']);
            if (!$login) {
                echo '
                    <a href="?page=login" class="text-decoration-none me-3" style="font-size: 12px">
                        <span>Đăng nhập</span>
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="?page=register" class="text-decoration-none" style="font-size: 12px">
                        <span>Đăng kí</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>';
            } else {
                $user = $_SESSION["user"] ?? "";
                $d_name = "";
                if ($user) {
                    $d_name = $user["first_name"] . " " . $user["last_name"];
                }
                $auth = "";
                switch ($user['id_auth']) {
                    case 1:
                        $auth = '<li class="border"><a class="dropdown-item text-success" href="admin?mod=dashboard" target="_blank">Trang quản lý</a></li>';
                        break;
                    case 2:
                        $auth = '<li class="border"><a class="dropdown-item text-info" href="#">Trang nhân viên</a></li>';
                        break;
                }
                echo '
                        <span class="dropdown p-8 me-5 d-flex align-items-center" style="font-size: 12px">
                            <i class="fa-solid fa-user me-2"></i>
                            <span class="nav-link dropdown-toggle position-relative" role="button" aria-expanded="false" style="font-size: 12px">
                              ' . $d_name . '
                            </span>
                            <ul class="dropdown-menu dropdown-content p-0 position-absolute" style="right: 0;top: 15px">
                                <li class="border"><a class="dropdown-item" href="?page=profile">Tài khoản</a></li>
                                ' . $auth . '
                                <li class="border"><a class="dropdown-item" href="?page=bill">Đơn hàng của bạn</a></li>

                                <li class="border"><a class="dropdown-item text-danger" href="?page=logout">Đăng xuất</a></li>
                            </ul>
                        </span>
                ';
            }
            ?>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-light border p-0 mx-0">
        <div class="container-fluid mx-3">
            <a class="navbar-brand" href="?page=home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item position-relative d-flex align-items-center">
                        <span class="dropdown p-8">
                            <a class="nav-link dropdown-toggle p-0" href="?page=product&type=1" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                            Giày bóng rổ
                        </a>
                            <ul class="dropdown-menu dropdown-content p-0 position-absolute">
                            <li class="border"><a class="dropdown-item" href="?page=product&id=1">Nikes</a></li>
                            <li class="border"><a class="dropdown-item" href="?page=product&id=3">Adidas</a></li>
                            <li class="border"><a class="dropdown-item" href="?page=product&id=2">Anta</a></li>
                            <li class="border"><a class="dropdown-item" href="?page=product&id=4">Peak</a></li>
                            <li class="border"><a class="dropdown-item" href="?page=product&id=">Lining</a></li>
                            <li class="border"><a class="dropdown-item" href="?page=product&type=1">Other</a></li>
                        </ul>
                        </span>
                    </li>
                    <li class="nav-item position-relative">
                        <span class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                            Áo quần bóng rổ
                        </a>
                        <ul class="dropdown-menu dropdown-content p-0 position-absolute">
                            <li class="border"><a class="dropdown-item" href="?page=product&id=5">Quần bóng rổ</a></li>
                            <li class="border"><a class="dropdown-item" href="?page=product&id=6">Áo bóng rổ</a></li>
                        </ul>
                        </span>
                    </li>
                    <li class="nav-item position-relative">
                        <span class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                            Phụ kiện
                        </a>
                        <ul class="dropdown-menu dropdown-content p-0 position-absolute">
                            <li class="border"><a class="dropdown-item" href="?page=product&id=11">Bóng rổ</a></li>
                            <li class="border"><a class="dropdown-item" href="?page=product&id=12">Balo</a></li>
                            <li class="border"><a class="dropdown-item" href="?page=product&id=10">Tất</a></li>
<!--                            <li class="border"><a class="dropdown-item" href="#">Bandages</a></li>-->


                        </ul>
                        </span>
                    </li>
                </ul>
                <form action="?page=search" method="post" class="d-flex" role="search" >
                    <div class="position-relative me-3 d-flex align-items-center w-100">
                        <input class="form-control position-relative pe-5 w-100" type="text" placeholder="Tìm kiếm..."
                               aria-label="Search" name="keyword">
                        <a type="submit" class="button fa-solid fa-magnifying-glass position-absolute mx-lg-3 gray-darker"
                           style="right: 8px !important;  "></a>
                    </div>
                    <a href="?page=cart" class="btn btn-outline-success px-3 pb-1 border-0"><i
                                class="fa-sharp fa-solid fa-cart-shopping"></i>
                        <p class="m-0">Cart</p></a>
                </form>

            </div>
        </div>
    </nav>

</header>