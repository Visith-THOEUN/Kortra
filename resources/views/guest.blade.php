@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <form action="/action_page.php">
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="guest">Guest Name</label>
                <input type="text" id="guest" class="form-control" placeholder="Input Guest name....">
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
