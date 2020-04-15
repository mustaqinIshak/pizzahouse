@extends('layouts.layout')
@section('content')
<form action='/pizza' method="POST">
    @csrf
    <div class="form-group">
        <label for="type">type</label>
        <select class="form-control" name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
    </div>
    <div class="form-group">
        <label for="base">base</label>
        <select class="form-control" name="base" id="base">
            <option value="cheesy crust">Cheesy crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
    </div>
    <div class="form-group">
        <label for="name">order by :</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <button type="submit" class="btn btn-primary" value="Order Pizza">Submit</button>
</form>
@endsection