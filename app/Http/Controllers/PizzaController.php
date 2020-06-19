<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index () {
            // $pizzas = Pizza::all();
            // $pizzas = Pizza::find(1, 'name');
            // $pizzas = Pizza::where('type', 'hawaiian')->get();
            $pizzas = Pizza::latest()->get();

            return view('pizzas.index', [ 'pizzas' => $pizzas] );
    }

    public function show ( $id ) {
        $pizza = Pizza::findOrFail($id);
        return view( 'pizzas.show', [ 'pizza' => $pizza ]);
    }

    public function create () {
        return view('pizzas.create');
    }

    public function store () {
        $name = request('name');
        $type = request('type');
        $base = request('base');
        $toppings = request('toppings');

        $pizza = new Pizza();

        $pizza->name = $name;
        $pizza->type = $type;
        $pizza->base = $base;
        $pizza->toppings = $toppings;

        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
        
    }

    public function destroy ( $id ) {
        $pizza = Pizza::findOrFail($id);
        $pizza->destroy($id);

        return redirect('/pizzas');
    }
}
