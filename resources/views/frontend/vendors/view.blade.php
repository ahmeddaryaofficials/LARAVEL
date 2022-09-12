@extends('layouts.front')
@section('title')
{{$vendor->vendor_name}}
@endsection
@section('content')
 <div class="row py-6 px-4">
    <div class="col-md-12mx-auto"> <!-- Profile widget -->
         <div class="bg-white shadow rounded overflow-hidden">
             <div class="px-4 pt-0 pb-4 pt-8 cover">
                 <div class="media align-items-end profile-head">
                    <div class="profile mr-6">
                        <img src="{{asset('assets/uploads/vendors/'.$vendor->image)}}" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                        {{-- <a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a> --}}
                    </div>
                    <div class="media-body mb-5 text-white">
                        <div class="example">
                        <h4 class="mt-0 mb-0">{{$vendor->vendor_name}}</h4>
                        <p class="abc"> <i class="fas fa-map-marker-alt mr-2"></i>{{$vendor->locaation}}</p>
                    </div>
                    </div>
                </div>
             </div>
             <div  class="bg-light p-0 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                     <li class="list-inline-item">
                         <h5 class="font-weight-bold mb-0 d-block">{{$vendor->min}}</h5>
                         <small class="text-muted">
                            <i class="fas fa-user mr-1"></i></small>
                                </i>MIN</small> </li>
                                <li class="list-inline-item">
                                    <h5 class="font-weight-bold mb-0 d-block">{{$vendor->max}}</h5>
                                    <small class="text-muted">
                                         <i class="fas fa-user mr-1"></i>MAX</small>
                                        </li>
                                        {{-- <li class="list-inline-item">
                                            <h5 class="font-weight-bold mb-0 d-block">340</h5>
                                            <small class="text-muted"> <i class="fas fa-user mr-1">
                                                </i>Following</small>
                                            </li> --}}
                                        </ul>
                                    </div>

                                    <div class="px-4 py-3">
                                         <h5 class="mb-0">About</h5>
                                         <div class="p-4 rounded shadow-sm bg-light">
                                             <p class="font-italic mb-0">{{$vendor->description}}</p>

                                            </div> <div class="py-4 px-4">
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                     <h5 class="mb-0">Recent photos</h5>
                                                     <a href="#" class="btn btn-link text-muted">Show all</a>
                                                     </div>
                                                     <div class="row"> <div class="col-lg-6 mb-2 pr-lg-1">
                                                        <img src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm"></div> <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm">
                                                        </div>
                                                        <div class="col-lg-6 pr-lg-1 mb-2">
                                                            <img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid rounded shadow-sm">
                                                        </div>
                                                        <div class="col-lg-6 pl-lg-1"><img src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="" class="img-fluid rounded shadow-sm">
                                                        </div>

                                                    </div>
                                                </div>
                                             </div>
                                             </div>

</div>


@endsection
