@extends('layouts.app')

@vite( ['resources/css/app.css' ])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="plan01">
                <img src="{{ asset('storage/image/plant.jpg') }}" class="d-block image" alt="Image">
                    <p>Prices 25$</p>
                    <p>Guetst 300</p> 
                    <p>Users 5</p>
                    <p>Valid 7 days</p>
                    <p>15% OFF</p>
                    <p>total price 21$</p>
                    <a href="/event"><button type="button" class="btn btn-secondary">Subcribe</button></a>
                    
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="plan01">
                    <img src="{{ asset('storage/image/plant01.jpg') }}" class="d-block image" alt="Image">
                    <p>Prices 35$</p>
                    <p>Guetst 500</p> 
                    <p>Users 5</p>
                    <p>Valid 7 days</p>
                    <p>10% OFF</p>
                    <p>total price 31.$</p>
                    <a href="/event"><button type="button" class="btn btn-secondary">Subcribe</button></a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="plan01">
                    <img src="{{ asset('storage/image/plant02.jpg') }}" class="d-block image" alt="Image">
                    <p>Prices 35$</p>
                    <p>Guetst 500</p> 
                    <p>Users 5</p>
                    <p>Valid 7 days</p>
                    <p>10% OFF</p>
                    <p>total price 31.$</p>
                    <a href="/event"><button type="button" class="btn btn-secondary">Subcribe</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="plan01">
                    <img src="{{ asset('storage/image/plant03.jpg') }}" class="d-block image" alt="Image">
                    <p>Prices 25$</p>
                    <p>Guetst 300</p> 
                    <p>Users 5</p>
                    <p>Valid 7 days</p>
                    <p>15% OFF</p>
                    <p>total price 21$</p>
                    <a href="/event"><button type="button" class="btn btn-secondary">Subcribe</button></a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="plan01">
                    <img src="{{ asset('storage/image/plant04.jpg') }}" class="d-block image" alt="Image">
                    <p>Prices 35$</p>
                    <p>Guetst 500</p> 
                    <p>Users 5</p>
                    <p>Valid 7 days</p>
                    <p>10% OFF</p>
                    <p>total price 31.$</p>
                    <a href="/event"><button type="button" class="btn btn-secondary">Subcribe</button></a>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="plan01">
                    <img src="{{ asset('storage/image/plant05.jpg') }}" class="d-block image" alt="Image">
                    <p>Prices 35$</p>
                    <p>Guetst 500</p> 
                    <p>Users 5</p>
                    <p>Valid 7 days</p>
                    <p>10% OFF</p>
                    <p>total price 31.$</p>
                    <a href="/event"><button type="button" class="btn btn-secondary">Subcribe</button></a>
                </div>
            </div>
       </div>
    </div>
@endsection