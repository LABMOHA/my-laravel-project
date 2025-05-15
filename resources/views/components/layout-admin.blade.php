<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Admin </title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="{{asset('css\main.css')}}">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>

  <link rel="icon" href="images/favicon.ico" />
  <meta name="description" content="Admin One - free Tailwind dashboard">

  {{-- <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/"> --}}
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  {{-- <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png"> --}}
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  {{-- <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png"> --}}
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  

</head>
<body>

<div id="app">

{{-- nav bar --}}

@include('partials.nav_admin')


{{-- aside bar --}}

@include('partials.aside_admin')

{{-- my content --}}
{{$slot}}








{{-- <footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2023, LABBOU MOHAMED
      </div>

     
      
    </div>


  </div>
</footer> --}}



</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="js/chart.sample.min.js"></script>



<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
