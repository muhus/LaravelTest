<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('SBAdmin.partials.head')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

@include('SBAdmin.partials.managerNav')
<div class="content-wrapper">
    @yield('content')

    @include('SBAdmin.partials.footer')

    @include('SBAdmin.partials.footer-scripts')
</div>
</body>
</html>