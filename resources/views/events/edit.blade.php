@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Event
        </div>
        <div class="card-body">
            <form action="{{ route('events.update', [$event->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Event Name *</label>
                    <input type="text" id="name" name="name" class="form-control"
                           value="{{ old('name', isset($event) ? $event->name : '') }}" required>
                    @if ($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        Event name
                    </p>
                </div>

                <div class="form-group {{ $errors->has('detail') ? 'has-error' : '' }}">
                    <label for="detail">Event detail</label>
                    <input type="text" name="detail" id="detail" class="form-control" value="{{ old('detail', isset($event) ? $event->detail : '' ) }}" required>
                    @if ($errors->has('detail'))
                        <p class="help-block">
                            {{ $errors->first('detail') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        Event detail
                    </p>
                </div>

                <div class="form-group {{ $errors->has('event_date') ? 'has-error' : '' }}">
                    <label for="event_date">Event date</label>
                    <input type="date" name="event_date" id="event_date" class="form-control" value="{{ old('event_date', isset($event) ? $event->event_date: '') }}", required>
                    @if ($errors->has('event_date'))
                        <p class="help-block">
                            {{ $errors->first('event_date') }}
                        </p>
                    @endif
                    <p class="helper-block">Event date</p>
                </div>

                <div class="form-group {{ $errors->has('group_id') ? 'has-error' : '' }}">
                    <label for="group">Group</label>
                    <select name="group_id" id="group" class="form-control select2">
                        @foreach ($groups as $id => $group)
                            <option value="{{ $id }}"
                                {{ (isset($event) && $event->group ? $event->group->id : old('group_id')) == $id ? 'selected' : '' }}>
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
