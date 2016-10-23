<!DOCTYPE html>
<html>
<head>
    @yield('head')
</head>
<body>

    <header>
		
    </header>

    <section>
		@yield('content')
	</section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    @yield('body')

</body>
</html>