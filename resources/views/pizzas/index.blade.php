@extends('layouts.layout')
@section('content')
<div class="flex-center full-height pizzas">
    <div class=" title-pizza">
        <h1>list pizza: </h1>
    </div>
    <div class="list">  
        @foreach($pizzas as $pizza)
            <div>{{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}</div>
        @endforeach
    </div>
</div>
@endsection