@extends('adminlte::page')

@section('title')
    {{ config('adminlte.title') }}
    @hasSection('subtitle')
        - @yield('subtitle')
    @endif
@stop
{{-- Extend and customize the page content header --}}

@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted">
            @yield('content_header_title')

            @hasSection('content_header_subtitle')
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    @yield('content_header_subtitle')
                </small>
            @endif
        </h1>
    @endif
@stop

{{-- Rename section content to content_body --}}

@section('content')

    @yield('content_body')

@stop

{{-- Create a common footer --}}
@section('css')
    {{-- <link rel="shortcut icon" href="{{ asset('vendor/adminlte/dist/img/Fixed-assets-logo.png') }}"> --}}
@stop


@section('footer')
    <div class="float-right">
        Gymnastheniqx: {{ config('app.version', '1') }}
    </div>

    <strong>
        {{-- <a href="{{ config('app.company_url', '#') }}" class="d-flex align-items-center ">
            <img src="{{ asset('ics.png') }}" alt="ics logo" width="25" class="mr-2">
            {{ config('app.company_name', 'My company') }}
        </a> --}}
    </strong>
@stop
