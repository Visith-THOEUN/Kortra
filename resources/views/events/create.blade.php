@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create event
        </div>

        <div class="card-body">
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Event Name *</label>
                    <input type="text" id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', isset($event) ? $event->name : '') }}" required>
                    @if ($errors->has('name'))
                        <small class="form-text text-muted">
                            {{ $errors->first('name') }}
                        </small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="detail">Event detail</label>
                    <input type="text" name="detail" id="detail" class="form-control {{ $errors->has('detail') ? 'is-invalid' : '' }}" value="{{ old('detail', isset($event) ? $event->detail : '' ) }}" required>
                    @if ($errors->has('detail'))
                        <small class="form-text text-muted">
                            {{ $errors->first('detail') }}
                        </small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="event_date">Event date</label>
                    <input type="date" name="event_date" id="event_date" class="form-control {{ $errors->has('event_date') ? 'is-invalid' : '' }}" value="{{ old('event_date', isset($event) ? $event->event_date: '') }}", required>
                    @if ($errors->has('event_date'))
                        <small class="form-text text-muted">
                            {{ $errors->first('event_date') }}
                        </small>
                    @endif
                </div>

                <div class="form-group">
                    <label for="group">Group</label>
                    <select name="group_id" id="group" class="form-control select2 {{ $errors->has('group_id') ? 'is-invalid' : '' }}">
                        @foreach ($groups as $id => $group)
                            <option value="{{ $id }}"
                                {{ (isset($event) && $event->group ? $event->group->id : old('group_id')) == $id ? 'selected' : '' }}>
                                {{ $group }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('group_id'))
                        <small class="form-text text-muted">
                            {{ $errors->first('group_id') }}
                        </small>
                    @endif
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
@endsection
