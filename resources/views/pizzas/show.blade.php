@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="title">
        type:{{$pizza->type}} - base:{{$pizza->base}} - name:{{$pizza->name}}
    </div>
</div>
@endsection