<!Doctype html>
<html lang="fr">

    <head>
        <title>@yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.0-beta1 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

         <!-- Favicons -->
      <link href={{ asset("assets/img/favicon.png") }} rel="icon">
      <link href={{ asset("assets/img/apple-touch-icon.png") }} rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href={{ asset("assets/vendor/animate.css/animate.min.css") }} rel="stylesheet">
      <link href={{ asset("assets/vendor/aos/aos.css") }} rel="stylesheet">
      <link href={{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
      <link href={{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }} rel="stylesheet">
      <link href={{ asset("assets/vendor/boxicons/css/boxicons.min.css") }} rel="stylesheet">
      <link href={{ asset("assets/vendor/glightbox/css/glightbox.min.css") }} rel="stylesheet">
      <link href={{ asset("assets/vendor/swiper/swiper-bundle.min.css") }} rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href={{ asset("assets/css/style.css") }} rel="stylesheet">
    </head>

<body>
      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <h1 class="logo me-auto me-lg-0"><a href="/">Assistancia</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        @auth
        <ul>
            @if ( Auth::user()->privilege == 'user' )
            <li><a class="nav-link scrollto active" href="{{route('demande.create') }}">Faire une demande</a></li>
            <li><a class="nav-link scrollto active" href="/demandeUser">Voir mes demandes</a></li>
            @endif
            @if ( Auth::user()->privilege == 'admin')
            <li><a class="nav-link scrollto" href="/demandeAdmin">Mes Demandes</a></li>
            @endif

            @if ( Auth::user()->privilege == 'membre')
            <li><a class="nav-link scrollto" href="/voir_admin">Infos Administrateurs</a></li>
            <li><a class="nav-link scrollto" href="/gestionA">Gestion Assistancia</a></li>

            @endif

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" style="color: black" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Deconnexion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

        @endauth
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      @guest
      <a href="/register" class="book-a-table-btn scrollto d-none d-lg-flex">S'inscrire</a>
      <a href="/login" class="book-a-table-btn scrollto d-none d-lg-flex">Se connecter</a>
      @endguest

    </div>
  </header><!-- End Header -->
    <main id="main">


                    @yield('body')

    </main>
    <footer id="footer">
      <div class="footer-top">
        <div class="container" align="center">
            <div class="copyright">
              &copy; Copyright <strong><span>LGI3 promo 2022</span></strong>
            </div>
            <div class="credits">
              Developpée par <a href="https://chat.whatsapp.com/DK3jCBcdPiLFL3GNVQSE8I">Fatima Binta Traore ,Mame Boury Cissé et Amdy Dioum</a>
            </div>
          </div>
      </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>


  <!-- Vendor JS Files -->
  <script src={{ asset("assets/vendor/aos/aos.js") }}></script>
  <script src={{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <script src={{ asset("assets/vendor/glightbox/js/glightbox.min.js") }}></script>
  <script src={{ asset("assets/vendor/isotope-layout/isotope.pkgd.min.js") }}></script>
  <script src={{ asset("assets/vendor/php-email-form/validate.js") }}></script>
  <script src={{ asset("assets/vendor/swiper/swiper-bundle.min.js") }}></script>

  <!-- Template Main JS File -->
  <script src={{ asset("assets/js/main.js") }}></script>
</body>

</html>
