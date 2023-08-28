@extends('layouts.default')
@section('content')
    <div id="wrapper" class="pilot-page">
        @include('includes.header')
        {!! $page->body !!}
                
        @include('includes.testimonials')
        @include('includes.newsletter')
        @include('includes.footer')
    </div>
@stop