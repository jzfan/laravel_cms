@extends('layouts.admin')

@section('content')
    @include('admin.partial.datatable', ['head'=>'用户列表', 'path'=>'user'])

@endsection

@section('script')
    {!! $dataTable->scripts() !!}
    @include('admin.script.delete')
@endsection