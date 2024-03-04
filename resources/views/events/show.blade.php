@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Event detail
        </div>

        <div class="card-body">
            <div class="mb-2">
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $event->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Name
                        </th>
                        <td>
                            {{ $event->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>Detail</th>
                        <th>{{ $event->detail }}</th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>{{ $event->event_date }}</th>
                    </tr>
                    <tr>
                        <th>Group</th>
                        <th>
                            <a href="{{ route('groups.show', [$event->group->id]) }}">
                                {{ $event->group->name }}
                            </a>
                        </th>
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
