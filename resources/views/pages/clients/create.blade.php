@extends('plainwhite')

@section('content')
    

        <div class="card">
            <div class="card-padding card-body">
                <div class="wizard-step col-sm-3 text-center">
                    <a href="{!! URL::route('step1') !!}"><button class="btn btn-default btn-icon">1</button></a><br/>
                    <hr class="wizard-divider">
                    <p>
                    Angaben zur Abrechnung
                    </p>
                </div>
                <div class="wizard-step col-sm-3 text-center">
                    <a href="{!! URL::route('step2') !!}"><button class="btn btn-primary btn-icon">2</button></a><br/>
                    <hr class="wizard-divider">
                    <p>
                    Kontaktdaten eingeben
                    </p>
                </div>
                <div class="wizard-step col-sm-3 text-center">
                    <a href="#"><button class="btn btn-default btn-icon" disabled="disabled">3</button></a><br/>
                    <hr class="wizard-divider">
                    <p>
                    Abrechnung hochladen
                    </p>
                </div>
                <div class="wizard-step col-sm-3 text-center">
                    <a href="#"><button class="btn btn-default btn-icon" disabled="disabled">4</button></a><br/>
                    <hr class="wizard-divider">
                    <p>
                    Online bezahlen
                    </p>
                </div>
                
                <br>
                <br>
                <br>

            </div>
        </div>   

        <div class="card">
            <div class="card-header card-padding">
                 <h3>Kontaktdaten eingeben <small>(Schritt 2 von 4)</small></h3>
            </div>

            <div class="card-body card-padding">
                {!! Form::open(['data-toggle' => 'validator', 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        <label for="salutation" class="col-sm-2 control-label">
                            <i class="md md-info-outline md-label-position"></i>
                        </label>
                        <!-- {!! Form::label('salutation', 'Anrede', ['class' => 'col-sm-2 control-label']) !!} -->
                        <div class="col-sm-10">
                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('salutation', 'Frau', false, ['required' => 'required']) !!} Frau
                                <i class="input-helper"></i>
                            </label>  
                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('salutation', 'Herr', false, ['required' => 'required']) !!} Herr
                                <i class="input-helper"></i>
                            </label>  

                            <div class="help-block with-errors"></div>                   
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">
                            <i class="md md-person md-label-position"></i>
                        </label>
                        <div class="col-sm-5"> 
                            <div class="fg-line">
                                {!! Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'Vorname', 'required']) !!}
                            </div>

                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="col-sm-5"> 
                            <div class="fg-line">
                                {!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Nachname', 'required']) !!}
                            </div>

                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">
                            <i class="md md-email md-label-position"></i>
                        </label>
                        <div class="col-sm-10"> 
                            <div class="fg-line">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required']) !!}
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">
                            <i class="md md-phone md-label-position"></i>
                        </label>
                        <div class="col-sm-10"> 
                            <div class="fg-line">
                                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Für Rückfragen zu Ihrer Abrechnung', 'required']) !!}
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                

                    <div class="form-group">
                        <div class="col-sm-2">
                            <button class="btn btn-default btn-lg btn-block waves-effect">Zurück</button>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect">Weiter</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>

@stop

@section('footer')
    @parent

    <script src="vendors/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="vendors/auto-size/jquery.autosize.min.js"></script>
    <script src="vendors/waves/waves.min.js"></script>
    <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="vendors/sweet-alert/sweet-alert.min.js"></script>
    
    <script src="js/functions.js"></script>

@endsection