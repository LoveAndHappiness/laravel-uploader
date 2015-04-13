        <div class="card profile-view">
            <div class="pv-header">
                <img src="{{ asset('img/profile-pics/profile-pic.jpg') }}" class="pv-main" alt="">
            </div>
            
            <div class="pv-body">
                <h2>{{$order->client->firstName}} {{$order->client->lastName}}</h2>
                <small>{{$order->comments}} </small>
            
                <table class="table table-bordered">
                    <tr>
                        <td><i class="md md-room"></i> {{$order->city}}</td>
                        <td><i class="md md-home"></i> {{$order->householdCount}}</td>
                    </tr>
                    <tr>
                        <td><i class="md md-phone"></i> {{$order->client->phone}}</td>
                        <td><i class="md md-email"></i> {{$order->client->email}}</td>
                    </tr>
                </table>

                <a href="" class="pv-follow-btn">Follow</a>
            </div>
        </div>