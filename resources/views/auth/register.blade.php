@extends('blank')

@section('content')
 
        <!-- Register -->
        <div class="lc-block toggled" id="l-register">

        {!! Form::open(array('route' => 'postRegister')) !!}

            <h2 class="m-b-20">Registrierung</h2>

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
                    {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Benutzername')) !!}
                </div>
            </div>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="md md-mail"></i></span>
                <div class="fg-line">
                    {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'E-Mail-Adresse')) !!}
                </div>
            </div>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="md md-accessibility"></i></span>
                <div class="fg-line">
                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Passwort' )) !!}
                </div>
            </div>

            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="md md-accessibility"></i></span>
                <div class="fg-line">
                    {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Passwort bestätigen' )) !!}
                </div>
            </div>
                        
            <button type="submit" class="btn btn-login btn-danger btn-float">
                <i class="md md-arrow-forward"></i>
            </button>

        {!! Form::close() !!}
            
        </div>

@endsection