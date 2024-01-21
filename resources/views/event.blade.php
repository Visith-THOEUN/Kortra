@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <form action="/action_page.php">
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="event">Event</label>
                <input type="text" id="event" class="form-control" placeholder="Event Type...">
            </div>
            <div class="col-sm-6 col-xs-12">
                <label for="location">Event Code</label>
                <input type="text" id="event_code" class="form-control" placeholder="Event code...">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="start_date">Start </label>
                <input type="date" id="start" class="form-control" placeholder="Start date..."></div>
            <div class="col-sm-6 col-xs-12">
                <label for="end_date">End</label>
                <input type="date" id="end" class="form-control" placeholder="End date..."></div>
            </div>
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="location">Location</label>
                <input type="text" id="location" class="form-control" placeholder="Event Location...">
            </div>
            <div class="col-sm-6 col-xs-12">
                <label for="user_id">User ID</label>
                <input type="text" id="user_id" class="form-control" placeholder="User ID...">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="plan_id">Plan ID</label>
                <input type="text" id="plan_id" class="form-control" placeholder="Plan ID...">
            </div>
            <div class="col-sm-6 col-xs-12">
                <label for="user_id">User ID</label>
                <input type="text" id="user_id" class="form-control" placeholder="User ID...">
            </div>
        </div>
        <input type="submit" value="Create">
    </form>
</div>

@endsection
