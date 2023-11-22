@extends('layouts.app')

@section('content')

@php
$title = "Home";
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
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="row">
                    <div class="col-md-4">
                        <bar-chart></bar-chart>
                    </div>
                    <div class="col-md-4">
                        <pie-chart></pie-chart>
                    </div>
                    <div class="col-md-4">
                        <bubble-chart></bubble-chart>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <color-bubble-chart></color-bubble-chart>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection