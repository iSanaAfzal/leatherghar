@extends('master')
 @section('content') 
 <div class="container">
 <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb"class="divider">
  <ol class="breadcrumb homecrumb">
    <li class="breadcrumb-item "><a href="{{asset('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
  </ol>
</nav>
<!-- margin -->
<div class="border12"></div>
<!-- form -->
<div class="form">
  <h2>Contact</h2>
</div>
<form class="inputs">
 <input type="text" id="name" class="form-control name " placeholder="Name">
 <input type="text" id="Email" class="form-control Email" placeholder="Email">
 <input type="text" id="phone" class="form-control phone" placeholder="Phone Number">
 <textarea name="" id="message" cols="30" rows="10"class="message">Message</textarea>
<div>
 <input type="submit" class="btn btn-right" value="Send">
</div>
</form>

  </div>

 </div>
@endsection