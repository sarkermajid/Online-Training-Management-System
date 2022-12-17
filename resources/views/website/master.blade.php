<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTMS @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}website/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}website/css/all.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}website/css/style.css"/>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">OTMS</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Training Category</a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li><a href="{{ route('training.category',['id'=>$category->id]) }}" class="dropdown-item">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('training.all') }}" class="nav-link">All Training</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
                <li><a href="{{ route('login-registration') }}" class="nav-link">Login/Registration</a></li>
            </ul>
        </div>
    </nav>

    @yield('body')

    <footer class="pt-5 pb-3 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body h-100 bg-dark text-white border-0">
                        <h1>OTMS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eligendi molestiae nam nihil repellat temporibus? Earum fugiat impedit totam voluptatibus?</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card card-body h-100 bg-dark text-white border-0">
                        <h1>Popular Training</h1>
                        <ul class="navbar-nav">
                            <li><a href="" class="nav-link">PHP with Laravel Framework</a></li>
                            <li><a href="" class="nav-link">Mobile App Development</a></li>
                            <li><a href="" class="nav-link">Responsive Web Design</a></li>
                            <li><a href="" class="nav-link">Professional Digital Marketing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body h-100 bg-dark text-white border-0">
                        <h3>Contact With Us</h3>
                        <address>
                            House No - 420, Road No - 520, Dhanmondi, Dhaka - 1215
                        </address>
                        <h3>Follow Us</h3>
                        <ul class="nav">
                            <li><a href="" class="nav-link"><i class="fa-brands fa-facebook text-white"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-twitter text-white"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-instagram text-white"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-linkedin text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="footer-end pt-3">
            <div class="row border-top pt-3">
                <div class="col">
                    <p class="text-white text-center mb-0 pb-0">@copyright All right reserved by <a href="" class="text-danger text-decoration-none">sarkermajid</a></p>
                </div>
            </div>
        </section>
    </footer>

<script src="{{ asset('/') }}website/js/bootstrap.bundle.js"></script>
<script src="{{ asset('/') }}website/js/jquery-3.6.1.min.js"></script>
</body>
</html>
