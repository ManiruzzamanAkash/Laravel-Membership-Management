@extends('frontend.layouts.master')

@section('page_styles')
    <style>
        #wrapper {
            background: red
        }
    </style>
@endsection

@section('main-content')
    <p> Dynamic Content From Test File</p>
@endsection

@section('end-content')
    <p> End Content </p>
@endsection

@section('page_scripts')
    {{-- <script>
        alert('Hello');
    </script> --}}
@endsection