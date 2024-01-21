@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <form action="/action_page.php">
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="location">Event Code</label>
                <input type="text" id="event_code" class="form-control" placeholder="Event code...">
            </div>
            <div class="col-sm-6 col-xs-12">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" class="form-control" placeholder="Input Full name....">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="userid">User login</label>
                <input type="text" id="userid" class="form-control" placeholder="Userlogin/email/phone....">
            </div>
            <div class="col-sm-6 col-xs-12">
                <label for="password">Password</label>
                <input type="text" id="password" class="form-control" placeholder="Input your password....">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="gender">Gender</label>
                <input type="text" id="gender" class="form-control" placeholder="Gender....">
            </div>
            <div class="col-sm-6 col-xs-12">
                <label for="address">Address</label>
                <input type="text" id="address" class="form-control" placeholder="Address....">
            </div>
        </div>
        <button type="button" class="btn btn-info">Save</button>
        <button type="button" class="btn btn-secondary">Upload</button>
    </form>
</div>
    
@endsection
