@extends('blank')

@section('content')

    <!-- Forgot Password -->
    <div class="lc-block" id="l-forget-password">
        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
        
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="md md-email"></i></span>
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Email Address">
            </div>
        </div>
        
        <a href="" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>
        
        <ul class="login-navigation">
            <li data-block="#l-login" class="bgm-green">Login</li>
            <li data-block="#l-register" class="bgm-red">Register</li>
        </ul>
    </div>

@endsection