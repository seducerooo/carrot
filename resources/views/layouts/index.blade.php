<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Pages</title>
@include('layouts.styles.PagesStyles')

</head>
<body>
@yield('AllPages')
@yield('HomePage')
@yield('ProductsPage')
@yield('IntegrationsPage')
@yield('LearningSupportPage')
@yield('AboutUsPage')
@yield('ContactUsPage')
@yield('EarlyAccessOne')
@yield('EarlyAccessTwo');
<script type="text/javascript" src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/custom.js') }}"></script>
</body>
</html>
