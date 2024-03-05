@extends('layouts.app')

@section('content')
    @can('guest.create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('guests.create', $event->id) }}">
                    Create guest
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            Guest list at {{ $event->name }} {{ $event->event_date }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Client">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            Currency
                        </th>
                        <th>
                            Payment method
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($guests as $key => $guest)
                        <tr data-entry-id="{{ $guest->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $guest->id ?? '' }}
                            </td>
                            <td>
                                {{ $guest->fullname ?? '' }}
                            </td>
                            <td>
                                {{ $guest->address ?? '' }}
                            </td>
                            <td>
                                {{ $guest->amount }}
                            </td>
                            <td>
                                {{ $guest->currency }}
                            </td>
                            <td>
                                {{ $guest->payment_method }}
                            </td>
                            <td>
                                @can('guest.show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('guests.show', [$event->id, $guest->id]) }}">
                                        View
                                    </a>
                                @endcan

                                @can('guest.edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('guests.edit', [$event->id, $guest->id]) }}">
                                        Edit
                                    </a>
                                @endcan

                                @can('guest.delete')
                                    <form action="{{ route('guests.destroy', [$event->id, $guest->id]) }}" method="POST"
                                          onsubmit="return confirm('guest and related guest will be delete');"
                                          style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            {{ $guests->links() }}
        </div>
    </div>
@endsection
