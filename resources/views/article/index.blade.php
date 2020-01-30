@extends('layouts.app')

@section('title', 'Default Laravel Page')

@section('left')
    @parent
    <p>Child left</p>
@endsection

@section('content')
    <p>Article Content</p>
@endsection