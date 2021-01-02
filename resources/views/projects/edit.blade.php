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
    <div class=" row tile ">
        <div class="modal-body">
            <form action="{{route('projects.update',$projects->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" value="{{$projects->title}}" name="title">

                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" value="{{$projects->description}}" id="name"
                           name="description">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Client</label>
                    <input type="text" class="form-control" value="{{$projects->client}}" name="client">

                </div>


                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" value="{{ old('image', $projects->image) }}" class="form-control">
                    <img src="{{ asset('images/'.$projects->image) }}"
                         style=" margin-top: 10px; width: 250px; height: 260px;" alt="">

                </div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Category</label>
                <select name="cat_id" id="cat_id" class="form-control" required>
                    <option value="" selected disabled> -- select category --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{$category->id == $projects->cat_id ? 'selected' : ''}}>{{
                            $category->title }}
                        </option>
                    @endforeach
                </select>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                    <a href="/projects">
                        <button type="button" class="btn btn-secondary">Go Back</button>
                    </a>
                </div>
            </form>

        </div>
    </div>
@endsection
