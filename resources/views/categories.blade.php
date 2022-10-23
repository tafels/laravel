@foreach($categories as $category)
    <a href="{{$category->slug}}}">{{$category->name}}</a>
@endforeach
