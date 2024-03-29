@include('layout.header')
<div class="container my-5">

  <!--Section: Content-->
  <section class="text-center dark-grey-text mb-5">
    
    <h3 class="font-weight-bold pb-5 text-center">Welcome to My Blog Page</h3>

    <div class="row">
      <div class="col-md-12">

        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide" data-ride="carousel">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{URL('images/food-image.jpg')}} "
                alt="First slide">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="{{URL('images/film-image.jpg')}}"
                alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
              <img class="d-block w-100" src="{{URL('images/sport-image.jpg')}}"
                alt="Third slide">
            </div>
            <!--/Third slide-->
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

      </div>
    </div>

  </section>
  <!--Section: Content-->


</div>

