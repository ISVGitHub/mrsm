@extends('resume')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
         xmlns="http://www.w3.org/1999/html">
        <div class="row">
            @include('articles.header_template_articles')
            <!-- LEFT BLOCK Content Article -->

            <!-- RIGHT BLOCK -->
            @include('articles.right_block')
        </div>
    </div>
@stop