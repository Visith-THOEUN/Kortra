@extends('layouts.app')

@section('content')
    @can('group.create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('groups.create') }}">
                    Create Group
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            Group list
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
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($groups as $key => $group)
                            <tr data-entry-id="{{ $group->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $group->id ?? '' }}
                                </td>
                                <td>
                                    {{ $group->name ?? '' }}
                                </td>
                                <td>
                                    @can('group.show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('groups.show', $group->id) }}">
                                            View
                                        </a>
                                    @endcan

                                    @can('group.edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('groups.edit', $group->id) }}">
                                            Edit
                                        </a>
                                    @endcan

                                    @can('group.delete')
                                        <form action="{{ route('groups.destroy', $group->id) }}" method="POST"
                                            onsubmit="return confirm('Group and related event will be delete');"
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

            {{ $groups->links() }}
        </div>
    </div>
@endsection
