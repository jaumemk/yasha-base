@extends('layouts.main')

@section('content')

    <div class="container py-5r">
    @isset($page_content)
    {!! $page_content !!}
    @endisset
    </div>

@endsection
