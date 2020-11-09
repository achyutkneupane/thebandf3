@extends('layouts.app')
@section('title','Band Members')
@section('sectionTitle','Members')
@section('content')
<div class="container">
    <div class="row mt-1">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                @if (count($members)>0)
                @foreach ($members as $member)
                    <tr>
                        <th scope="row">{{ $member->id }}</th>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->designation }}</td>
                        <td>
                        <a class="btn btn-dark" href="{{ route('member.edit', $member->id) }}">Edit</a><br>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Members</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
