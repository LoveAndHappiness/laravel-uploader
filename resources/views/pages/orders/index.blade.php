@extends('app')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Nebenkostenabrechnungen <small>Enable a hover state on table rows within a tbody</small></h2>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="

                        @if($order->refunded == 1)
                            info
                        @elseif($order->objected == 1)
                            danger
                        @elseif($order->sent == 1)
                            success
                        @elseif($order->claimed == 1)
                            warning
                        @endif

                        ">

                        <td>{{$order->id}}</td>
                        <td>{{$order->created_at->diffForHumans()}}</td>
                        <td>{{$order->client->firstName}}</td>
                        <td>{{$order->client->lastName}}</td>
                        <td>{!! link_to('orders/see') !!}</td>
                        <td>

                        @if($order->claimed == 0)
                            <a href="{!! URL::route('orders.claim', $order->id) !!}"><button class="btn btn-sm bgm-amber waves-effect">Claim Now</button></a>
                        @else
                            <a href="{!! URL::route('orders.show', $order->id) !!}">
                            <button class="btn btn-primary waves-effect">Check</button>
                            </a>
                        @endif



                        </td>
                    </tr>
                    @endforeach
                    <tr class="success">
                        <td>2</td>
                        <td>1 hour ago</td>
                        <td>Madeleine</td>
                        <td>Hollaway</td>
                        <td>@hollway</td>
                        <td>Cheese</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection