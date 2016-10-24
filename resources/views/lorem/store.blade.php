@extends('layouts.master')


@section('title')
    Lorem Ipsum
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@stop


@section('content')
    @if($count)
        <p>
			<h1> Dont forget, you asked for this: </h1>
			<hr>
			<?php
				$generator = new Badcow\LoremIpsum\Generator();
				$paragraphs = $generator->getParagraphs($count);
				echo implode('<p>', $paragraphs);
			?>
		</p>
    @else
        <h1>There was no amount of paragraphs chosen</h1>
    @endif
	
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
	<form action="/lorem" method="post">
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