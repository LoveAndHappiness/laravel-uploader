@extends('plainwhite')

@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-padding card-body">
                <div class="wizard-step col-sm-3 text-center">
                    <button class="btn btn-primary btn-icon">1</button><br/>
                    <hr class="wizard-divider">
                    <p>
                    Angaben zur Abrechnung
                    </p>
                </div>
                <div class="wizard-step col-sm-3 text-center">
                    <button class="btn btn-default btn-icon" disabled="disabled">2</button><br/>
                    <hr class="wizard-divider">
                    <p>
                    Kontaktdaten eingeben
                    </p>
                </div>
                <div class="wizard-step col-sm-3 text-center">
                    <button class="btn btn-default btn-icon" disabled="disabled">3</button><br/>
                    <hr class="wizard-divider">
                    <p>
                    Abrechnung hochladen
                    </p>
                </div>
                <div class="wizard-step col-sm-3 text-center">
                    <button class="btn btn-default btn-icon" disabled="disabled">4</button><br/>
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
                <h3>Angaben zur Abrechnung <small>(Schritt 1 von 4)</small></h3>
            </div>

            <div class="card-body card-padding">
                {!! Form::open(['route' => 'orders.store', 'data-toggle' => 'validator', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('household_count', 'Wieviele Personen leben in Ihrem Haushalt?', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('householdCount', '1', false, ['required' => 'required']) !!} 1
                                <i class="input-helper"></i>
                            </label>  
                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('householdCount', '2', false, ['required' => 'required']) !!} 2
                                <i class="input-helper"></i>
                            </label>    
                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('householdCount', '3', false, ['required' => 'required']) !!} 3
                                <i class="input-helper"></i>
                            </label>  
                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('householdCount', '4', false, ['required' => 'required']) !!} 4
                                <i class="input-helper"></i>
                            </label>  
                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('householdCount', '5', false, ['required' => 'required']) !!} 5
                                <i class="input-helper"></i>
                            </label>    
                            <label class="radio radio-inline m-r-20">
                                {!! Form::radio('householdCount', '6', false, ['required' => 'required']) !!} >5
                                <i class="input-helper"></i>
                            </label>                       
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('city', 'In welcher Stadt liegt Ihre Wohnung?', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10"> 
                            <div class="fg-line">
                            {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'z.B. Köln', 'required']) !!}
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('comments', 'Anmerkungen zur Abrechnung', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10"> 
                            <div class="fg-line">
                                {!! Form::textarea('comments', null, ['class' => 'form-control', 'placeholder' => 'z.B.: Meine Abrechnung ist doppelt so hoch wie letztes Jahr und ich vertehe viele Positionen nicht', 'required']) !!}
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary btn-lg bgm-green btn-block waves-effect">Weiter</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
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