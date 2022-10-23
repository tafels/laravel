@extends('main')

@section('title',$category->name)

@section('content')
{{$category->name}}
<a href="/categories">повернутися назад</a>
@endsection
