<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Tp1" />
        <meta name="author" content="" />
        <title>Catstore</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

        <script src="{{ asset('js/bootstrap.js') }}"></script>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

        <!-- font awesome (moi) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    </head>
    <body id="page-top" class="d-flex flex-column min-vh-100">
        <header>
               <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand text-decoration-none" href="/"><span class="fw-bolder">The Cat Store</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#shoppingBasketModal">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('hero')
    <main class="flex-shrink-0">
     
        <!-- content -->
          <!-- Page Content-->
        <div class="container-fluid p-0 px-">

        @yield('content')

        </div>

    </main>
  
        <!-- FOOTER -->
        <footer class="mt-auto border-top">
          <div class="fs-6 text-center">&copy;thecatstore</div>
        </footer>




        <!-- Shopping Basket Modal -->
        <div class="modal fade" id="shoppingBasketModal" tabindex="-1" aria-labelledby="shoppingBasketModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="shoppingBasketModalLabel">Shopping Basket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Basket items will be loaded here -->
                        @foreach($livres as $livre)
                        @if($livre->panier == 1)

                                <div class="card-body p-1 border rounded-4">
                                    <div class="row gx-2">
                                        <div class="col bg-light rounded-4 text-lg-start mb-4 mb-lg-0 content-wrapper">
                                            <div class="image-wrapper">
                                                <img src="{{ asset('images/catstorelogo.jpg') }}" alt="" style="width:100px;">
                                            </div>
                                            <div>
                                            
                                                <p>{{$livre->titre}}</p>
                                            
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                        <a href="ajoutPanier/{{$livre->id}}"><button class="btn btn-primary">Supprimer</button></a>
                                        </div>
                                    </div>
                                </div>

                        @endif
                        @endforeach
                          
                    </div>

                    <div class="modal-footer">

                        <a class="nav-link" href="pay" class="btn-payer border">Payer</a>
                    </div>
                </div>
            </div>
        </div>



       <!-- Bootstrap core JS-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
