        <div class="card">
            <div class="card-header">
                <h2>Order Details</h2>
            </div>

            <div class="card-body card-padding">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <td>ID</td>
                            <td>{{$order->id}}</td>
                        </tr>
                        <tr>
                            <td>Submitted</td>
                            <td>{{$order->created_at->diffForHumans()}}</td>
                        </tr>
                        <tr>
                            <td>Paid</td>
                            <td>{!! ($order->paid == 1) ? '<i class="md md-check"></i>' : '' !!}</td>
                        </tr>
                        <tr>
                            <td>Claimed</td>
                            <td>{!! ($order->claimed == 1) ? '<i class="md md-check"></i>' : '' !!}</td>
                        </tr>
                        <tr>
                            <td>Claimed by</td>
                            <td>
                                @if($order->claimed == 0)
                                    unclaimed
                                @else
                                    George Geladaris
                                @endif
                            </td>
                        </tr>
                    </table>

                    @if($order->claimed == 1)
                        <a href="{{ URL::route('orders.unclaim', $order->id) }}">
                            <button class="btn btn-warning">Unclaim</button>
                        </a>
                    @else
                        <a href="">
                            <button class="btn btn-warning" disabled="disabled">Unclaim</button>
                        </a>
                    @endif

                </div>
            </div>
        </div>