@extends('layouts.app')

@section('title', 'Index User')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Biography</td>
                <td>Skill</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->biography}}</td>
                    @foreach($user->skills as $talent)
                    <td>{{$talent["name"]}}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- {{ $users-> link}}; -->
@endsection
