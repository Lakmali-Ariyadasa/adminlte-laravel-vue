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

            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-3" style="height: 200px;">
                       <img src="{{ url('assets/images/profile.jpg') }}" style="width: 100%; height: 100%;object-fit:contain;" alt="profile-card">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="/edit" class="text-right" style="position:absolute;right:0;">
                                <i class="nav-icon fas fa-edit text-right"></i>
                                <p>Edit</p>
                            </a>
                            <h5 class="card-title" style="font-weight:600">{{ Auth::user()->name }}</h5>
                            <p class="card-text">{{ Auth::user()->email }}</p>
                            <p class="card-text"><small class="text-muted">07XXXXXXXX</small></p>
                            <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy,
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects view -->
    <profile-project-view></profile-project-view>
</div>
@endsection
