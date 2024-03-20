@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        @foreach ($products as $product)
            <div class="col my-3">
                <a href="{{route('products.show', $product)}}">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h4 class="card-title">{{ $product->name }}</h4>
                          <div class="card-text my-3">
                              <p>{{ $product->description }}</p>
                          </div>
                          <p>ISBN: {{ $product->isbn }}</p>
                          <p>Price: {{ $product->price }} {{$currency}}</p>
                          {{-- mettere radio --}}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection



