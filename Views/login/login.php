<div class="d-flex justify-content-center align-items-center" id="login-container">
    <form action="?page=login&act=log" method="post" class="bg-light p-5 border">
        <!-- Email input -->
        <h3 class="text-uppercase mb-4 mt-4">Login</h3>
        <div class="form-outline mb-3">
            <label class="form-label" for="input-username-login">Username <span class="msg-check-username text-danger"
                    style="font-size: 12px"></span></label>
            <input type="text" id="input-username-login" class="form-control" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
            <label class="form-label" for="input-password-login">Password <span class="msg-check-password text-danger"
                    style="font-size: 12px"></span></label>
            <input type="password" id="input-password-login" class="form-control" />
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
            </div>

            <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>
        </div>
        <h6 class="text-danger msg-check-login" style="font-size: 12px"></h6>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4 w-100" id="button-login">Sign in</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Not a member? <a href="?arg=register">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-dark btn-floating mx-1 mb-2 px-3">
                <i class="fab fa-facebook-f text-reset text-dark"></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mb-2 mx-1">
                <i class="fab fa-google text-reset text-dark"></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mx-1 mb-2">
                <i class="fab fa-twitter text-reset "></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mx-1 mb-2">
                <i class="fab fa-github text-reset"></i>
            </button>
        </div>
    </form>
</div>
