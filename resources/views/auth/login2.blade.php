@extends('blank')
    
@section('content')

        <!-- Login -->
        <div class="lc-block toggled" id="l-login">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Es scheint ein Problem bei der Eingabe gegeben zu haben.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open(array('route' => 'postLogin')) !!}

                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="md md-person"></i></span>
                    <div class="fg-line">
                        {!! Form::email('name', null, array('class' => 'form-control', 'placeholder' => 'E-Mail-Adresse')) !!}
                    </div>
                </div>
                

                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="md md-accessibility"></i></span>
                    <div class="fg-line">
                        {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password' )) !!}
                    </div>
                </div>
              
                <div class="clearfix"></div>
                
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('remember_me', '1') !!}
                        <i class="input-helper"></i>
                        Keep me signed in
                    </label>
                </div>

                <div class="text-right">
                    <a href="#">Password Vergessen?</a>
                </div>

                <button type="submit" class="btn btn-login btn-danger btn-float">
                    <i class="md md-arrow-forward"></i>
                </button>
            {!! Form::close() !!}
            
        </div>

        
@endsection