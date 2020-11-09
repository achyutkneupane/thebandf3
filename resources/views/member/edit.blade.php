@extends('layouts.app')
@section('title','Edit Band Member')
@section('sectionTitle','Edit Member')
@section('content')
<div class="container">
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">
                        Field
                    </th>
                    <th scope="col">
                        Value
                    </th>
                </tr>
            </thead>
            <tbody>
                <form action="{{ route('member.update', $member->id) }}" method="post">
                    @csrf
                    @method('PUT')
                <tr>
                    <th scope="row">
                        Name
                    </th>
                    <td>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $member->name }}" placeholder="Name">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Designation
                    </th>
                    <td>
                    <input class="form-control" type="text" name="designation" id="designation" value="{{ $member->designation }}" placeholder="Designation">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Nick Name
                    </th>
                    <td>
                    <input class="form-control" type="text" name="nickname" id="nickname" value="{{ $member->nickname }}" placeholder="Nick Name">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Facebook Link
                    </th>
                    <td>
                    <input class="form-control" type="text" name="facebook" id="facebook" value="{{ $member->facebook }}" placeholder="Facebook Link">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Instagram Link
                    </th>
                    <td>
                    <input class="form-control" type="text" name="instagram" id="instagram" value="{{ $member->instagram }}" placeholder="Instagram Link">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Youtube Link
                    </th>
                    <td>
                    <input class="form-control" type="text" name="youtube" id="youtube" value="{{ $member->youtube }}" placeholder="Youtube Link">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Email Address
                    </th>
                    <td>
                    <input class="form-control" type="text" name="email" id="email" value="{{ $member->email }}" placeholder="Email Address">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Bio Text
                    </th>
                    <td>
                        <textarea name="bio" id="Content" row="10">
                            {{ $member->bio }}
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <input type="submit" name="submit" value="Edit" class="btn btn-dark">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
