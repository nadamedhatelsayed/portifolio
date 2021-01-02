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


        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                           data-toggle="modal" href="#modaldemo8">Add One</a>
                        @include('testimonial.create')
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0">name</th>
                                <th class="border-bottom-0">job</th>
                                <th class="border-bottom-0">description</th>
                                <th class="border-bottom-0">image</th>
                                <th class="border-bottom-0">options</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($testimonials as  $testimonial)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->job }}</td>
                                    <td>{{ $testimonial->description }}</td>
                                    <td>
                                        <img src="{{asset('images/'.$testimonial->image)}}"
                                             style=" margin-top: 10px; width: 100px; height: 100px; border-radius: 50%; " alt="">
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example" >
{{--                                            <button  class="btn btn-success" data-toggle="modal" data-target="#edit{{$testimonial->id}}" style="margin-right:5px">edit</button>--}}
                                            <a class="btn btn-primary" href="testimonials/edit/{{$testimonial->id}}">Edit</a>

                                            <button  class="btn btn-danger" data-toggle="modal" data-target="#deleted{{$testimonial->id}}">deleted</button>
                                        </div>
                                    </td>
                                </tr>
                                 @include('testimonial.deleted')
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div></div>

@endsection
