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
                    <a href="{!! URL::route('step2') !!}"><button class="btn btn-default btn-icon">2</button></a><br/>
                    <hr class="wizard-divider">
                    <p>
                    Kontaktdaten eingeben
                    </p>
                </div>
                <div class="wizard-step col-sm-3 text-center">
                    <a href="{!! URL::route('step3') !!}"><button class="btn btn-default btn-icon">3</button></a><br/>
                    <hr class="wizard-divider">
                    <p>
                    Abrechnung hochladen
                    </p>
                </div>
                <div class="wizard-step col-sm-3 text-center">
                    <a href="#"><button class="btn btn-primary btn-icon">4</button></a><br/>
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
                <h3>Online bezahlen <small>(Schritt 4 von 4)</small></h3><br/>
            </div>

            <div class="card-body card-padding">
                <div class="row">
					<div class="col-sm-6">
						<h4>Details zu Ihrem Auftrag</h4>
						<ul>
							<li><i class="md md-check"></i>Ausführlicher und verständlicher Prüfbericht</li>
							<li><i class="md md-check"></i>Vorgefertigtes Anschreiben an den Vermieter</li>
							<li><i class="md md-check"></i>Tipps für das weitere Vorgehen</li>
						</ul>	        			
					</div>

	                <div class="col-sm-6 payment-section"> 
						<div class="card">
	                        <div class="card-header">
	                            <h2>Übersicht <small>Use contextual classes to color table rows or individual cells.</small></h2>
	                        </div>
	                        
	                        <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="5">
	                        	<table class="table">
									<tr>
									    <td>Zwischensumme</td>
									    <td class="second-column">24,37 €</td> 
									</tr>
									<tr>
									    <td>Mehrwertsteuer (19%)</td>
									    <td class="second-column">4,63 €</td> 
									</tr>
									<tr class="last-row success">
									    <td>Gesamt</td>
									    <td class="second-column">29,00 €</td> 
									</tr>
								</table>
	                        </div>
	                    </div>

	                    <div class="row">
	                    	<div class="col-sm-4">Paypal</div>
	                    	<div class="col-sm-4">MasterCard</div>
	                    	<div class="col-sm-4">SofortÜberweisungl</div>
	                    </div>
	                </div>

				</div>

				<div class="row">
                	<div class="col-sm-6"><a href="{!! URL::route('step3') !!}"><button type="button" class="btn btn-lg btn-block btn-default">Zurück</button></a></div>
                    <div class="col-sm-6">
                        <a href="{!! URL::route('step4') !!}"><button type="button" class="btn btn-primary btn-lg btn-block waves-effect">Weiter</button></a>
                    </div>
                </div>				
            </div>

        </div>


@endsection