@extends('layouts.dashboard.home')

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="row">
    <div class="col-sm-4 mb-2">
        <a href="{{route('projects.create')}}" class="btn btn-success">Add project</a>
    </div>
    </div>

    <div class="row">


        @foreach($projects as $project)

            <div class="col-sm-4 mb-2">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="card-title">{{$project->title}}</h2>
                    </div>
                    <div class="card-body">
                        <h5 class="card-text">{{$project->category->title}}</h5>
                        <h5 class="card-text">{{$project->description}}</h5>
                        <a href="projects/edit/{{$project->id}}" class="btn btn-success">Edit</a>
{{--                        <a href="#" class="btn btn-danger">Deleted</a>--}}
                        <a  class="btn btn-danger" style="color: white" data-toggle="modal" data-target="#deleted{{$project->id}}">Deleted</a>

                        <a href="projects/details/{{$project->id}}" class="btn btn-primary">details</a>

                    </div>
                    @include('projects.deleted')
                </div>
            </div>
        @endforeach

    </div>

@endsection
