@extends('layouts.app')

@section('content')

    <input type="hidden" name="" id="eventId" value="{{ $event->id }}">

    <div class="container">
        <div class="row">
            <div id="message" class="alert alert-success" style="display: none; width: 100%" ></div>
        </div>
    </div>

    <div class="container card">
        
        <div class="card-header">
            <p>
                <b>{{ $event->name  }} on {{ $event->event_date }}</b>
            </p>
            Create guest
        </div>
        <div class="container">

            <form id="addGuest" action="{{ route('guests.store', $event->id) }}" method="POST" enctype="multipart/form-data">  
                @csrf

                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group {{ $errors->has('fullname') ? 'has-error' : '' }}">
                            <label for="fullname">Guest Name *</label>
                            <input type="text" id="fullname" name="fullname" class="form-control"
                                value="{{ old('fullname', isset($guest) ? $guest->fullname : '') }}" required>
                            @if ($errors->has('fullname'))
                                <p class="help-block">
                                    {{ $errors->first('fullname') }}
                                </p>
                            @endif
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label for="address">Address *</label>
                            <input type="text" id="address" name="address" class="form-control"
                                value="{{ old('address', isset($guest) ? $guest->address : '') }}" required>
                            @if ($errors->has('address'))
                                <p class="help-block">
                                    {{ $errors->first('address') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                            <label for="address">Amount</label>
                            <input type="number" id="amount" name="amount" class="form-control"
                                value="{{ old('amount', isset($guest) ? $guest->amount : '') }}">
                            @if ($errors->has('amount'))
                                <p class="help-block">
                                    {{ $errors->first('amount') }}
                                </p>
                            @endif
                        </div>
                    </div>    
                </div>
        
                <div class="container">
                    <div class="form-group {{ $errors->has('currency') ? 'has-error' : '' }}">
                        <label for="currency">Currency</label></br>
                        <input type="checkbox" name="currency" id="currency" value="USD">
                        <label for="currency">USD</label></br>
                        <input type="checkbox" name="currency" id="currency" value="KHR">
                        <label for="currency">KHR</label></br>

                            
                        @if ($errors->has('currency'))
                            <p class="help-block">
                                {{ $errors->first('currency') }}
                            </p>
                        @endif
                    
                    </div>
                    <div class="form-group {{ $errors->has('payment_method') ? 'has-error' : '' }}">
                        <label for="payment_method">Payment method</label></br>
                        <input type="checkbox" name="payment_method" id="payment_method" value="Cash">
                        <label for="payment_method">Cash</label></br>
                        <input type="checkbox" name="payment_method" id="payment_method" value="Bank">
                        <label for="payment_method">Bank</label>

                        @if ($errors->has('payment_method'))
                            <p class="help-block">
                                {{ $errors->first('payment_method') }}
                            </p>
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary mt-3">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        let eventId  = document.getElementById("eventId").value;

        var url = '{{ route("guests.store", ":id") }}';
            url = url.replace(':id', eventId);
    
        $(document).ready(function(){

            $("#addGuest").on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: url,
                    data: $('#addGuest').serialize(),
    
                    success:function(result){

                        console.log('Done')
    
                        // show message
                        $('#message').css('display', 'block');
                        $('#message').html(result.message)
                        
                        // clear text box
                        $('#addGuest')[0].reset();
    
                    },
                    error:function(e){ 
                        console.log(e)
                    }
                })
            });
        });
    
    </script>

    {{-- <script>
        // 
        // Pusher
        // 
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('865bd7a25d7eb9d9741d', {
            cluster: 'ap1'
        });


        var channel = pusher.subscribe('myGuest-channel');
        channel.bind('myGuest-event', function(data) {

            if (data.guest.event_id == eventId) {
                alert(JSON.stringify(data));
    
                // document.getElementById("realTime").innerHTML +=
                // `<tr class="">
                //     <td>${lastId}</td>
                //     <td>${data.guest.title}</td>
                //     <td>${data.guest.content}</td>
                //     <td>${data.guest.status}</td>
                //     <td width="120px">
                //         <button type="button" class="btn btn-primary btn-sm">View</button>
                //         <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                //     </td>
                // </tr>`;
            }
                
        });
    
    </script> --}}

@endsection


