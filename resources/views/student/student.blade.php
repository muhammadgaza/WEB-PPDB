@extends('layout.master')

@section('content')

<section class="section">
    <div class="section-header">
        <h1>student</h1>
    </div>

    <div class="section-header-breadcrumb">

    </div>

    <div class="section-body">
        <h1 class="section-title"> Hi, {{Auth::user()->name}}</h1>
    </div>

</section>
@endsection