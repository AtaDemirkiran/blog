@include('layout.header')

  <div class="container my-5 py-5 z-depth-1">

      <!--Section: Content-->
      <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
        <!--Grid row-->
        <div class="row">
          @foreach ($blogs as $item)
          <!--Grid column-->
          <div class="col-lg-7 mb-4 mb-lg-0">
            <h3 class="font-weight-bold">{{$item->blogTitle}}</h3>
            <a href="{{'category/'.$item->blogCategory}}"><h6> {{$item->blogCategory}} </h6></a>
            <p class="text-muted">{{$item->blogDesc}} </p>
          </div>
          @endforeach
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!--Section: Content-->


  </div>
