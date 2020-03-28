@extends('admin.main')
@section('body')
@include('admin.categories.components.categoriesTable')
@include('admin.categories.components.addModal')
@include('admin.categories.components.deleteModal')
@stop
@section('footer')
@include('admin.categories.components.footer')
@stop


