@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <p>
                <b>{{ $event->name  }} on {{ $event->event_date }}</b>
            </p>
            Create guest
        </div>
        <div class="card-body">
            <form action="{{ route('guests.store', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group {{ $errors->has('fullname') ? 'has-error' : '' }}">
                            <label for="fullname">Guest Name *</label>
                            <input type="text" id="fullname" name="fullname" class="form-control"
                                   value="{{ old('fullname', isset($guest) ? $guest->fullname : '') }}" required>
                            @if ($errors->has('fullname'))
                                <small class="form-text text-muted">
                                    {{ $errors->first('fullname') }}
                                </small>
                            @endif

                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label for="address">Address *</label>
                            <input type="text" id="address" name="address" class="form-control"
                                   value="{{ old('address', isset($guest) ? $guest->address : '') }}" required>
                            @if ($errors->has('address'))
                                <small class="form-text text-muted">
                                    {{ $errors->first('address') }}
                                </small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <div class="form-group {{ $errors->has('amount_kh') ? 'has-error' : '' }}">
                            <label for="amount_kh">Amount in KHR</label>
                            <input type="number" id="amount_kh" name="amount_kh" class="form-control"
                                   value="{{ old('amount_kh', isset($guest) ? $guest->amount_kh : '') }}"/>
                            @if ($errors->has('amount_kh'))
                                <small class="form-text text-muted">
                                    {{ $errors->first('amount_kh') }}
                                </small>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group {{ $errors->has('amount_usd') ? 'has-error' : '' }}">
                            <label for="amount_usd">Amount in USD</label>
                            <input type="number" id="amount_usd" name="amount_usd" class="form-control"
                                   value="{{ old('amount_usd', isset($guest) ? $guest->amount_usd : '') }}"/>
                            @if ($errors->has('amount_usd'))
                                <small class="form-text text-muted">
                                    {{ $errors->first('amount_usd') }}
                                </small>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <div class="form-group {{ $errors->has('payment_method') ? 'has-error' : '' }}">
                            <label class="col-form-label">Payment method</label>
                            @foreach(App\Enums\PaymentMethod::cases() as $paymentMethod)
                                <div class="form-check">
                                    <input type="radio" name="payment_method" id="payment_{{$paymentMethod->value}}" value="{{$paymentMethod->value}}" class="form-check-input">
                                    <label for="payment_{{$paymentMethod->value}}">{{$paymentMethod->value}}</label>
                                </div>
                            @endforeach
                            @if ($errors->has('payment_method'))
                                <small class="form-text text-muted">
                                    {{ $errors->first('payment_method') }}
                                </small>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm"></div>

                </div>
                <div>
                    <a class="btn btn-default" href="{{ url()->previous() }}">
                        Back
                    </a>
                    <input class="btn btn-primary" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
@endsection
