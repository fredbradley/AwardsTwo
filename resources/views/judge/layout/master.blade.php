<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{url('/css/vendor.css')}}" rel="stylesheet">
    <link href="{{url('/css/app.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @section('customhead')
    <!-- Custom Scripts for this Page (Header) -->
    @endsection
	@yield('customhead')

</head>
<body>
	@include('entrant.layout.nav')


    @yield('content')

	<!-- Scripts -->
	<script src="/js/vendor.js"></script>
	@section('customfoot')
	
	<!-- Custom Scripts for this Page (Footer) -->
	
	@endsection
	@yield('customfoot')

</body>
</html>
