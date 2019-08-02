@extends('blog.layouts.site')

@section('header')
	@include('blog.header')
@endsection

@section('content')
	@include('blog.homeBlog')
	@include('blog.newsLatter')
@endsection

@section('footer')
	@include('blog.footer')
@endsection