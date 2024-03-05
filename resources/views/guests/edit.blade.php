@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <p>
                <b>{{ $event->name  }} on {{ $event->event_date }}</b>
            </p>
            Edit guest
        </div>

        <div class="card-body">
            <form action="{{ route('guests.update', [$event->id, $guest->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group {{ $errors->has('fullname') ? 'has-error' : '' }}">
                    <label for="fullname">Guest Name *</label>
                    <input type="text" id="fullname" name="fullname" class="form-control"
                           value="{{ old('fullname', isset($guest) ? $guest->fullname : '') }}" required>
                    @if ($errors->has('fullname'))
                        <p class="help-block">
                            {{ $errors->first('fullname') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        Guest name
                    </p>
                </div>

                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                    <label for="address">Guest Address *</label>
                    <input type="text" id="address" name="address" class="form-control"
                           value="{{ old('address', isset($guest) ? $guest->address : '') }}" required>
                    @if ($errors->has('address'))
                        <p class="help-block">
                            {{ $errors->first('address') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        Guest address
                    </p>
                </div>

                <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                    <label for="address">Amount</label>
                    <input type="number" id="amount" name="amount" class="form-control"
                           value="{{ old('amount', isset($guest) ? $guest->amount : '') }}">
                    @if ($errors->has('amount'))
                        <p class="help-block">
                            {{ $errors->first('amount') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        amount
                    </p>
                </div>

                <div class="form-group {{ $errors->has('currency') ? 'has-error' : '' }}">
                    <label for="currency">Currency</label>
                    <select name="currency" id="currency" class="form-control select2">
                        <option value="">Please select currency</option>
                        <option value="USD">USD</option>
                        <option value="KHR">KHR</option>
                    </select>
                    @if ($errors->has('currency'))
                        <p class="help-block">
                            {{ $errors->first('currency') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        Currency
                    </p>
                </div>

                <div class="form-group {{ $errors->has('payment_method') ? 'has-error' : '' }}">
                    <label for="payment_method">Payment method</label>
                    <select name="payment_method" id="payment_method" class="form-control select2">
                        <option value="">Please select payment method</option>
                        <option value="Cash">Cash</option>
                        <option value="Bank">Bank</option>
                    </select>
                    @if ($errors->has('payment_method'))
                        <p class="help-block">
                            {{ $errors->first('payment_method') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        Payment method
                    </p>
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
