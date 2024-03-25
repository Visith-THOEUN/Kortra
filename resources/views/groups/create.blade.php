@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create group
        </div>

        <div class="card-body">
            <form action="{{ route('groups.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" class="form-control"
                        value="{{ old('name', isset($group) ? $group->name : '') }}" required>
                    @if ($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        Group name
                    </p>
                </div>
                <div>
                    <input class="btn btn-primary" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
@endsection
