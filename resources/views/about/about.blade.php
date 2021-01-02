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

     <div class="card ">
         <h5 class="card-header text-center">About Us Details</h5>
         <div class="card-body">
             <h5 class="card-title">
                 <i class="fa fa-address-card"></i>
                 About us </h5>
             <p class="card-text">   </p>

             <div class="card">
                 <form>

               @foreach($aboutus as $about)
                 <ul class="list-group list-group-flush">
                     <li class="list-group-item"><i class="fa fa-envelope"></i>
                         Email : {{ $about->email }}</li>
                     <li class="list-group-item"><i class="fa fa-phone"></i>
                         Phone:{{ $about->phone }}</li>

                     <li class="list-group-item"><i class="fa fa-address-book"></i>
                         Adress 1: {{ $about->address1 }}</li>
                     <li class="list-group-item"><i class="fa fa-address-book"></i>
                         Address 2: {{ $about->address2 }}</li>
                     <li class="list-group-item"><i class="fa fa-address-book"></i>
                         Address 3: {{ $about->address3 }}</li>
                     <li class="list-group-item"><i class="fa fa-list-ol "></i>
                         Description: {!! $about->description !!} </li>
                 </ul>


             <div class=" last-sec" >
                 <div class="row row-cols-1 row-cols-md-2 g-4">
                     <div class="col">
                         <div class="card">
                             <div class="card-body">
                                 <h5 class="card-title">
                                     <i class="fa fa-bullseye"></i>
                                     Mission </h5>
                                 <p class="card-text"> {{ $about->mission }}</p>
                             </div>
                         </div>
                     </div>
                     <div class="col">
                         <div class="card">

                             <div class="card-body">
                                 <h5 class="card-title"><i class="fa fa-low-vision"></i>Vision</h5>
                                 <p class="card-text"> {{ $about->vision }}
                                 </p>
                             </div>
                         </div>
                     </div>

                     <div class="col">
                         <div class="card">
                             <div class="card-body">
                                 <h5 class="card-title"><i class="fa fa-list-ol"></i> Plane </h5>
                                 <p class="card-text"> {{ $about->plan }}</p>
                             </div>
                         </div>
                     </div>
                     <div class="col">
                         <div class="card">

                             <div class="card-body">
                                 <h5 class="card-title"><i class="fa fa-heart"></i> Care</h5>
                                 <p class="card-text">  {{$about->care}}</p>
                             </div>
                         </div>
                     </div>
                 </div>

                 <a href="about/edit/{{$about->id}}">
                 <button type="button" class="btn btn-primary btns" > Edit </button>
                 </a>

             </div>
                     @endforeach
                 </form>
             </div>
         </div>
    </div>
 </div>
@endsection
