<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Only Cars')</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="flex flex-col min-h-screen">
  
  @include('layouts.navbar')
  
  <!-- konten fleksibel -->
<div class="flex-grow pt-28 px-6 w-full max-w-7xl mx-auto">
    @yield('content')
</div>

  
  @include('layouts.footer')

</body>
</html>
