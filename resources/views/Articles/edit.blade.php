@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')

    <div class="container">
        <div class="row">
            <h1 class="page-header">
                @include('articles.form')
            </h1>
        </div>
    </div>
@endsection
