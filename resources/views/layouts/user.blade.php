<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> BIBILIOTHE UCC</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/styleNav.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.js')}}"></script>
    @livewireStyles
    <link rel="stylesheet" href="stylefull.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    @yield('style')
</head>

<body class="" style="background:#f4f2f2;">

    <x-navbarBootstrap />

    <div class="">


        @yield("content")

    </div>



    <x-Footer />


    @livewireScripts
    <script src="{{asset('js/app.js')}}"></script>
   
    @yield('script')

</body>

</html>