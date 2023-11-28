@extends('layouts.app')

@section('content')

@php
$title = "Users";
$breadcrumbs = [
'First' => ['url' => '/first'],
'Second' => ['url' => '/second'],
'Third' => ['url' => '/third']
];
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <color-detection></color-detection>
        </div>
        <div class="col-md-12">
        <color-selection></color-selection>
        </div>
    </div>
</div>
@endsection
