<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title')
    </title>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="public/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <!-- Swiper Js -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>

<body>
    <main>
        <!-- authentication -->
        <section class="authentication">
            <div class="authentication__content">
                <div class="authentication__close">
                    <i class="bi bi-x"></i>
                </div>
                @if (Auth::check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"
                            type="submit">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </button>
                    </form>
                @else
                    @include('auth.login')
                    @include('auth.register')
                @endif
            </div>
        </section>
        <div class="page-wrapper">
            @include('components.sidebar')
            <section class="wrapper-items">
                @include('components.notification')
                <div class="items">
                    <div class="container-fluid">
                        <div class="row">
                            @yield('content')
                            <!-- upcoming -->
                            <div class="col-lg-4 upcoming">
                                <h4 class="items__title">Upcoming 🍿</h4>
                                <div class="upcoming__contents">
                                    <div class="upcoming__item">
                                        <img src="{{ asset('img/posters/posters-j.jpg') }}" alt="" />
                                        <div class="upcoming__item--contents">
                                            <a href="">Star Wars | Airing on Sunday</a>
                                            <p class="upcoming__item--details">30 years after the defeat of Darth Vader
                                                and the Empire, Rey, a scavenger from the planet Jakku, finds a BB-8
                                                droid that knows the whereabouts of the long lost Luke Skywalker. Rey,
                                                as well as a rogue stormtrooper and two smugglers,</p>
                                        </div>
                                    </div>
                                    <div class="upcoming__item">
                                        <img src="{{ asset('img/posters/posters-k.jpg') }}" alt="" />
                                        <div class="upcoming__item--contents">
                                            <a href="">Star Wars | Airing on Sunday</a>
                                            <p class="upcoming__item--details">30 years after the defeat of Darth Vader
                                                and the Empire, Rey, a scavenger from the planet Jakku, finds a BB-8
                                                droid that knows the whereabouts of the long lost Luke Skywalker. Rey,
                                                as well as a rogue stormtrooper and two smugglers,</p>
                                        </div>
                                    </div>
                                    <div class="upcoming__item">
                                        <img src="{{ asset('img/posters/posters-l.jpg') }}" alt="" />
                                        <div class="upcoming__item--contents">
                                            <a href="">Star Wars | Airing on Sunday</a>
                                            <p class="upcoming__item--details">30 years after the defeat of Darth Vader
                                                and the Empire, Rey, a scavenger from the planet Jakku, finds a BB-8
                                                droid that knows the whereabouts of the long lost Luke Skywalker. Rey,
                                                as well as a rogue stormtrooper and two smugglers,</p>
                                        </div>
                                    </div>
                                    <div class="upcoming__item">
                                        <img src="{{ asset('img/posters/posters-m.jpg') }}" alt="" />
                                        <div class="upcoming__item--contents">
                                            <a href="">Star Wars | Airing on Sunday</a>
                                            <p class="upcoming__item--details">30 years after the defeat of Darth Vader
                                                and the Empire, Rey, a scavenger from the planet Jakku, finds a BB-8
                                                droid that knows the whereabouts of the long lost Luke Skywalker. Rey,
                                                as well as a rogue stormtrooper and two smugglers,</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Bootstrap Script -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Custom Script -->
    <script>
        // notification
        let notificationBell = document.querySelector(".ring");
        let notificationContent = document.querySelector(".notification__content");
        //Show bell notifications
        notificationBell.onclick = function() {
            notificationContent.classList.toggle("notification__content--active");
        };
        // Authentication
        let login = document.querySelector(".login");
        let register = document.querySelector(".register");
        let loginForm = document.querySelector(".log-in");
        let registerForm = document.querySelector(".sign-up");
        let authButton = document.querySelector(".user__detail");
        let authContent = document.querySelector(".authentication");
        let authClose = document.querySelector(".authentication__close");
        // Authentication popup
        authButton.onclick = function() {
            authContent.classList.toggle("authentication-active");
        };
        authClose.onclick = function() {
            authContent.classList.remove("authentication-active");
        };
        // Register Form
        registerForm.addEventListener("click", () => {
            login.classList.remove("active");
            register.classList.add("active");
        });
        // Login Form
        loginForm.addEventListener("click", () => {
            login.classList.add("active");
            register.classList.remove("active");
        });

        // password toggle
        let visibilityToggle = document.querySelectorAll(".toggle__visibilty");
        let inputPassword = document.querySelectorAll(".password__type");
        // show password type text
        for (let i = 0; i < inputPassword.length; i++) {
            visibilityToggle[i].addEventListener("click", () => {
                if (inputPassword[i].type == "password") {
                    inputPassword[i].type = "text";
                    visibilityToggle[i].classList.add("bi-eye");
                    visibilityToggle[i].classList.remove("bi-eye-slash");
                } else {
                    inputPassword[i].type = "password";
                    visibilityToggle[i].classList.remove("bi-eye");
                    visibilityToggle[i].classList.add("bi-eye-slash");
                }
            });
        }

        // Trending Carousel
        var swiper = new Swiper(".trendingSlider", {
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: {
                el: ".trending-pagination",
                clickable: true,
            },
        });
        // Top rate Carousel
        var swiper = new Swiper(".topRated", {
            slidesPerView: 1,
            spaceBetween: 10,

            breakpoints: {
                340: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1599: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
            },
        });
    </script>
</body>

</html>
