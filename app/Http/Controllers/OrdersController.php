<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;


// Models
use App\Order;
use App\Client;
use App\File;



class OrdersController extends Controller {

	/**
	 * Restrict access to all routes
	 *
	 *
	 **/
	public function __construct()
	{
		$this->middleware('auth', ['except' => 'create']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$orders = Order::where('completed', '=', '0')->orderBy('claimed', 'ASC')->get();

		return view('pages.orders.index', compact('orders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('pages.orders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Order $order)
	{
		//
		return view('pages.orders.show', compact('order'));
	}

	/**
	 * Claim the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function claim(Order $order)
	{
		//
		$order->update([
			'claimed' => 1
		]);

		return view('pages.orders.claim', compact('order'));
	}

	/**
	 * Unclaim the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function unclaim(Order $order)
	{
		//
		$order->update([
			'claimed' => 0
		]);

		return Redirect::route('orders.index');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Order $order)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Order $order)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Order $order)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function step1()
	{
		//
		return 'whatever';
	}


}
