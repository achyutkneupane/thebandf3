@extends('layouts.head')
@section('title','Home')
@section('content')
    @include('page.banner', $setting)
    @include('page.profile', $setting)
    @include('page.gallery', $setting)
    @include('page.members', $members)
    @include('page.contact', $setting)
@endsection
