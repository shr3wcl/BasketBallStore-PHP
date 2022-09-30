<section class="h-50" id="register-container">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col">
                <div class="card card-registration ">
                    <h3 class="mt-3 mb-4 text-uppercase text-center">Register</h3>

                    <div class="row g-0 d-flex justify-content-center">

                        <div class="col-xl-4 d-none d-xl-block mt-3 me-3 mb-2">

                            <img src="https://i.pinimg.com/736x/6c/0f/7e/6c0f7ee08053b42c31a2fec10a3bb738.jpg"
                                 alt="Sample photo" class="img-fluid"
                                 style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;height: 34rem"/>
                        </div>
                        <form class="col-xl-4" action="?page=register&act=reg" method="post">
                            <div class="card-body text-black">
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <div class="form-outline">
                                            <label class="form-label mb-0" for="reg-firstname">First name</label>
                                            <input type="text" name="first-name" id="reg-firstname"
                                                   class="form-control form-control-sm mb-1" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="form-outline">
                                            <label class="form-label mb-0" for="reg-lastname">Last name</label>

                                            <input type="text" name="last-name" id="reg-lastname"
                                                   class="form-control form-control-sm mb-1" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-md-flex justify-content-start align-items-center mb-1 py-2">

                                    <h6 class="mb-0 me-4">Gender: </h6>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                               value="0" required/>
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                               value="1"/>
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>
                                </div>

                                <div class="form-outline mb-1">
                                    <label class="form-label mb-0 " for="reg-username">Username</label>
                                    <span class="msg-check-username"></span>
                                    <input type="text" name="username" id="reg-username"
                                           class="form-control form-control-sm mb-1" required minlength="6"/>
                                </div>


                                <div class="form-outline mb-1">
                                    <label class="form-label mb-0" for="reg-password">Password</label>
                                    <input type="password" name="password" id="reg-password"
                                           class="form-control form-control-sm mb-1"/>
                                </div>

                                <div class="form-outline mb-1">
                                    <label class="form-label mb-0" for="reg-re-password">Retype Password</label>
                                    <input type="password" name="retype-password" id="reg-re-password"
                                           class="form-control form-control-sm mb-1"/>
                                </div>

                                <div class="form-outline mb-1">
                                    <label class="form-label mb-0" for="reg-email">Email</label>
                                    <input type="email" name="email" id="reg-email"
                                           class="form-control form-control-sm mb-1" required/>
                                </div>

                                <div class="form-outline mb-1">
                                    <label class="form-label mb-0" for="reg-phone">Phone</label>
                                    <input type="tel" name="phone" id="reg-phone"
                                           class="form-control form-control-sm mb-1" required pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$"/>
                                </div>
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="reset" class="btn btn-light btn-sm">Reset all</button>
                                    <button type="submit" id="button-register" class="btn btn-primary btn-sm ms-2">Submit form</button>
                                </div>
                                <div class="d-flex justify-content-end pt-3 text-end fs-7">
                                    <p>Do you already have an account ? <a href="?arg=login">Login here</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>