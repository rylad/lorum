@extends('layouts.master')


@section('title')
    Custom Ipsum
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@stop


@section('content')

	<p>
		<h1> Dont forget, you asked for this: </h1>
		<hr>
		<?php
		
		$loremText = "";
		$f_content = file('../resources/assets/scripts/'.$source.'.txt');
		$f_count = count($f_content);
		$count_para = rand(100,200);
		
		
		for ($i=0; $i<$count; $i++) {
			
			for ($x=0; $x<$count_para; $x++){
				$randomWord = $f_content[array_rand($f_content)];
				$loremText .= $randomWord;
				$loremText .= " ";
			}
			$loremText .= "<br>" . "<br>";
		}
		
		print_r($loremText);
		?>
	</p>
	
	@if(count($errors) > 0)
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	<br>
	<hr>
	<h1> Do you need more words? </h1><br>
	<form action="/custom" method="post">
		{{ csrf_field() }}
		Number of Paragraphs (1-10):<br><br>
		<input type="text" name="count"><br><br>
		<input type="submit" value="Submit">
	</form>	
	<hr>
	<br>	
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop