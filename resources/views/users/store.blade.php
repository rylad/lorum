@extends('layouts.master')


@section('title', 'Random User Generator')


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@endsection


@section('content')

	
	<p>
		@if($gender == "male")
		<?php
			$f_content = file('../resources/assets/users/male_first.txt');
			$first = $f_content[array_rand($f_content)];
			$l_content = file('../resources/assets/users/last.txt');
			$last = $l_content[array_rand($l_content)];
			$email_raw = $first."@".$last.".com";
			$email=preg_replace('/\s+/', '', $email_raw);
			$phone = "(555) " . rand(333,777) . "-" . rand(0000,9999);
		?>
		@elseif($gender == "female")
		<?php
			$f_content = file('../resources/assets/users/female_first.txt');
			$first = $f_content[array_rand($f_content)];
			$l_content = file('../resources/assets/users/last.txt');
			$last = $l_content[array_rand($l_content)];
			$email_raw = $first."@".$last.".com";
			$email=preg_replace('/\s+/', '', $email_raw);
			$phone = "(555) " . rand(333,777) . "-" . rand(0000,9999);
		?>		
		@else
		<h1>Something went wrong, Go Away</h1>
		@endif
		
		<h1> Here is your newly minted human </h1>
		<h2> First Name: {{ $first }}</h2>
		<h2> Last Name: {{ $last }}</h2>
		<h2> Email Address: {{ $email }}</h2>
		<h2> Phone Number: {{ $phone }}</h2>

	<br> <br>
	<hr>
	<h1> Shall we create another fleshy mass?</h1>
	<form action="/users" method="post">
		{{ csrf_field() }}
		Which first name style? <br>
		<input type="radio" name="gender" value="male" checked="checked"> Male <br>
		<input type="radio" name="gender" value="female"> Female <br>
		<input type="submit" value="Create a human!">
	</form>
	</p>
	
	
@endsection


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@endsection