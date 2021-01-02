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
    <div class="row tile" >


        <div class="card tile">
            <h5 class="card-header text-center">Counter Details</h5>
            <div class="card-body">
                <h5 class=" ">
                    <i class="icon fa fa-circle-o"></i></i>
                    Counter </h5>

                     <form>
                        @foreach($counters as  $counter)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="icon fa fa-circle-o"></i>
                                    Client : {{ $counter->client }}</li>
                                <li class="list-group-item"><i class="icon fa fa-circle-o"></i>
                                    Project:{{ $counter->project }}</li>

                                <li class="list-group-item"><i class="icon fa fa-circle-o"></i>
                                       Hours: {{ $counter->hours }}</li>
                                <li class="list-group-item"><i class="icon fa fa-circle-o"></i>
                                     Worker  : {{ $counter->worker }}</li>
                            </ul>
                            <a href="counter/edit/{{$counter->id}}">
                                <button type="button" class="btn btn-primary btns" > Edit </button>
                            </a>
                        @endforeach
                    </form>

                    </div>
             </div>

</div>
@endsection
