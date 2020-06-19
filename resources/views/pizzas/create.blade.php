@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="post">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name"/>
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra Toppings:</label>
            <label class="my-0"> <input type="checkbox" name="toppings[]" value="mushrooms" id="mushrooms">Mushrooms </label>
            <label class="my-0"> <input type="checkbox" name="toppings[]" value="peppers" id="peppers">Peppers </label> 
            <label class="my-0"> <input type="checkbox" name="toppings[]" value="garlic" id="garlic">Garlic </label>
            <label class="my-0"> <input type="checkbox" name="toppings[]" value="olives" id="olives">Olives </label>
        </fieldset>
        <input type="submit" value="Order Pizza" />
    </form>
</div>
@endsection('content')
