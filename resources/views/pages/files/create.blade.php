@extends('plainwhite')

@section('head')
	@parent
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/basic.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
@endsection


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
                    <a href="{!! URL::route('step2') !!}"><button class="btn btn-default btn-icon">2</button></a><br/>
                    <hr class="wizard-divider">
                    <p>
                    Kontaktdaten eingeben
                    </p>
                </div>
                <div class="wizard-step col-sm-3 text-center">
                    <a href="{!! URL::route('step3') !!}"><button class="btn btn-primary btn-icon">3</button></a><br/>
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
                <h3>Abrechnung hochladen <small>(Schritt 3 von 4)</small></h3><br/>
                <p>Einfach Dateien in das Feld unten ziehen oder auf das Feld unten klicken.</p>
            </div>

            <div class="card-body card-padding">
            	<div id="dropzone">
		            {!! Form::open(['class' => 'dropzone']) !!}

		    

		            {!! Form::close() !!}
	            </div>
            </div>

            <div class="card-body card-padding">
                
                    <div class="row">
                    	<div class="col-sm-2"><a href="{!! URL::route('step2') !!}"><button type="button" class="btn btn-lg btn-block btn-default">Zurück</button></a></div>
                        <div class="col-sm-10">
                            <a href="{!! URL::route('step4') !!}"><button type="button" class="btn btn-primary btn-lg btn-block waves-effect">Weiter</button></a>
                        </div>
                    </div>

            </div>

        </div>

@endsection


@section('footer')
	@parent 

    <script src="vendors/moment/moment.min.js"></script>
    <script src="vendors/auto-size/jquery.autosize.min.js"></script>
    <script src="vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="vendors/chosen/chosen.jquery.min.js"></script>
    <script src="vendors/noUiSlider/jquery.nouislider.all.min.js"></script>
    <script src="vendors/input-mask/input-mask.min.js"></script>
    <script src="vendors/farbtastic/farbtastic.min.js"></script>
    <script src="vendors/summernote/summernote.min.js"></script>
    <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/fileinput/fileinput.min.js"></script>
    <script src="vendors/waves/waves.min.js"></script>
    <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="vendors/sweet-alert/sweet-alert.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script> -->


@endsection