@extends('layouts.dashboard.home')
@section('content')
    <div class="row">
        <div class="card col-md-8">
            <div class="card-header">
                <h3 class="card-title">Images</h3>
            </div>
            <div class="card-body p-0">
                <div class="card-body">

                    <form action="{{route('img_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Image</label>
                            <input type="file" class="form-control"  id="image-upload" value="" name="image" >

                        </div>

                        <input type="hidden" value="{{  $projects->id  }}" name="project_id" >

                        <div class="row">
                            <div class="col-sm-3">
                                <button class="btn btn-success mt-2"> Add Image </button>
                            </div>
                        </div>

                    </form>


                    @foreach($images as $image)
                        <img src="{{asset('images/'.$image->image )}}" style="width: 50%; height: 50%">

                        <div class="btn-group" role="group" aria-label="Basic example" >
                            <button  class="btn btn-success" data-toggle="modal" data-target="#edit{{$image->id}}" style="margin-right:5px">edit</button>
                            <button  class="btn btn-danger" data-toggle="modal" data-target="#deleted{{$image->id}}">deleted</button>
                        </div>
                        @include('images.edit')
                        @include('images.deleted')
                    @endforeach



                </div>
            </div>
        </div>
    </div>
@endsection
