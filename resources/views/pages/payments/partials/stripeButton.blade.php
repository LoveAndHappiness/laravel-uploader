
	{!! Form::open(array('route' => 'chargeStripe', 'id' => 'stripeForm')) !!}
	    <button id="stripeButton" class="btn btn-lg btn-block btn-primary">Pay with Stripe</button>
	{!! Form::close() !!}


	@section('footer')
		@parent
		<script src="https://checkout.stripe.com/checkout.js"></script>

		<script>
			var $form = $('#stripeForm');

			var handler = StripeCheckout.configure({
				key: "{{$stripe_public_key}}",
				image: "{{$data_image}}",
				// to this when a token is generated
				token: function(token) {
					// Use the token to create the charge with a server-side script.
					// You can access the token ID with `token.id`
					$form.append($('<input type="hidden" name="stripeToken" />').val(token.id));
					$form.append($('<input type="hidden" name="stripeEmail" />').val(token.email));

				    // submit the form, uncomment to make this happen
				    $form.get(0).submit();
				}
			});

			$('#stripeButton').on('click', function(e) {
				// Open Checkout with further options
				handler.open({
					name: "{{$data_name}}",
					description: "{{$data_description}}",
					currency: "EUR",
					amount: "{{$data_amount}}",
					@if(Session::has('email'))
						email: "{{$email}}",
					@endif
					allowRememberMe: false,
				});

				e.preventDefault();
			});

			// Close Checkout on page navigation
			$(window).on('popstate', function() {
				handler.close();
			});

			console.log('handler.key');

		</script>
		
	@endsection