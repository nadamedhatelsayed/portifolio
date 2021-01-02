@extends('layouts.dashboard.home')

@section('content')



    <div class="tile">

        <h3> Project Details</h3>
        <div class="row">
            <div class=" col-md-6">
                <img src="{{ asset('images/'.$projects->image) }}" style="height: 320px; width:400px;" class="rounded">l
            </div>
            <div class="float-right col-md-6">
                     <ul class="  list-group-flush">
                        <li class="list-group-item"><i class="fa fa-envelope"></i>
                            {{ $projects->title }}</li>
                        <li class="list-group-item"><i class="fa fa-phone"></i>
                            {{ $projects->description }}</li>

                        <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i>
                            {{ $projects->project_date }}</li>
                        <li class="list-group-item"><i class="fa fa-user-o" aria-hidden="true"></i>
                            {{ $projects->client }}</li>
                         <li class="list-group-item"><i class="fa fa-bars" aria-hidden="true"></i>
                             {{   $projects->category->title }}</li>

                    </ul>

            </div>


        </div>
    </div>

@endsection
