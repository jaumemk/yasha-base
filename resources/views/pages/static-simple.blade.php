@extends('layouts.main')

@section('content')

    @isset($page_content)
    {!! $page_content !!}
    @endisset

@endsection
