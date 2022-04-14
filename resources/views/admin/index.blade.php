@extends('layouts.adminbase')

<div class="container-scroller">
@include('admin.sidebar')
    <div class="container-fluid page-body-wrapper">
        @include('admin.header')
        @include('admin.footer')
    </div>
@include('admin.scripts')
</div>
