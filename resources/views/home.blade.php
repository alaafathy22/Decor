{{-- <div class="formHome">
        <div class="container " style="width:70%">
            <h1 class="text-center d-block" style="margin-bottom: 30px">اختر نوع وحدتك المراد حساب تكلفتها</h1>
            @foreach ($establishment_type as $key => $value_establishment_type)
                <div class="d-flex flex-{{ $value_establishment_type->type_row }} flex-wrap">
                    <div class=" col-6 position-relative custome_col">
                        <a
                            href="/home2/{{ $value_establishment_type->id }}?ID_value_establishment_type={{ $value_establishment_type->id }}">
                            <div class="shadow_black"></div>
                            <img class="img-thumbnail" src="photos/{{ $value_establishment_type->name_photo }}">
                        </a>
                    </div>
                    <div class=" col-6 text_of_establishment_type">
                        <h1>{{ $value_establishment_type->name }}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="footer">
        <footer></footer>
    </div> --}}





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>الرئيسية</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css-template/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css" />
    <link rel="stylesheet" href="css/css-template/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/css-template/tooplate-simply-amazed.css" type="text/css" />

    <!--

Tooplate 2123 Simply Amazed

https://www.tooplate.com/view/2123-simply-amazed

-->
</head>

<body>
    @if (session()->has('status-success'))
        <div class="alert alert-success my_alert" role="alert" id="my_alert">
            {{ session('status-success') }}
        </div>
    @endif


    <div id="outer">
        <header class="header order-last" id="tm-header">
            <nav class="navbar" style="position: relative">
                <div class="collapse navbar-collapse single-page-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#section-1"><span class="icn"><i
                                        class="fas fa-2x fa-air-freshener"></i></span> Our Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-2"><span class="icn"><i
                                        class="fab fa-2x fa-battle-net"></i></span> Our Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-3"><span class="icn"><i
                                        class="far fa-2x fa-images"></i></span> Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-4"><span class="icn"><i
                                        class="far fa-2x fa-comments"></i></span> Contact</a>
                        </li>
                    </ul>
                </div>
                {{-- <button >
                </button> --}}
                <a type="button" class="btn btn-danger logout_button" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off"></i>

                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </nav>
        </header>

        <button class="navbar-button collapsed" type="button">
            <span class="menu_icon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </span>
        </button>

        <main id="content-box" class="order-first">
            <div class="banner-section section parallax-window" data-parallax="scroll"
                data-image-src="img/section-1-bg.jpg" id="section-1">
                <div class="container">
                    <h1 class="text-center d-block custome_h1_head" style="margin-bottom: 30px">اختر نوع وحدتك المراد
                        حساب تكلفتها</h1>
                    <div class="item">
                        <div class="row">
                            @foreach ($establishment_type as $key => $value_establishment_type)
                                <div class="col-lg-6 col-sm-12">
                                    <a style="text-decoration: none"
                                        href="/home2/{{ $value_establishment_type->id }}?ID_value_establishment_type={{ $value_establishment_type->id }}">
                                        <div
                                            class="bg-blue-transparent logo-fa {{ $value_establishment_type->type_row }}">
                                            <div class="c-hover"></div>
                                            <span><i class="fas fa-2x fa-atom"></i></span>
                                            {{ $value_establishment_type->name }}
                                        </div>
                                    </a>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <section class="work-section section" id="section-2">
                <div class="container">
                    <div class="row">
                        <div class="item col-md-4">
                            <div class="tm-work-item-inner">
                                <div class="icn"><i class="fas fa-2x fa-icons"></i></div>
                                <h3>.01 Get An Idea</h3>
                                <p>Simply Amazed is free HTML template provided by Tooplate website. Please tell
                                    your
                                    friends about our website. Thank you.</p>
                            </div>
                        </div>
                        <div class="item col-md-4 one">
                            <div class="tm-work-item-inner">
                                <div class="icn"><i class="fas fa-2x fa-tools"></i></div>
                                <h3>.02 Create It</h3>
                                <p>This is a full-width CSS template with bootstrap 5, you can download, modify and
                                    use
                                    this layout for your simple CSS website.</p>
                            </div>
                        </div>
                        <div class="item col-md-4 two">
                            <div class="tm-work-item-inner">
                                <div class="icn"><i class="fab fa-2x fa-phoenix-framework"></i></div>
                                <h3>.03 Execute it</h3>
                                <p>You are allowed to use this for your personal and commerical projects, you are
                                    not
                                    allowed to redistribute the template ZIP file on any download site.</p>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <h2>Our Work</h2>
                    </div>
                </div>
            </section>

            <section class="gallery-section section parallax-window" data-parallax="scroll"
                data-image-src="img/section-3-bg.jpg" id="section-3">
                <div class="container">
                    <div class="title text-right">
                        <h2>Our Gallery</h2>
                    </div>
                    <div class="mx-auto gallery-slider">
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-01.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-02.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-03.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-04.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-05.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-06.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-07.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-08.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                        <figure class="effect-julia item">
                            <img src="img/gallery-img-09.jpg" alt="Image">
                            <figcaption>
                                <div>
                                    <p>Julia dances in the deep dark</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>

            <section class="contact-section section" id="section-4">
                <div class="container">
                    <div class="title">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6 mb-4 contact-form">
                            <div class="form tm-contact-item-inner">
                                <form action="{{ route('contact_us') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control"
                                            placeholder="الأسم" required>
                                    </div>
                                    <div class="form-group">
                                        <input name="number_phone" type="number" class="form-control"
                                            placeholder="رقم الموبيل" maxlength="11" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" required class="textarea form-control" placeholder="الرساله او الملحوظة المراد كتابتها"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="submit" class="btn btn-primary" value="إرسال">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 contact-details">
                            <div class="tm-contact-item-inner-2">
                                <p>Nam mollis felis elementum, placerat dolor id, vehicula libero. Etiam dui nisl,
                                    mattis ut rhoncus et, cursus ut diam.</p>
                                <ul class="font-weight-light">
                                    <li>
                                        <span class="icn"><i class="fas fa-mobile-alt"></i></span>
                                        <span class="lbl">Tel:</span> <a href="#">010-020-0340</a>
                                    </li>
                                    <li>
                                        <span class="icn"><i class="fas fa-at"></i></span>
                                        <span class="lbl">Email:</span> <a href="#">info@company.com</a>
                                    </li>
                                    <li>
                                        <span class="icn"><i class="fas fa-globe-asia"></i></span>
                                        <span class="lbl">URL:</span> <a href="#">www.company.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 map">
                            <!-- Map -->
                            <div class="map-outer tm-mb-40">
                                <div class="gmap-canvas">
                                    {{-- <iframe width="100%" height="400" id="gmap-canvas"
                                        src="https://www.google.com/maps/@29.3084021,30.8428497,13z?authuser=0&entry=ttu"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> --}}
                                        <iframe d="gmap-canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d55665.78547890083!2d30.842849699999995!3d29.3084021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1689968973179!5m2!1sen!2seg" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer container container-2">
                    <div class="row">
                        <p class="col-sm-7">Copyright 2023 AlaaFathy Co.</p>
                        <p class="col-sm-5 text-right design">Design: <a rel="nofollow"
                                href="https://www.facebook.com/alaafathy0055" target="_parent">AlaaFathy</a></p>
                    </div>
                </footer>
            </section>
        </main>
    </div>

    <script src="js/js-template/jquery-3.3.1.min.js"></script>
    <script src="js/js-template/bootstrap.bundle.min.js"></script>
    <script src="js/js-template/jquery.singlePageNav.min.js"></script>
    <script src="js/js-template/slick.js"></script>
    <script src="js/js-template/parallax.min.js"></script>
    <script src="js/js-template/templatemo-script.js"></script>
    <script>
        setTimeout(() => {
            const box = document.getElementById('my_alert');
            box.remove();

        }, 1000); // 👈️ time in milliseconds
    </script>
</body>

</html>
