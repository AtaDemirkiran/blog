@include('layout.header')

<div class="container">
    @foreach ($allBlog as $item)
      {{-- <a href="{{'blogEdit/'.$item->id}}">{{$item->id}}</a>  --}}
        {{$item->blogTitle}} <br/>
        {{$item->blogDesc}}<br/>
        <a type="button" href="{{'blogEdit/'.$item->id}}" class="btn btn-warning">
            Edit
        </a><br/>
    @endforeach
</div>