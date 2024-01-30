<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title>Leather Ghar</title>

  @include('partials.style')
</head>
<body>
    
@include('partials.Header')

<main class="container mt-5">
    @yield('content')
</main>

@include('partials.footer')

@include('partials.scripts')
      
</body>
</html>
