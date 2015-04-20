<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;
use Redirect;
use Input;

class PaymentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		Session::put('email', 'georg@geladaris.de');

		$email = Session::get('email');

		$stripe_public_key = env('STRIPE_PUBLIC_KEY');
		$data_amount = "2900";
		$data_name = "Expimo";
		$data_description = "Für die Prüfung Ihrer Abrechnung";
		$data_image = "https://i.imgur.com/KShbN85.jpg";


		return view('pages.payments.create', 
			compact('stripe_public_key', 'data_amount', 'data_name', 'data_description', 'data_image', 'email'));
	}


	/**
	 * Stripe: Charge the Customer
	 *
	 * @return Response
	 */
	public function chargeStripe()
	{
		//
		dd(Input::all());
		return Redirect::route('step1');
	}

	/**
	 * Stripe: Charge the Customer
	 *
	 * @return Response
	 */
	public function chargePaypal()
	{
		//
		return Redirect::route('step1');
	}

	/**
	 * Stripe: Charge the Customer
	 *
	 * @return Response
	 */
	public function chargeSofort()
	{
		//
		return Redirect::route('step1');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		return Redirect::route('step1');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
