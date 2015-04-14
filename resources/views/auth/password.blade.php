@extends('blank')

@section('content')
        <!-- Forgot Password -->
        <div class="lc-block toggled" id="l-forget-password">

        <h2 class="m-b-20">Resette dein Passwort</h2>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Es scheint ein Problem bei der Eingabe gegeben zu haben.<br><br>
                        @foreach ($errors->all() as $error)
                            <span style="list-style: none;">{{ $error }}</span><br>
                        @endforeach
                </div>
            @endif
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="md md-email"></i></span>
                <div class="fg-line">
                    {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'E-Mail-Adresse')) !!}
                </div>
            </div>
            
            <a href="" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>
            
        </div>
@endsection