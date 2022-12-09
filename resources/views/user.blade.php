@extends('layouts.app')

@section('content')
<h1>Liste Utilisateurs : </h1>
    @foreach($users as $user)
    <p>
        <b> Id  </b>: {{$user->id }}
        <b> Nom  </b>: {{$user->name }}
        <b> Email </b> : {{$user->email }}
    </p>
    <br>
    @endforeach
@endsection