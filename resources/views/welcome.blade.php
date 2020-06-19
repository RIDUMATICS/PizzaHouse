@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref py-5">
    <div class="content px-2">
        <img src="/img/pizza-house.png" class="img-fluid" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create" class="btn" style=" border: 1px solid #5e2195; color:#5e2195;">Order a Pizza</a>
    </div>
</div>
@endsection
