<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //pizza controller
    public function index() {
        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get(); //harus pake ->get() (khusu ::all() tidak pake ->get())
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        // $pizzas = Pizza::latest()->get();
    
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id) {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->base = request('base');
        $pizza->type = request('type');

        $pizza->save();
        
        error_log($pizza);

        return redirect('/')->with('mssg', 'thankyou for order');
    }
}
