@include('partial.header')
@section('title')
Signup
@endsection
    <form>
        <div class="container-fluid">
            <div class="container sign-form-container">
                <div class="row">
                    <div class="col-lg-4 form-left">
                       {{--  <img src="../public/fontend/image/logo_edunex.png" alt="logo" width="50px"> --}}
                        <h2>Edunex</h2>
                        <div class="left-text">
                            <h3>New here?</h3>
                            <p>That's ok, register in this bautiful grid friendly, responsive and vibey form.</p>
                        </div>
                    </div>
                    <div class="col-lg-8 form-right">
                        <h4>Create your free account to grow your data skills</h4>
                        <form action="" method="post">
                            <div class="form-item">
                                <label for="name" class="form-label">Name</label>
                                <input type="text"  class="form-control" name="name" id="name" placeholder="John Quenum">
                            </div>
                            <div class="form-item">
                                <label for="email" class="form-label" >Email</label>
                                <input type="email"class="form-control"  name="email" id="email" placeholder="exemple@gmail.com">
                            </div>
                            <div class="form-item">
                                <label for="password" class="form-label" >Password</label>
                                <input type="password"class="form-control"  name="password" id="password" placeholder="">
                            </div>
                            <div class="form-item">
                                <label for="confirm_password" class="form-label" >Confirm password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary mb-3" id="signUP" style="background-color: #041b5a"><span style="font-size: 1em; font-weight:900">Sign up</span></button>
                        </form>
                        <p id="p_regis">Or register using</p>
                        <div id="icons">
                            <i class="fa fa-linkedin icons-item" aria-hidden="true" style="margin-left: 40px;"> Linkedin</i>
                            <i class="fa fa-facebook icons-item" aria-hidden="true"> facebook</i>
                            <i class="fa fa-google icons-item" aria-hidden="true"> Google</i>
                        </div>
                    </div>
                </div>
                <p id="signin_p">Already have a account? <a href="login" style="color: #041b5a; font-weight: 900; text-decoration: none">Sign in</a></p>
            </div>
        </div>
    </form>

  @include('partial.footer')
