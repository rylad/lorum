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
	<h1> Lets create a new random human shall we?</h1>
	<form action="/users" method="post">
		{{ csrf_field() }}
		Which first name style? <br>
		<input type="radio" name="gender" value="male" checked="checked"> Male <br>
		<input type="radio" name="gender" value="female"> Female <br>
		<input type="submit" value="Create a human!">
	</form>
	<br>
	
@endsection


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@endsection