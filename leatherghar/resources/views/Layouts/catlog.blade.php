@extends('master')
@section('content')
<div class="container">
    <!-- breadcrum -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb"class="divider">
  <ol class="breadcrumb homecrumb">
    <li class="breadcrumb-item "><a href="{{asset('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
  </ol>
</nav>
<!-- margin -->
<div class="border12"></div>
<!-- Main Row -->
<div class="row mainrow">
    <div class="col-md-2 ">
        <div class="design">
        <div class="collection ">
            <h2 class="shoph3">By Categories</h2>
         <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item ">
    <h2 class="accordion-header  " id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
       New Arrivals
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
      <ul class="list">
                <li><a href="" class="active-filter">All</a></li>
                <li><a href="" class="active-filter">Peshawari Chappal</a></li>
                <li><a href="" class="active-filter">Zalmi Chappal</a></li>
                <li><a href="" class="active-filter">Sandals</a></li>
                <li><a href="" class="active-filter">Sneakers</a></li>
             </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Fragrances
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
      <ul class="list">
                <li><a href="" class="active-filter">Perfumes</a></li>
                <li><a href="" class="active-filter">Body Spray</a></li> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
       Cloths
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
      <ul class="list">
                <li><a href="" class="active-filter"> Kurta Shalwar</a></li>
                <li><a href="" class="active-filter"> Tee shirts</a></li>
                <li><a href="" class="active-filter">Jackets</a></li>
                <li><a href="" class="active-filter">Hoddies</a></li>
                <li><a href="" class="active-filter"> Casual Sweeters</a></li>
                <li><a href="" class="active-filter">Waist Coat suit</a></li>
      </div>
    </div>
  </div>
  <!-- <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
       Sale
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
      <ul class="list">
                <li><a href="" class="active-filter"> Perfumes</a></li>
                <li><a href="" class="active-filter"> Stitched Dress</a></li>
                <li><a href="" class="active-filter">Unstitched</a></li>
                <li><a href="" class="active-filter">Winter off</a></li>
                <li><a href="" class="active-filter"> Deodrands</a></li>
                
      </div>
    </div>
  </div> -->

  <div class="range">
  <h2 class="price1">Price</h2>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Up To PKR 1000
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    PKR 1000 TO PKR 2000
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    PKR 2000 TO PKR 3000
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    PKR 3000 TO PKR 4000
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    PKR 4000 TO PKR 5000
  </label>
</div>
  </div>
</div>


        </div>
      

</div>


    </div>
    <!-- Main Row Second column -->
    <div class="col-md-10 designborder">
      <div class="product d-flex">
        <h1 class="pro">PRODUCTS</h1>
        <label>Sort By</label>
        <select class="form-select1" aria-label="Default select example">
  <option selected>Featured</option>
  <option value="1">Buy Selling</option>
  <option value="2">Price,High to Low</option>
  <option value="2">Price,Low to High</option>
  <option value="3">Date,Old to New</option>
  <option value="4">Date,New to Old</option>
</select>
<div class="button-group">
<button class="btn btn-light grid-system" id="list">
                     <i class="fa fa-bars"></i>
                    </button>
                    <button class="btn btn-light grid-system " id="grid"><i class="fa fa-th-large"></i>
</button>
</div>
 </div>
    <!-- row end -->
    <div class="container mt-5">
    <div id="products" class="row view-group">
                <div class="item col-xs-3 col-lg-3">
                    <div class="thumbnail card ">
                        <div class="img-event cardimg1">
                            <img class="group list-group-image img-fluid " src="{{url('images/card1.PNG')}}" alt="" />
                        </div>
                        
                        <div class="caption card-body card1">
                            <p class="group inner list-group-item-text ">
                            Double Sole Brown Zalmi Peshawar Chappal Pure Leather Handmade M-007</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead">
                                    Rs.3,999.00</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-3 col-lg-3">
                    <div class="thumbnail card">
                        <div class="img-event cardimg1">
                            <img class="group list-group-image img-fluid" src="{{url('images/card2.PNG')}}" alt="" >
                        </div>
                        
                        <div class="caption card-body card1">
                            <p class="group inner list-group-item-text ">
                            Double Sole Dark Mustard Zalmi Peshawar Chappal Pure Leather Handmade M-003</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead">
                                    Rs.3,999.00</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-3 col-lg-3">
                    <div class="thumbnail card ">
                        <div class="img-event cardimg1">
                            <img class="group list-group-image img-fluid" src="{{url('images/card3.PNG')}}" alt="" >
                        </div>
                        
                        <div class="caption card-body card1">
                            <p class="group inner list-group-item-text ">
                            Double Sole Dark Mustard Zalmi Peshawar Chappal Pure Leather Handmade M-003</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead">
                                    Rs.3,999.00</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item col-xs-3 col-lg-3">
                    <div class="thumbnail card">
                        <div class="img-event cardimg1">
                            <img class="group list-group-image img-fluid" src="{{url('images/card4.PNG')}}" alt="" >
                        </div>
                        
                        <div class="caption card-body card1">
                            <p class="group inner list-group-item-text ">
                            Double Sole Dark Mustard Zalmi Peshawar Chappal Pure Leather Handmade M-003</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead">
                                    Rs.3,999.00</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-3 col-lg-3">
                    <div class="thumbnail card">
                        <div class="img-event cardimg3">
                            <img class="group list-group-image img-fluid card5img" src="{{url('images/card5.PNG')}}" alt="" >
                        </div>
                        
                        <div class="caption  card-body cardtext2">
                            <p class="group inner list-group-item-text cardtext">
                            Double Sole Dark Mustard Zalmi Peshawar Chappal Pure Leather Handmade M-003</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead lead1">
                                    Rs.3,999.00</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-3 col-lg-3">
                    <div class="thumbnail card">
                        <div class="img-event cardimg3">
                            <img class="group list-group-image img-fluid card5img" src="{{url('images/card6.PNG')}}" alt="" >
                        </div>
                        
                        <div class="caption card-body cardtext2">
                            <p class="group inner list-group-item-text cardtext">
                            Double Sole Dark Mustard Zalmi Peshawar Chappal Pure Leather Handmade M-003</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead lead1">
                                    Rs.3,999.00</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-3 col-lg-3">
                    <div class="thumbnail card">
                        <div class="img-event cardimg2">
                            <img class="group list-group-image img-fluid card7img " src="{{url('images/card45.png')}}" alt="">
                        </div>
                        
                        
                        <div class="caption card-body cardtext2">
                            <p class="group inner list-group-item-text cardtext">
                            Double Sole Dark Mustard Zalmi Peshawar Chappal Pure Leather Handmade M-003</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <p class="lead lead1">
                                    Rs.3,999.00</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
       
               
                
                    </div>
                </div>
            </div>
</div>
</div>
</div>
@endsection