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
			<?php
				$generator = new Badcow\LoremIpsum\Generator();
				$paragraphs = $generator->getParagraphs($count);
				echo implode('<p>', $paragraphs);
			?>
		</p>
    @else
        <h1>There was no amount of paragraphs chosen</h1>
    @endif
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop