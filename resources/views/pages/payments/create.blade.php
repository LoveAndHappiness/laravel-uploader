@extends('plainwhite')

@section('content')

		@include('pages.payments.partials.step4Wizard')

        <div class="card">
            <div class="card-header card-padding">
                <h3>Online bezahlen <small>(Schritt 4 von 4)</small></h3><br/>
            </div>

            <div class="card-body card-padding">
                <div class="row">
					<div class="col-sm-6">
						@include('pages.payments.partials.orderDetails')       			
					</div>

	                <div class="col-sm-6 payment-section"> 
						@include('pages.payments.partials.pricingTable')
	                </div>
				</div>


				<div class="row">
					<div class="col-sm-6">
						<h3 class="text-right">Bitte Zahlmethode wählen</h3>				
					</div>

					<div class="col-sm-6">
	                    <div class="row">
	                    	<div class="col-lg-4">
								@include('pages.payments.partials.stripeButton')
	                    	</div>
	                    	<div class="col-lg-4">

	                    	</div>
	                    	<div class="col-lg-4">
	                    		@include('pages.payments.partials.paypalButton')
	                    	</div>
	                    </div>
	                </div>
				</div>

				<div class="row">
                	<div class="col-sm-2">
						<a href="{!! URL::route('step3') !!}"><button type="button" class="btn btn-lg btn-block btn-default">Zurück</button></a>
                    </div>
                </div>				
            </div>
        </div>

@endsection