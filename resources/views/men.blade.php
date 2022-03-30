@extends('layout.app')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="bread"><span><a href="{{url('/')}}">Home</a></span> / <span>Men</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumbs-two">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs-img cover-img1">
                        <h2>Men's</h2>
                    </div>
                    <div class="menu text-center">
                        <p><a href="#">New Arrivals</a> <a href="#">Best Sellers</a> <a href="#">Extended Widths</a> <a href="#">Sale</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-featured">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <div class="featured">
                        <div class="featured-img featured-img-2 cover-img2">
                            <h2>Casuals</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="featured">
                        <div class="featured-img featured-img-2 cover-img3">
                            <h2>Dress</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="featured">
                        <div class="featured-img featured-img-2 cover-img4">
                            <h2>Sports</h2>
                            <p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('products')
@endsection
