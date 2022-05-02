<!DOCTYPE html>
<html lang="en">
<body>
    @include('layout.header')
    <div class="container mt-5">


        <!--Section: Content-->
        <section class="dark-grey-text">
      
      
          <!-- Grid row -->
          <div class="row align-items-center">
      
            <!-- Grid column -->
            <div class="col-lg-5">
      
              <!-- Featured image -->
              <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt="Sample image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-lg-7">
              <!-- Post title -->
              <h4 class="font-weight-bold mb-3"><strong>Welcome to Blog Page</strong></h4>
              <!-- Excerpt -->
              <p>Click to add new blog.</p>
              <!-- Post data -->
              <!-- Read more button -->
              <a class="btn btn-success btn-md btn-rounded mx-0" href="{{route('blog')}}" >Add Blog</a>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
          <hr class="my-5">
          
        </section>
        <!--Section: Content-->
      
      
      </div>


</body>
</html>