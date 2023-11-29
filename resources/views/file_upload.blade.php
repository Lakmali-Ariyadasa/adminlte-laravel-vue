@extends('layouts.app')

@section('content')

@php
$title = "Color Detection";
$breadcrumbs = [
'First' => ['url' => '/first'],
'Second' => ['url' => '/second'],
'Third' => ['url' => '/third']
];
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <file-upload></file-upload>
        </div>
    </div>
</div>
@endsection
