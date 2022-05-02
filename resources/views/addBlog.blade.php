<!DOCTYPE html>
<html lang="en">
<head>
     
</head>
<body>
    @include('layout.header')
    <div class="container">
    <form class="col-md-12"  action="{{route('blogAdd')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Blog Title</label>
          <input type="text" name="blogTitle" class="form-control" id="title">
        </div>
        
        <textarea class="form-control" name="blogDesc" id="" cols="30" rows="10"></textarea> <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>