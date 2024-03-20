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



