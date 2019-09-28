@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('co0ntent')
content
<?php print_r($article); ?>
@endsection
