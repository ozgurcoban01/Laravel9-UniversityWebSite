@extends('layouts.adminbase')

<div class="container-scroller">
@include('admin.sidebar')
    <div class="container-fluid page-body-wrapper">

        @include('admin.header')
        <div class="main-panel">
            @include('admin.frommainpanel')
            @include('admin.footer')
        </div>
    </div>

@include('admin.scripts')
</div>
