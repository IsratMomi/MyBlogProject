<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create - Account</title>
    @include('admin.includes.css')
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo text-center">
                            <img src="{{asset('/')}}assets/images/logo.png" alt="logo" height="100" width="30">
                        </div>

                        <form class="pt-3" method="POST" action="{{route('register')}}" >
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Password">
                            </div>

                            <div class="mt-3">
                                <input type="submit" class="btn btn-success btn-block" value="SIGN UP"/>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Already have an account? <a href="{{route('login')}}" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.includes.script')
</body>

</html>
