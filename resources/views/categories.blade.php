@extends('main')

@section('title','Усі категорій магазину')

@section('content')
@foreach($categories as $category)
    <a href="{{ route('category',$category->slug)}}"><h2>{{$category->name}}</h2></a>
@endforeach
@endsection
