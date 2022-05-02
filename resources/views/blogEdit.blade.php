@include('layout.header')

<form action="" method="POST">
    
    @csrf
    <input type="hidden" name="id" id="" value="{{$blog->id}} ">
     Blog Title: <input type="text" name="name" id="" value="{{$blog->blogTitle}}"><br>
     Blog Description : <input type="text" name="surname" value="{{$blog->blogDesc}}" id=""><br>

     <button type="submit">Update</button>


</form>