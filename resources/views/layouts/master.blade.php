<!DOCTYPE html>
<html>
	<head>
		<title>
			@yield('title','WebDev Toolkit')
		</title>
		
			<meta charset='utf-8'>

		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
		<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
		<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>
		
		
		@yield('head')
	</head>
	<body>

		<header>
			<a href='/'>
				<img src='http://luetkemj.github.io/assets/posts/webdev-toolkit/toolkit.png'	alt='WebDev Logo' class='logo' style="width:150px;height:100px;">
			</a>
		</header>
		
		<nav>
			<ul>
				<li><a href='/lorem'>Make Me Some Words!</a></li>
				<li><a href='/users'>Give Me a Fleshy Mass!</a></li>
				<li><a href='/custom'>Do Something Else with Words!</a></li>
			</ul>
		</nav>

		<section>
			@yield('content')
		</section>

		<footer>
			&copy; {{ date('Y') }}  <a href="https://github.com/rylad/lorum" ><img src='https://image.freepik.com/free-icon/github-logo-in-a-rounded-square_318-40761.jpg' alt='GitHub' style="width:20px;height:20px;">Find This on GitHub</a>  <a href="http://thehomelabs.com/"> <img src='http://vignette1.wikia.nocookie.net/unturned-bunker/images/0/0a/Meaning-of-vault-boy-thumbs-up-jpg.jpg/revision/latest?cb=20160316025719'  style="width:20px;height:20px;">See my other projects </a>
		</footer>

		@yield('body')

	</body>
</html>