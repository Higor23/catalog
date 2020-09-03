<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aroma Shop - Home</title>
    <link rel="icon" href="{{ asset('app-assets/img/Fevicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('aroma/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aroma/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('aroma/vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('aroma/vendors/nice-select/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('aroma/vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('aroma/vendors/owl-carousel/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('aroma/css/style.css')}}" type="text/css">
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand logo_h" href="{{ route('initial.index') }}"><img src="{{asset('aroma/img/logo.jpg')}}" width="150px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('initial.index') }}">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('products.all') }}">Todos</a></li>
                                    @foreach($categories as $category)
                                    <li class="nav-item"><a class="nav-link" href="{{ route('filtercategory.index', [$category->id]) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quem somos</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                    <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Fale Conosco</a></li>
                        </ul>


                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->
    <main class="site-main">
        @yield('content')
    </main>
    <!--================ Start footer Area  =================-->
    <footer class="footer">
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Nossa Missão</h4>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no
                                divided deep moved us lan Gathering thing us land years living.
                            </p>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Links</h4>
                            <ul class="list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Brand</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h4 class="footer_title">Galeria</h4>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="{{ asset('aroma/img/gallery/r1.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('aroma/img/gallery/r2.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('aroma/img/gallery/r3.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('aroma/img/gallery/r5.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('aroma/img/gallery/r7.jpg') }}" alt=""></li>
                                <li><img src="{{ asset('aroma/img/gallery/r8.jpg') }}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Nossos Contatos</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Endereço
                                </p>
                                <p>Avenida Guanambi, 1790, Bairro Brasil - Vitória da Conquista - BA</p>

                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Telefone - Whatsapp
                                </p>
                                <p>
                                    (77)98129-5751 <br>
                                </p>

                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    cactusimpressoes@gmail.com <br>
                                    www.cactusonline.com.br
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Desenvolvido por Cactus | Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> | Todos os direitos reservados.
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

</body>


<script src="{{asset('aroma/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('aroma/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('aroma/vendors/skrollr.min.js') }}"></script>
<script src="{{asset('aroma/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{asset('aroma/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
<script src="{{asset('aroma/vendors/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{asset('aroma/vendors/mail-script.js') }}"></script>
<script src="{{asset('aroma/js/main.js')}}"></script>


</html>