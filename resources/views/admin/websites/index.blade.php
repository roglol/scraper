@extends('admin.main')
@section('body')
@include('admin.websites.components.websitesTable')
@include('admin.websites.components.addModal')
@include('admin.websites.components.deleteModal')
@stop
@section('footer')
@include('admin.websites.components.footer')
@stop



