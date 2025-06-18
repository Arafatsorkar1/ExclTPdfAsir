<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{asset('/')}}assets/cs/main.d810cf0ae7f39f28f336.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/cs/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/cs/helper.css" rel="stylesheet">
<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100 bg-plum-plate bg-animation">
            <div class="d-flex h-100 justify-content-center align-items-center">
                <div class="mx-auto app-login-box col-md-8">
                    <div class="app-logo-inverse mx-auto mb-3"></div>
                    <div class="modal-dialog w-100 mx-auto">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="h5 modal-title text-center">
                                    <h4 class="mt-2">
                                        <div>Smart Rotator</div>
                                        <span>Please sign in to your account below.</span>
                                    </h4>
                                </div>



                                    <div class="form-row">

                                        <div class="col-md-12">

                                                <div class="position-relative form-group">
                                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus  placeholder="Email here..." />
                                                </div>
                                        </div>

                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Password here..."  />
                                                </div>
                                            </div>


                                    </div>
                                    <div class="position-relative form-check">
                                        <input id="remember_me" name="remember" type="checkbox" class="form-check-input">
                                        <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                                    </div>

                                <div class="divider"></div>
                                <h6 class="mb-0">No account? <a href="{{route('register')}}" class="text-primary">Sign up now</a></h6>
                            </div>
                            <div class="modal-footer clearfix">
                                <div class="float-left">
                                    <a href="javascript:void(0);" class="btn-lg btn btn-link">Recover Password</a>
                                </div>
                                <div class="float-right">
                                    <button class="btn btn-primary btn-lg">Login to Dashboard</button>
                                </div>
                            </div>
                        </div>

                        </form>
                    </div>
                    <div class="text-center text-white opacity-8 mt-3">Copyright © <a style="color: black" href="https://www.facebook.com/Arafatsorkar12345">Arafat Sorkar</a>{{date('Y')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('/')}}assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="{{asset('assets/js/axios.min.js')}}"></script>
</body>

</html>