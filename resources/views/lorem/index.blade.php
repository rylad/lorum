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
	<h1> How many paragraphs do you need? </h1>
	<form action="lorem" method="post">
		{{ csrf_field() }}
		Number of Paragraphs:<br>
		<input type="text" name="count"><br>
		<input type="submit" value="Submit">
	</form>	
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop