@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('home.slider')
    @include('home.banner')
    @include('home.new_arrival')
    @include('home.category')
    @include('home.popular')
    @include('home.top_deals')
@endsection

