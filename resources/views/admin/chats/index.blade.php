@extends('admin.layouts.admin')

@section('main')
    <chat current-user="{{ request()->user()->id }}"/>
@endsection