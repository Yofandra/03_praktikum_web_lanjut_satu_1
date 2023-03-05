<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        content {
            height: 100vh;
        }

        #footer {
            width: 100%;
            background-color: rgb(66, 66, 66);
            display: flex;
            border-bottom: 2px solid black;
        }

        .left {
            width: 33%;
            margin-left: 150px;
        }

        .left h2 {
            font-size: 24pt;
        }

        .list-icon {
            display: flex;
            list-style-type: none;
            padding: 10px;
        }

        .list-icon ul li {
            display: inline;
            justify-content: space-between;
            padding: 0px 10px;
        }

        .list-contact {
            padding-bottom: 50px;
        }

        .list-contact ul li {
            list-style-type: none;
        }

        .center {
            width: 33%;
            margin-left: 150px;
        }

        .center h2 {
            font-size: 20pt;
        }

        .list-information ul li {
            list-style-type: none;
            padding: 3px;
        }

        .list-information ul li a {
            color: black;
            text-decoration: none;
            font-size: 10pt;
        }

        .list-information ul li a:hover {
            color: rgb(233, 233, 0);
        }

        .right {
            width: 33%;
            margin-left: 150px;
        }

        .right h2 {
            font-size: 20pt;
        }

        .list-helpful ul li {
            list-style-type: none;
            padding: 3px;
        }

        .list-helpful ul li a {
            color: black;
            text-decoration: none;
            font-size: 10pt;
        }

        .list-helpful ul li a:hover {
            color: rgb(233, 233, 0);
        }

        .copyright {
            height: 10vh;
            background-color: rgb(66, 66, 66);
            text-align: center;
        }

        .copyright h4 {
            padding-top: 25px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Yofandra.mart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ Route('homee') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{Route('sayur')}}">Sayur</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{Route('daging')}}">Daging</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{Route('buah')}}">Buah</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news/terkini">News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Program
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{Route('belanjamurah')}}">Belanja Murah</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{Route('belanjabulanan')}}">Belanja Bulanan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('aboutUs') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs/show">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <div id="footer">
        <div class="left">
            <h2>Follow Us</h2>
            <div class="list-icon">
                <ul>
                    <li><a href="https://www.instagram.com/yofandraarta/"><i class="fab fa-instagram-square" style="font-size:36px ;color:black"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=082140950530"><i class='fab fa-whatsapp-square' style='font-size:36px; color:black'></i></a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=100010231096260"><i class='fab fa-facebook-square' style='font-size:36px;color: black;'></i></a></li>
                </ul>
            </div>
            <h2>Contact Us</h2>
            <div class="list-contact">
                <ul>
                    <li><i class="fa fa-phone" style="font-size:24px"></i> : 082140950530</li>
                    <li><i class="fa fa-envelope" style="font-size:24px"></i> : yofandraarta@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="center">
            <h2>Information</h2>
            <div class="list-information">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">More Search</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <h2>Helpful Links</h2>
            <div class="list-helpful">
                <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Supports</a></li>
                    <li><a href="#">Term & Condition</a></li>
                    <li><a href="#">Privacy Police</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright">
        <h4>copyright &copy; 2022 Yofandra Arta Priyoga</h4>
    </div>
</body>

</html>