@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <p>
                <b>{{ $event->name  }} on {{ $event->event_date }}</b>
            </p>
            Edit guest
        </div>
        <div class="container">
            <form action="{{ route('guests.update', [$event->id, $guest->id]) }}" method="POST" enctype="multipart/form-data">  
                @csrf
                @method('PUT')
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
                <input class="btn btn-primary" type="submit" value="Save">
            </div>
        </form>
    </div>
@endsection
