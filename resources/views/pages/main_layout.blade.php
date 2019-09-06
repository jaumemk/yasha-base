@extends('layouts.main')

@section('content')

    <div class="container py-5">
    @isset($page->content)
    {!! replace_setting_values($page->content) !!}
    @endisset
    </div>

@endsection
