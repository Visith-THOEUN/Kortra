@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Guest detail
        </div>

        <div class="card-body">
            <div class="mb-2">
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $guest->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $guest->fullname }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $guest->address }}</td>
                    </tr>
                    <tr>
                        <th>Amount in KHR</th>
                        <td>{{ $guest->amount_kh ?? 0 }} KHR</td>
                    </tr>
                    <tr>
                        <th>Amount in USD</th>
                        <td> {{ $guest->amount_usd ?? 0 }} USD </td>
                    </tr>
                    <tr>
                        <th>Payment method</th>
                        <th>{{ $guest->payment_method }}</th>
                    </tr>
                    </tbody>
                </table>
                <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                    Back
                </a>
            </div>

            <nav class="mb-3">
                <div class="nav nav-tabs">

                </div>
            </nav>
            <div class="tab-content">

            </div>
        </div>
    </div>
@endsection
