@extends('layouts.master')


@section('title', 'Custom Ipsum')

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@endsection


@section('content')
	<h1> So you decided to get crazy eh? </h1><br>
	<hr>
	
	@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
	@endif
	
	<form action="/custom" method="post">
		{{ csrf_field() }}
		What should we source words from?<br><br>
		<input type="radio" name="source" value="action_hero">The Last Action Hero<br><br>
		<input type="radio" name="source" value="flubber">Flubber<br><br>
		<input type="radio" name="source" value="hackers">Hackers<br><br>
		<input type="radio" name="source" value="matrix">The Matrix<br><br>
		
		And how many paragraphs should we generate...<br><br>
		<input type="text" name="count" value='{{old("count")}}'><br><br>
		
		<input type="submit" value="Create the Stuff!">
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