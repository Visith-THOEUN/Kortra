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
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="reil">Reil</label>
                <input type="text" id="reil" class="form-control" placeholder="Amount Reil....">
            </div>
            <div class="col-sm-6 col-xs-12">
                <label for="dollar">Dollar</label>
                <input type="text" id="dollar" class="form-control" placeholder="Amount Dollar...">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-sm-6 col-xs-12">
                <label for="reil-khqr">KHQR Reil</label>
                <input type="text" id= "reil-khqr" class="form-control" placeholder="KHQR Reil...">
            </div>
            <div class="col-sm-6 col-xs-12">
                <label for="dollar-khqr">KHQR Dollar</label>
                <input type="text" id="dollar-khqr" class="form-control" placeholder="KHQR Dollar...">
            </div>
        </div>
        
    </form>
</div>
@endsection
