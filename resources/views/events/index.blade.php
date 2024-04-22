@extends('layouts.app')

@section('content')
    @can('event.create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('events.create') }}">
                    Create event
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            event list
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
                                Detail
                            </th>
                            <th>
                                Date
                            </th>
                            <th>
                                Group
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $key => $event)
                            <tr data-entry-id="{{ $event->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $event->id ?? '' }}
                                </td>
                                <td>
                                    {{ $event->name ?? '' }}
                                </td>
                                <td>
                                    {{ $event->detail ?? '' }}
                                </td>
                                <td>
                                    {{ $event->event_date ?? '' }}
                                </td>
                                <td>
                                    {{ $event->group->name ?? '' }}
                                </td>
                                <td>
                                    @can('event.show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('events.show', $event->id) }}">
                                            View
                                        </a>
                                    @endcan

                                    @can('event.edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('events.edit', $event->id) }}">
                                            Edit
                                        </a>
                                    @endcan

                                    @can('event.delete')
                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                                            onsubmit="return confirm('event and related event will be delete');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                        </form>
                                    @endcan

                                    {{-- @can('guest.create')
                                            <a href="{{ route('guests.create', $event->id) }}" class="btn btn-xs btn-info">Add guest</a>
                                    @endcan --}}

                                    <a href="{{ route('guests.index', $event->id) }}" class="btn btn-xs btn-info">Your guests</a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $events->links() }}
        </div>
    </div>
@endsection
