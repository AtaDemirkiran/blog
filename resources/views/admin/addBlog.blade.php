<!DOCTYPE html>
<html lang="en">
<head>
     
</head>
<body>
  @include('admin.layout.header')
    <div class="container">
    <form class="col-md-12"  action="{{route('blogAdd')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Blog Title</label>
          <input type="text" name="blogTitle" class="form-control" id="title">
          <label for="short-desc" class="form-label">Blog Short Description</label> 
          <input type="text" name="blogShortDesc" class="form-control" id="short-desc">
        </div>

        <div class="form-group">
          <select name="categories" id="">
            <option value="Sport">Sport</option>
            <option value="Food">Food</option>
            <option value="Film">Film</option>
          </select>
        </div>

        <textarea class="form-control" name="blogDesc" id="" cols="30" rows="10"></textarea> <br>
       


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>