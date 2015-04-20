{!! Form::open(array('route' => 'chargeStripe')) !!}
		<script
			src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			data-key="pk_test_mA3Wo4wGNDNEQ5rRHaUKTVOZ"
			data-image="{{$data_image}}"
			data-name="Simple Integration"
			data-description="2 widgets"
			data-currency="eur"
			data-amount="2000">
		</script>
{!! Form::close() !!}