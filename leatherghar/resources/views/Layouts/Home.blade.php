@extends('master')
@section('content')
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide slider" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('images/slide1.PNG')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{url('images/slide2.PNG')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{url('images/slide3.PNG')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- HR2 -->
<div class="bottomborder2"></div>
<div class="row">
    <div class="col-md-5">
        <div class="shoe1">
          <img src="{{url('images/shoe2.PNG')}}" alt="" >
        </div>
    </div>
    <div class="col-md-7">
      <div class="shoehead">
        <h1>Double Sole Navi Blue Zalmi Peshawar Chappal<br> Leather Handmade M-004<br>
        <span>Rs.3,999.00</span><br>
        <label>Size</label>
      </div>
      <label for="validationTooltip04" class="form-label"></label>
    <select class="form-select" id="validationTooltip04" required >
      <option selected disabled value="">Choose...</option>
      <option>36/6</option>
      <option>40/7</option>
      <option>41/8</option>
      <option>42/9</option>
      <option>43/10</option>
      <option>44/11</option>
      <option>45/12</option>
    </select>
<!-- Cart -->
<!-- Button trigger modal -->
<button type="button" class="cartbtn" >
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#528ec1" class="bi bi-cart-plus me-2 mb-2 " viewBox="0 0 16 16">
  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
ADD TO CART
</button>
<br>
<button class="buybtn" type="submit">BUY IT NOW</button>
<br> 

<div class="details">
<a href="" >Full details<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4795ee" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></a>
</div>
<div class="social d-flex">
<div class="facebook">
  <a href=""class="share" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="White" class="bi bi-facebook me-2 mb-1" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>Share</a>
</div>
<div class="tweet">
  <a href="" class="twitter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter me-2" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>Tweet</a>
</div>
<div class="pin">
  <a href="" class="pinterest"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pinterest mb-1 me-2" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
</svg>Pin it
  </a>
</div>
</div>
</div>
<div class="bottom"></div>
<!-- Row -->
<div class="row">
  <div class="col-md-6">
<div class="card"style="border:none;">
  <div class="card-body Mustard">
    <h2 class="card-title ">Dark Mustard Zalmi Chappal</h2>
    <p class="card-text">his Peshawari Chappal unique design is handmade of genuine cow leather, hand stitched by the experienced craftsmen of Peshawar. The sole is made of tyre rubber with leather on the upper side of the sole. Stitched with fine thread with due care and given best finishing for customers who value quality. </p>
    <a href="#" class="btn-primary btn  now">BUY NOW</a>
  </div>
</div>
</div>
<div class="col-md-6">
  <img src="{{url('images/shoe3.PNG')}}" alt="" class="shoe3">
</div>
</div>
<!-- Row -->
<div class="Bottom2"></div>
</div>
<!-- last section -->
<div class="row">
    <div class="col-md-5">
        <div class="shoe1">
          <img src="{{url('images/shoe4.PNG')}}" alt="" >
        </div>
    </div>
    <div class="col-md-7">
     
      <div class="shoehead">
        <h1>Double Sole Navi Blue Zalmi Peshawar Chappal<br> Leather Handmade M-004<br>
        <span>Rs.3,999.00</span><br>
        <label>Size</label>
      </div>
      <div class="optional">
      <label for="validationTooltip04" class="form-label"></label>
    <select class="form-select" id="validationTooltip04" required >
      <option selected disabled value="">Choose...</option>
      <option>36/6</option>
      <option>40/7</option>
      <option>41/8</option>
      <option>42/9</option>
      <option>43/10</option>
      <option>44/11</option>
      <option>45/12</option>
    </select>
<!-- Cart -->
<!-- Button trigger modal -->
<button type="button" class="cartbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#528ec1" class="bi bi-cart-plus me-2 mb-2 " viewBox="0 0 16 16">
  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
ADD TO CART
</button>
<br>
<button type="button" class="buybtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
BUY IT Now
</button><br>

<div class="details">
<a href="" >Full details<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></a>
</div>
<div class="social d-flex">
<div class="facebook">
  <a href=""class="share" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="White" class="bi bi-facebook me-2 mb-1" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>Share</a>
</div>
<div class="tweet">
  <a href="" class="twitter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter me-2" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>Tweet</a>
</div>
<div class="pin">
  <a href="" class="pinterest"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pinterest mb-1 me-2" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
</svg>Pin it
  </a>
</div>
</div>
</div>
<!-- Model -->

</div>

    </div>
</div>
</div>
@endsection