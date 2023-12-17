<?php $dataUser = $_SESSION['user'] ?>
<section class="h-50" id="register-container">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col">
                <div class="card card-registration ">
                    <h3 class="mt-3 mb-4 text-uppercase text-center">Thông tin tài khoản</h3>
                    <div class="row g-0 d-flex justify-content-center">
                        <form class="col-xl-4" action="?page=profile&act=update" method="post" style="border-right: 1px solid #000000;">
                            <div class="card-body text-black">
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <div class="form-outline">
                                            <h6 class="form-label mb-0" for="reg-firstname">Họ & tên đệm <span
                                                        class="msg-check-fn text-danger fs-7" style="font-size: 10px"></span></h6>
                                            <input type="text" name="first-name" id="reg-firstname"
                                                   class="form-control form-control-sm mb-1" value="<?= $dataUser['first_name'] ?>" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="form-outline">
                                            <h6 class="form-label mb-0" for="reg-lastname">Tên <span
                                                        class="msg-check-ln text-danger fs-7" style="font-size: 10px"></span></h6>

                                            <input type="text" name="last-name" id="reg-lastname"
                                                   class="form-control form-control-sm mb-1" value="<?= $dataUser['last_name'] ?>" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-1 py-2">
                                    <h6 class="mb-0 me-2">Giới tính: <span
                                                class="msg-check-gender text-danger fs-7" style="font-size: 10px"></span>
                                    </h6>
                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                               value="0" <?= $dataUser['gender'] === "0" ? "checked" : "" ?> required/>
                                        <label class="form-check-label" for="femaleGender">Nữ</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                               value="1" <?= $dataUser['gender'] === "1" ? "checked" : "" ?>/>
                                        <label class="form-check-label" for="maleGender">Nam</label>
                                    </div>
                                </div>

                                <div class="form-outline mb-1">
                                    <h6 class="form-label mb-0 " for="reg-username">Tên đăng nhập <span
                                                class="msg-check-username text-danger fs-7" style="font-size: 10px"></span>
                                    </h6>
                                    <input type="text" name="username" id="reg-username"
                                           class="form-control form-control-sm mb-1" value="<?= $dataUser['username'] ?>" disabled minlength="6"/>
                                </div>


                                <div class="form-outline mb-1">
                                    <h6 class="form-label mb-0" for="reg-email">Email <span
                                                class="msg-check-email text-danger fs-7" style="font-size: 10px"></span></h6>
                                    <input type="email" name="email" id="reg-email"
                                           class="form-control form-control-sm mb-2" value="<?= $dataUser['email'] ?>" required/>
                                </div>

                                <div class="form-outline mb-1">
                                    <h6 class="form-label mb-0" for="reg-phone">SĐT <span
                                                class="msg-check-phone text-danger fs-7" style="font-size: 10px"></span></h6>
                                    <input type="tel" name="phone" id="reg-phone"
                                           class="form-control form-control-sm mb-2" required value="<?= $dataUser['phone'] ?>"
                                           pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$"/>
                                </div>
                                <div class="form-outline mb-1">
                                    <h6 class="form-label mb-0" for="reg-phone">Địa chỉ <span
                                                class="msg-check-address text-danger fs-7" style="font-size: 10px"></span></h6>
                                    <input type="tel" name="address" id="reg-address"
                                           class="form-control form-control-sm mb-2" required value="<?= $dataUser['address'] ?>"
                                           />
                                </div>
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="submit" id="button-update-info" class="btn btn-primary btn-sm ms-2">
                                        Cập nhập thông tin
                                    </button>
                                </div>


                            </div>
                        </form>
                        <div class="col-xl-3 d-none d-xl-block mt-3 me-3 mb-2" style="margin-left: 20px">
                            <form action="?page=profile&act=password" method="post">
                                <div class="form-outline mb-1">
                                    <h6 class="form-label mb-0" for="old-password">Mật khẩu cũ <span
                                                class="msg-check-old-password text-danger" style="font-size: 10px"></span></h6>
                                    <input type="password" name="password" id="old-password"
                                           class="form-control form-control-sm mb-2" required/>
                                </div>
                                <div class="form-outline mb-1">
                                    <h6 class="form-label mb-0" for="new-password">Mật khẩu mới <span
                                                class="msg-check-pass text-danger fs-7" style="font-size: 10px"></span></h6>
                                    <input type="password" name="new-password-1" id="new-password"
                                           class="form-control form-control-sm mb-2" required/>
                                </div>
                                <div class="form-outline mb-1">
                                    <h6 class="form-label mb-0" for="confirm-password">Nhập lại mật khẩu mới <span
                                                class="msg-check-retype-pass text-danger fs-7" style="font-size: 10px"></span></h6>
                                    <input type="password" name="new-password-2" id="confirm-password"
                                           class="form-control form-control-sm mb-2" required/>
                                </div>
                                <div class="d-flex justify-content-end pt-3">

                                <button href="#" type="submit" id="button-change-password" class="btn btn-primary btn-sm ms-2">
                                    Thay đổi mật khẩu
                                </button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>