@extends('layouts.master')


@section('title', 'Lorem Ipsum')

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@endsection


@section('content')
	<h1> How many paragraphs do you need? </h1><br>
	<hr>

	@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
	@endif

	<form action="/lorem" method="post">
		{{ csrf_field() }}
		Number of Paragraphs (1-10):<br><br>
		<input type="text" name="count" value='{{old("count")}}'><br><br>
		<input type="submit" value="Compute">
	</form>	
	<hr>
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