@extends('layouts.app')
@section('title','Setting')
@section('sectionTitle','Site Setting')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 ml-auto">
            <a href="{{ route('setting.edit', $setting->id) }}" class="btn btn-outline-dark">
                + Edit
            </a>
        </div>
    </div>
    <div class="row mt-1">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Setting
                    </th>
                    <th scope="col">
                        Value
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        E-mail
                    </th>
                    <td>
                        {{ $setting->email }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Booking E-mail
                    </th>
                    <td>
                        {{ $setting->booking }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Facebook Link
                    </th>
                    <td>
                        <a href="{{ $setting->fbLink }}">
                            {{ $setting->fbLink }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Instagram Link
                    </th>
                    <td>
                        <a href="{{ $setting->instaLink }}">
                            {{ $setting->instaLink }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Youtube Link
                    </th>
                    <td>
                        <a href="{{ $setting->ytLink }}">
                            {{ $setting->ytLink }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Contact Number
                    </th>
                    <td>
                        {{ $setting->contact }}
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Bio
                    </th>
                    <td>
                        {!! $setting->bandprofile !!}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
