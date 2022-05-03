
@include('layout.header')

@foreach ($category as $item)
    

<div class="container mt-5">
    <!--Section: Content-->
    <section class="dark-grey-text">
    
        <!-- Grid row -->
      <div class="row align-items-center">
        <!-- Grid column -->
        <div class="col-lg-12 col-xl-12">
          <!-- Post title -->
          <h4 class="font-weight-bold mb-3"><strong>{{$item->blogTitle}} </strong></h4>
          <!-- Excerpt -->
          <h6> {{$item->blogCategory}}  </h6>
          <p class="dark-grey-text">{{$item->blogDesc}}</p>
          <!-- Post data -->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->  
      <hr class="my-5">

    </section>
    <!--Section: Content-->
  </div>
  @endforeach