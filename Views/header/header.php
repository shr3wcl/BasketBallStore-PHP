<header class="fixed-top">
    <nav class="navbar navbar-expand-sm fs-7 bg-light">
        <div class="container-fluid w-100 d-flex justify-content-start mx-1">
            <div class="fw-light">
                <a href="#" class="text-decoration-none text-muted me-2"><i class="fa-solid fa-location-dot me-1"></i>Address:
                    470 Tran Dai Nghia</a>
                <a href="#" class="text-decoration-none text-muted"><i class="fa-solid fa-phone me-1"></i>Phone:
                    0123456789</a>
            </div>
        </div>
        <div class="container-fluid w-100 d-flex justify-content-end mx-2">
            <?php
            $login = isset($_SESSION['login']);
            if (!$login) {
                echo '
                    <a href="?page=login" class="text-decoration-none me-3">
                        <span>Login</span>
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="?page=register" class="text-decoration-none">
                        <span>Register</span>
                        <i class="fa-solid fa-pen"></i>
                    </a>';
            } else {
                $user = $_SESSION["user"] ?? "";
                $d_name = "";
                if ($user) {
                    $d_name =  $user["first_name"] . " " . $user["last_name"];
                }
                $auth = "";
                switch ($user['id_auth']){
                    case 1:
                        $auth = '<li class="border"><a class="dropdown-item text-success" href="#">Trang quản lý</a></li>';
                        break;
                    case 2:
                        $auth = '<li class="border"><a class="dropdown-item text-danger" href="#">Trang nhân viên</a></li>';
                        break;
                }
                echo '
                        <span class="dropdown p-8 me-5 d-flex align-items-center">
                            <i class="fa-solid fa-user me-2"></i>
                            <a class="nav-link dropdown-toggle position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              '.  $d_name .'
                            </a>
                            <ul class="dropdown-menu dropdown-content p-0 position-absolute" style="right: 0;top: 15px">
                                <li class="border"><a class="dropdown-item" href="#">Account</a></li>
                                '. $auth . '
                                <li class="border"><a class="dropdown-item text-danger" href="?page=logout">Logout</a></li>
                            </ul>
                        </span>
                ';
            }
            ?>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-light border p-0 mx-1">
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
                            <a class="nav-link dropdown-toggle p-0" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                            Basketball Shoes
                        </a>
                            <ul class="dropdown-menu dropdown-content p-0 position-absolute">
                            <li class="border"><a class="dropdown-item" href="#">Nikes</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Adidas</a></li>
                            <li class="border"><a class="dropdown-item" href="#">ANTA</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Peak</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Lining</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Other</a></li>

                        </ul>
                        </span>


                    </li>
                    <li class="nav-item position-relative">
                        <span class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                            Clothes
                        </a>
                        <ul class="dropdown-menu dropdown-content p-0 position-absolute">
                            <li class="border"></i><a class="dropdown-item" href="#">Jersey NBA</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Pants</a></li>
                            <li class="border"><a class="dropdown-item" href="#">T-shirt</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Training shirt</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Combat clother</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Hoodies</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Uniform</a></li>
                        </ul>
                        </span>
                    </li>
                    <li class="nav-item position-relative">
                        <span class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                            Accessories
                        </a>
                        <ul class="dropdown-menu dropdown-content p-0 position-absolute">
                            <li class="border"><a class="dropdown-item" href="#">Basketball ball</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Backpack, briefcase, bag</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Socks</a></li>
                            <li class="border"><a class="dropdown-item" href="#">Bandages</a></li>

                        </ul>
                        </span>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <div class="position-relative me-3 d-flex align-items-center w-100">
                        <input class="form-control position-relative pe-5 w-100" type="text" placeholder="Search..."
                               aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass position-absolute mx-lg-3"
                           style="right: 8px !important;  "></i>
                    </div>
                    <button class="btn btn-outline-success px-3 pb-1 border-0" type="submit"><i
                                class="fa-sharp fa-solid fa-cart-shopping"></i>
                        <p class="m-0">Cart</p></button>
                </form>

            </div>
        </div>
    </nav>

</header>