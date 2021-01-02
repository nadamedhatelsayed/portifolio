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
    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<div class=" row tile " >
            <div class="modal-body">
                <form action="{{ route('counter.update',$counters->id) }}" method="post">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">client</label>
                        <input type="text" class="form-control" value="{{$counters->client}}" name="client">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">project</label>
                        <input type="text" class="form-control" value="{{$counters->project}}" id="name" name="project">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">hours</label>
                        <input type="text" class="form-control" value="{{$counters->hours}}" name="hours">

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">worker</label>
                        <input type="text" class="form-control" value="{{$counters->worker}}" name="worker">

                    </div>

                    <div class="modal-footer">
                        <a href="/admin/counter">
                        <button  type="submit" class="btn btn-success">Save Edit</button>

                        <button type="button" class="btn btn-secondary"  >Go Back</button>
                        </a>
                    </div>
                </form>
            </div>

</div>
@endsection
