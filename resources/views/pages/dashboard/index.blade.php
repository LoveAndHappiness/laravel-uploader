@extends('app')

@section('content')

<?php
use Jenssegers\Date\Date;
// This returns 'vor 0 Sekunden' in German, which I do want.
echo Date::now()->diffForHumans();

echo '<br/>';

// This returns '1 day ago'. It is in English, but I need it in German.
echo $orders->find(1)->created_at->diffForHumans();
?>


	<div class="col-sm-6">
		<div class="card">
		    <div class="card-header">
		        <h2>Neueste Nebenkostenabrechnungen <small>Sortiert nach den neuesten zuerst.</small></h2>
		        <ul class="actions">
		            <li class="dropdown">
		                <a href="" data-toggle="dropdown">
		                    <i class="md md-more-vert"></i>
		                </a>
		                
		                <ul class="dropdown-menu dropdown-menu-right">
		                    <li>
		                        <a href="">Refresh</a>
		                    </li>
		                    <li>
		                        <a href="">Settings</a>
		                    </li>
		                    <li>
		                        <a href="">Other Settings</a>
		                    </li>
		                </ul>
		            </li>
		        </ul>
		    </div>
		    
		    <div class="card-body m-t-0">
		        <table class="table table-inner table-vmiddle">
		            <thead>
		                <tr>
		                    <th>ID</th>
		                    <th>Name</th>
		                    <th>Datum</th>
		                    <th style="width: 60px">Price</th>
		                </tr>
		            </thead>
		            <tbody>
		            	@foreach($orders as $order)
		            	<tr>
		            		<td class="f-500 c-cyan">{{$order->id}}</td>
		            		<td>{{$order->client->salutation . ' ' . $order->client->firstName . ' ' . $order->client->lastName . ' aus ' . $order->city}}</td>
		            		<td class="f-500 c-cyan">{{$order->updated_at->diffForHumans()}}</td>
		            		<td><button class="btn">claim</button></td>
		            	</tr>
		            	@endforeach
		            </tbody>
		        </table>
		    </div>


		    <div id="recent-items-chart" class="flot-chart" style="padding: 0px; position: relative;">
		    	<canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 574px; height: 150px;" width="574" height="150"></canvas>
		    	<canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 574px; height: 150px;" width="574" height="150"></canvas>
		    </div>
		</div>
	</div>
@endsection