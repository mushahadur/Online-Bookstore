<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Online Bookstore</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

       <!-- Syle Start -->
    @include('frontend.layout.partials.style')
</head>

<body>

       <!-- Header Start -->
        @include('frontend.layout.partials.header')



        <!-- Products Start -->
        @yield('contain')
     <!-- Products End -->

       <!-- Footer Start -->
        @include('frontend.layout.partials.footer')


       <!-- Script files Start -->

    @include('frontend.layout.partials.script')

</body>

</html>