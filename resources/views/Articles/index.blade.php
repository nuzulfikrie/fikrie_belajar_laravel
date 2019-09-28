@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')

<?php //print_r($articles); ?>
<div class="container">
    <h1 class="page-header">Articles</h1>
    <div class="float-right">
        <a type="button" class="button btn-info" href="{{ route('articles:create')}}">
            Create new
        </a>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success!</strong> {{ Session::get('message', '') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                  <th>ID</th>
                  <th>TITLE</th>
                  <th>BODY</th>
                  <th>CREATED</th>
                  <th>MODIFIED</th>
                  <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($articles as $article )
                     <tr>
                     <td>{{$article->id}}</td>
                     <td>{{$article->title}}</td>
                     <td>{{$article->body}}</td>
                     <td>{{$article->created_at}}</td>
                     <td>{{$article->modified_at}}</td>
                     <td>
                        <div class="btn-group" role="group">
                        <a type="button" class="btn btn-secondary" href="{{route('articles:edit',$article->id)}}">Edit</button>
                        <a type="button" class="btn btn-primary" href="{{route('articles:view',$article->id)}}">View</button>
                        <a type="button" class="btn btn-warning" href="{{route('articles:delete',$article->id)}}" onclick="return confirm('Are you sure you want to delete '. $article->id?)">Delete</button>

                        </div>


                     </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
