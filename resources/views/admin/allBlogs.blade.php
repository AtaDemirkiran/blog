@include('admin.layout.header')

<div class="container col-sm-8">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Blog Title</th>
        <th scope="col">Blog Short Description</th>
        <th scope="col">Blog Category</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($allBlog as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->blogTitle}}</td>
        <td>{{$item->blogShortDesc}}</td>
        <td>{{$item->blogCategory}}</td>
        <td> <a type="button" href="{{'blogs/'.$item->id}}" class="btn btn-warning">
            Edit
        </a></td>
        <td> <a type="button" href="{{'delete/'.$item->id}}" class="btn btn-danger">
            Delete
        </a></td>
      </tr>
      @endforeach
  
    </tbody>
  </table>
</div>