@extends('layouts.master')


@section('title', 'Web Dev Toolkit')

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@endsection


@section('content')
	<h1>Beep:Boop: What would you like to do today? ::End Transmission::</h1> <br>
	<hr>
	<a href="/lorem"><h2>Give me words to make a website look real (Lorem Ipsum)</h2></a><br>
	<a href="/users"><h2>Create a real human entity (User Generator)</h2></a>
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