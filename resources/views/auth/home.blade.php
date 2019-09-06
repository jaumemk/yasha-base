@extends('layouts.main')
{{-- This home is for logged in users, acts as a Dashboard--}}

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">@lang('Dashboard')</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @lang('You are logged in!')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
