@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit User
        </div>

        <div class="card-body">
            <form action="{{ route('users.update', [$user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-user {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" class="form-control"
                        value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                    @if ($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        User name
                    </p>
                </div>
                <div class="form-user {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email *</label>
                    <input type="text" id="email" name="email" class="form-control"
                        value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                    @if ($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        User email
                    </p>
                </div>
                <div class="form-user {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="name">Password *</label>
                    <input type="password" id="password" name="password" class="form-control"
                        value="{{ old('password' ?? '') }}" required>
                    @if ($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        User password
                    </p>
                </div>

                <div class="form-group {{ $errors->has('group_id') ? 'has-error' : '' }}">
                    <label for="group">Group</label>
                    <select name="group_id" id="group" class="form-control select2">
                        @foreach ($groups as $id => $group)
                            <option value="{{ $id }}"
                                {{ (isset($user) && $user->group ? $user->group->id : old('group_id')) == $id ? 'selected' : '' }}>
                                {{ $group }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('group_id'))
                        <p class="help-block">
                            {{ $errors->first('group_id') }}
                        </p>
                    @endif
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
