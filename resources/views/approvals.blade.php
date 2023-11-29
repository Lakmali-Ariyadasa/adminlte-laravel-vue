<style>
button {
        padding: 15px 35px;
        color: #FFF;
        background-color: #002f78;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        border: 15px solid #002f78;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.1) inset;
        margin-bottom: 10px;
    }
</style>

@extends('layouts.app')

@section('content')

@php
$title = "Project Approval";
$breadcrumbs = [
'First' => ['url' => '/first'],
'Second' => ['url' => '/second'],
'Third' => ['url' => '/third']
];
@endphp



<div class="container">
    <div class="row justify-content-center">
             <div class="row">
                <div class="col-md-12">
                        <project-approvals></project-approvals>
                </div>                   
             </div>              
     </div>
</div>
@endsection