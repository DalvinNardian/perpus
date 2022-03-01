<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- navbar start -->
    <div class="navbar">
      <div class="gb-brand">Perpustakaan</div>
      <ul class="nav-link">
            @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}" class="gb-link">You are Logged in</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="gb-link">Log in</a> </li>                  
                 @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="gb-link">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
        </ul>
    </div>
    <!-- navbar end -->

    <!-- header start  -->
    <section class="main">
      <div class="container">
        <div class="main-content">
          <div class="text">
            <h1>
              Web Perpustakaan SMK WIKRAMA
              <div class="deskripsi1">
                Connect with like-minded gamers to exchange ideas and
                collaborate
            </h1>
            <div class="btn-get-started">
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn">Get Strated</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Get Strated</a>
            @endauth
            @endif
            </div>
          </div>
        </div>
        <div class="banner">
          <img src="../img/vector.png" height="400px" />
        </div>
      </div>
    </section>
    <!-- header end -->
  </body>
</html>
