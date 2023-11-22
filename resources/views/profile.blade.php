@extends('layouts.app')

@section('content')

@php
$title = "Profile";
$breadcrumbs = [
'First' => ['url' => '/first'],
'Second' => ['url' => '/second'],
'Third' => ['url' => '/third']
];
@endphp


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="row">
                    <div class="col-md-2">
                        <div class="content">
                            <div  style="width:166pxpx; height:166pxpx;object-fit:cover;opacity:0.9">                           
                                <img class="img-fluid" src="{{ url('assets/images/profile.jpg') }}"  style="width:100%; height:100%;object-fit:cover;opacity:0.9">
                            </div>
                        </div>   
                    </div> 
                    <div class="col-md-4">
                            <p style="margin-bottom:10px !important; font-weight:600;">Kate Dev</p>
                            <p style="margin-bottom:10px !important;">katedev@yahoo.com</p>
                            <p style="margin-bottom:10px !important;">07XXXXXXXX</p>
                            <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy,
                            </h6>
                    </div>         
                 </div>

            </div>
        </div>
    </div>
</div>
@endsection