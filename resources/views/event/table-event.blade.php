<!doctype html>
<html class="fixed">
@include('Layout.head')
<body>
<section class="body">

    <!-- start: header -->
@include('Layout.header')
<!-- end: header -->

    <!-- start: sidebar -->
@include('Layout.sidebar')
<!-- end: sidebar -->
    @include('Layout.header')
    @include('Layout.list')

</section>

<!-- Vendor -->
@include('Layout.javaScripts')
</body>
</html>
