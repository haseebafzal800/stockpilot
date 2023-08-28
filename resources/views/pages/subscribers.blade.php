@extends('layouts.default')
@section('content')
<div class="subscriber-page" id="subscriber-page wrapper">
    @include('includes.header')
    {!! $page->body !!}
    @include('includes.testimonials')
    @include('includes.newsletter')
    @include('includes.footer')
</div>
    @stop