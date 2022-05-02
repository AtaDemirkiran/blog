@include('layout.header')
<div class="container">

    <form action="{{route('blogUpdate')}}" method="POST">
        
        @csrf
        <input type="hidden" name="id" id="" value="{{$blog->id}} ">
        Blog Title: <br/> <input type="text" name="blogTitle" id="" value="{{$blog->blogTitle}}"><br/>
        Blog Description : <textarea class="form-control" name="blogDesc" id="" value="{{$blog->blogDesc}}" cols="30" rows="10">{{$blog->blogDesc}}</textarea> <br>
        <br/>
        <button class="btn btn-success" type="submit">Update</button>


    </form>

</div>