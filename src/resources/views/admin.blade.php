@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="admin__content">
    <div class="admin__heading">
        <h2>Admin</h2>
    </div>
    <form action="find" method="POST">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="" name="" value="{{}}">
    <input type="" name="" value="{{}}">
    <input type="" name="" value="{{}}">
    <input type="" name="" value="{{}}">
    <input type="submit" value="検索">
    <input type="submit" value="リセット">