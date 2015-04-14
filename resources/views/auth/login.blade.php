@extends('blank')
    
@section('content')

        <!-- Login -->
        <div class="lc-block toggled" id="l-login">

            {!! Form::open(array('route' => 'postLogin')) !!}

                <h2 class="m-b-20">Login</h2>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Es scheint ein Problem bei der Eingabe gegeben zu haben.<br><br>
                            @foreach ($errors->all() as $error)
                                <span style="list-style: none;">{{ $error }}</span><br>
                            @endforeach
                    </div>
                @endif

                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="md md-person"></i></span>
                    <div class="fg-line">
                        {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'E-Mail-Adresse')) !!}
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
                        {!! Form::checkbox('remember', '1') !!}
                        <i class="input-helper"></i>
                        Auf diesem Gerät angemeldet bleiben.
                    </label>
                </div>

                <div class="text-right">
                    <a href="{!! URL::to('password_resets/create') !!}">Password Vergessen?</a>
                </div>

                <button type="submit" class="btn btn-login btn-danger btn-float">
                    <i class="md md-arrow-forward"></i>
                </button>
            {!! Form::close() !!}
            
        </div>

        
@endsection