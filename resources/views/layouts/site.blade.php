<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 19:07:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title',"GH Compare")</title>

    @include('includes.site.links')


</head>
<body>
<div id="wrapper">

    @include('includes.site.header')
    
    @yield('content')



    @include('includes.site.footer')

</div>
<!-- /.wrapper -->





@include('includes.site.scripts')

@yield('script')

</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 19:10:16 GMT -->
</html>
