<!DOCTYPE html>
<html lang="en" class="form-screen">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Admin One Tailwind CSS Admin Dashboard</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css?v=1628755089081">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>


  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
 
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">




</head>
<body>

<div id="app">

  <section class="section main-section">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-lock"></i></span>
          Admin 
        </p>
      </header>
      <div class="card-content">
        <form action="{{route('_admin.connect')}}" method="POST">
          @csrf
          <div class="field spaced">
            <label class="label" for="email">Login</label>
            <div class="control icons-left">
              <input class="input" type="text" name="email" placeholder="user@example.com" 
              value="{{old('email')}}">
              <span class="icon is-small left"><i class="mdi mdi-account"></i></span>
            </div>
            <p class="help">
              Please enter your login
            </p>
                              @error('email')
                                <div class="text-red-500 text-xs mt-1">
                                {{$message}}   
                                </div>
                            
                                @enderror
          </div>

          <div class="field spaced">
            <label class="label" for="password">Password</label>
            <p class="control icons-left">
              <input class="input" type="password" name="password" placeholder="Password" 
              value="{{old('password')}}">
              <span class="icon is-small left"><i class="mdi mdi-asterisk"></i></span>
            </p>
            <p class="help">
              Please enter your password
            </p>
            @error('password')
                                <div class="text-red-500 text-xs mt-1">
                                {{$message}}   
                                </div>
                            
                                @enderror
          </div>

          

          <hr>

          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button blue">
                Login
              </button>
            </div>
            
          </div>

        </form>
      </div>
    </div>

  </section>


</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>



<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
