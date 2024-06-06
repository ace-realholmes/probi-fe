<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Photographer Portfolio,width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>GRAPHOLIO | Photographer Portfolio</title>
    <!-- Swiper js CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <!-- Ionic Icons usage -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <!-- Fancybox Library CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <style>
        .swiper-pagination-bullet {
            background-color: gray;
            display: inline-block;
        }

        .swiper-scrollbar {
            background-color: white;

        }
    </style>
</head>

<body class="select-none ">
    <livewire:navigation />
    {{ $slot }}
</body>
<script>
        function onToggleMenu(e) {
            let navLinks = document.querySelector('.nav-links');
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[10%]', 'hidden', 'md:hidden')
            navLinks.classList.toggle('hidden')
            navLinks.classList.toggle('md:hidden')
        };
        if (typeof swiper === 'undefined') {
        const swiper = new Swiper('.swiper', {

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                bulletActiveClass: 'swiper-pagination-bullet-active'
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
            },

            breakpoints: {

                376: {
                    slidesPerView: 1,
                    spaceBetween: 40
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 50
                },

                1300: {
                    slidesPerView: 3,
                    spaceBetween: 60
                },
            }

        });
    }
</script>

</html>
