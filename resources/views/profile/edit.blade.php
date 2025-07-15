@extends('layouts.adminlte')

@section('subtitle', 'Profile')
@section('content_header_title', 'Profile')
{{-- @section('content_header_subtitle', 'Dashboard') --}}
@section('content_body')


    <div class="max-w-xl">
        @include('profile.partials.update-profile-information-form')
    </div>


    <div class="max-w-xl">
        @include('profile.partials.update-password-form')
    </div>



    <div class="max-w-xl">
        @include('profile.partials.delete-user-form')
    </div>
@stop
