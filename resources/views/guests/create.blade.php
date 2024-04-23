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
                                <p class="help-block">
                                    {{ $errors->first('fullname') }}
                                </p>
                            @endif

                        </div>
                    </div>
                    <div class="col-sm">
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
                    <div class="col-sm">
                        <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                            <label for="address">Amount</label>
                            <input type="number" id="amount" name="amount" class="form-control"
                                   value="{{ old('amount', isset($guest) ? $guest->amount : '') }}"/>
                            @if ($errors->has('amount'))
                                <p class="help-block">
                                    {{ $errors->first('amount') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <div class="form-group {{ $errors->has('currency') ? 'has-error' : '' }}">
                            <legend class="col-form-label">Currency</legend>
                            <div class="form-check">
                                <input type="radio" name="currency" value="USD" id="currencyUSD" class="form-check-input">
                                <label for="currencyUSD" class="form-check-label">USD</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="currency" value="KHR" id="currencyKHR" class="form-check-input">
                                <label for="currencyKHR" class="form-check-label">KHR</label>
                            </div>

                            @if ($errors->has('currency'))
                                <p class="help-block">
                                    {{ $errors->first('currency') }}
                                </p>
                            @endif

                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group {{ $errors->has('payment_method') ? 'has-error' : '' }}">
                            <legend class="col-form-label">Payment method</legend>
                            <div class="form-check">
                                <input type="radio" name="payment_method" value="CASH" id="paymentCASH" class="form-check-input">
                                <label for="paymentCASH" class="form-check-label">Cash</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="payment_method" value="BANK" id="paymentBANK" class="form-check-input">
                                <label for="paymentBANK" class="form-check-label">Bank</label>
                            </div>
                            @if ($errors->has('payment_method'))
                                <p class="help-block">
                                    {{ $errors->first('payment_method') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm"></div>
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
@endsection
