@include('admin.layout.header')
<div class="container">

    <form action="{{route('blogUpdate')}}" method="POST">
        
        @csrf
        <input type="hidden" name="id" id="" value="{{$blog->id}} ">
        Blog Title: <br/> <input type="text" name="blogTitle" id="" value="{{$blog->blogTitle}}"><br/>
        Blog Short Description: <br/> <input type="text" name="blogShortDesc" id="" value="{{$blog->blogShortDesc}}"><br/>
        Blog Description : <textarea class="form-control" name="blogDesc" id="" value="{{$blog->blogDesc}}" cols="30" rows="10">{{$blog->blogDesc}}</textarea> <br>
        <br/>
        <div class="form-group">
            <select name="categories">
              <option value='{{$blog->blogCategory}}'>{{$blog->blogCategory}}</option>
              <option name="Food" {{$blog->categories =="Food" ? 'Selected': ''}} >Food</option>
              <option name="Sport" {{$blog->categories =="Sport" ? 'Selected': ''}}>Sport</option>
              <option value="Film" {{$blog->categories =="Film" ? 'Selected': ''}} >Film</option>
            </select>
          </div>
        <button class="btn btn-success" type="submit">Update</button>


    </form>

</div>