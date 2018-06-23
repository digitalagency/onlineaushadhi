<form id="loginForm" action="{{ route('login') }}" class="material loginForm" method="post" novalidate>
    {{ csrf_field() }}
    <span class="title title--sm">Returning Customer</span>

    <div class="row">
        <div class="col-xs-12 m-b-15">
            <input type="text" name="email"
                   placeholder="Email Address" required email>
        </div>
        <div class="col-xs-12 m-b-15">
            <input type="password" name="password"
                   placeholder="Password" required></div>
        <div class="col-xs-12 m-b-15">
            <!-- Ajax errors -->
            <div class="alert alert-danger hide login-form-error"><ul></ul></div>
            <div class="alert alert-success hide login-form-success"></div>

            <button type="submit" class="btn btn-danger m-r-15">Login</button>
            <span class="memory">
                <input type="checkbox" name="remember"
                       placeholder="Remember me on this computer!"/>
            </span>
        </div>

        <div class="col-xs-12">
            <span class="forgot passwordReset">
                <a href="javascript:void(0);"
                   id="passwordReset">Forgot Your Password?</a>
            </span>
        </div>
    </div>
</form>
<form id="passwordResetForm" action="{{ route('password.email') }}" class="material passwordResetForm"
      method="post" style="display: none;">
    {{ csrf_field() }}
    <span class="title title--sm">Reset Password</span>
    <div class="row">
        <div class="col-xs-12 m-b-15">
            <input type="text" name="email"
                   placeholder="Email Address" class="required email">
        </div>

        <div class="col-xs-12 m-b-15">
            <!-- Ajax errors -->
            <div class="alert alert-danger hide reset-form-error">
                <ul></ul>
            </div>
            <div class="alert alert-success hide reset-form-success">
            </div>
            <button type="submit" class="btn btn-danger m-r-15">Send Password Reset
                Link
            </button>

            <a href="javascript:void(0);" id="backToLogin" class="backToLogin">Back to Login</a>
        </div>
    </div>
</form>
