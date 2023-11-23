@extends('layouts.app')

@section('content')

@php
$title = "Approval";
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
                        <project-approvals></project-approvals>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection