@include('partial.header')
@section('title')
Login
@endsection
 <div class="container-fluid">
    <div class="container login-form-container">
        <div class="login-form">
            <h1>Webacademy</h1>
            <h2>Welcom to our website</h2>
            <form action="" method="post">
                <div class="form-item">
                    <label for="email" class="form-label" >Email</label>
                    <input type="email"class="form-control"  name="email" id="email">
                </div>
                <div class="form-item">
                    <label for="password" class="form-label" >Password</label>
                    <input type="password"class="form-control"  name="password" id="password">
                    <span style="color: #3788f1;float: right; margin: 5px 32px">Forget password?</span>
                    <div style="clear: right"></div>
                </div>
                <button type="submit" class="btn btn-primary mb-3" id="signUP" style="background-color: #3788f1"><span style="font-size: 1.2em; font-weight:900">Sign up</span></button>
                <div class="form-check"  style="margin:10px 30px ">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="check_remember_me" id="check_remember_me" value="checkedValue">
                    Remember me
                  </label>
                </div>
            </form>
            <p style="margin:10px 30px" class="text-center">Or <a href="signup" style="color:#3788f1; font-weight:600; text-decoration:none">click here</a> to create your account.</p>
        </div>
    </div>
 </div>
