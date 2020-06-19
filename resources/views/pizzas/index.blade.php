@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="pizza icon">
            <h4>{{ $pizza->name }} <a class="ml-3  btn btn-sm" style="display:'inline-block'; border:.5px solid #5e2195; border-radius: 0.2rem;" href="/pizzas/{{ $pizza->id }}">  CHECK </a></h4>
        </div>
    @endforeach
</div>
@endsection('content')
