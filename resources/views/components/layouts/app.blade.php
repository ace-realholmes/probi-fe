<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!-- Ionic Icons usage -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
        <livewire:navigation />
        {{ $slot }}
    </body>

    <script>
        let navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[10%]')
            navLinks.classList.toggle('hidden')
            navLinks.classList.toggle('md:hidden')
        }

        const swiper = new Swiper('.swiper', {

        // If we need pagination
        pagination: {
        el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
autoplay: {
delay: 5000,
},

480: {
slidesPerView: 3,
spaceBetween: 30
},

        });

    </script>
</html>
