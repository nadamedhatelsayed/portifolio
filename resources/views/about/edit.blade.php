@extends('layouts.dashboard.home')

@section('content')
    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
     @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="tile shadow mb-4">


                <form method="post" action="{{ route('about.update' , $aboutus->id)}}"   enctype="multipart/form-data" >

                    {{ csrf_field() }}
                    {{method_field('PATCH')}}

                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $aboutus->id }}">
                    </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email"   value="{{ old('email', $aboutus->email) }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone"   value="{{ old('phone', $aboutus->phone) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image"   value="{{ old('image', $aboutus->image) }}" class="form-control">
                       <img src="{{ asset('images/'.$aboutus->image) }}" style=" margin-top: 10px; width: 255px; height: 260px;" alt="">

                    </div>
                    <div class="form-group">
                        <label>Address 1</label>
                        <input type="text" name="address1"   value="{{ old('address1', $aboutus->address1) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address2</label>
                        <input type="text" name=" address2"   value="{{ old('address2', $aboutus->address2) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address3</label>
                        <input type="text" name="address3"   value="{{ old('address3', $aboutus->address3) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="summary" class="form-control"  >{{$aboutus->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Mission</label>
                        <textarea class="form-control" id="summary" name=" mission"  >{{$aboutus->mission}} </textarea>
                    </div>
                    <div class="form-group">
                        <label>Plan</label>
                        <textarea  class="form-control" id="summary" name="plan"  > {{$aboutus->plan}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Vision</label>
                        <textarea name="vision" class="form-control"  >{{$aboutus->vision}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Care</label>
                        <textarea name="care" class="form-control" >{{$aboutus->care}}</textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Save Changes  </button>
                    </div>







                </form><!-- end of form -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->








    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary' );
    </script>





@endsection
