@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col mb-3">
            <a href="{{route('products.index')}}" class="fs-3 arrow">< Back</a>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="{{$product->image}}" class="card-img-top" alt="...">

            </div>
            <div class="col-8">
                <div class="row flex-column">
                    <div class="col">
                        <div class="row">
                            <div class="col d-flex justify-content-between align-items-center">
                                <h1>{{$product->name}}</h1>
                                @if ($product->featured == 1)
                                <span class="badge text-bg-success">Featured</span>
                                @endif
                            </div>
                        </div>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-6">
                                <p>ISBN: {{ $product->isbn }}</p>
                                <p>Price: {{ $product->price }} {{$currency}}</p>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-center">
                                <button class="btn btn-outline-secondary btn-lg">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
