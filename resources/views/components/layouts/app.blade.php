<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Selling Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @livewireStyles
    <style>
        /* Small devices (Phones, 600pxand down) -- this would display the text at 5.0rem on phones */

        @media only screen and (max-width: 600px) {
            .fix-size {
                font-size: 14px;
            }
        }


        /* Large devices (laptops/desktops, 992px and up) -- This would display the text at 10.0rem on laptops and larger screens */

        @media only screen and (min-width: 992px) {
            .fix-size {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">
           <div class="d-flex justify-content-center align-items-center">
               <img src="{{ asset('logos/krg.png') }}" alt="Logo" width="60" height="auto" class="d-inline-block align-text-top">

               <div class="fix-size">
                   Ministry of Agriculture and Water Resources
               </div>
           </div>
        </a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">© 2024 Ministry of Agriculture and Water Resources</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>

@livewireScripts

<script>
    Livewire.on('scroll', () => {
        window.scrollTo({
            top: 15,
            left: 15,
            behaviour: 'smooth'
        })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
