@extends('layouts.app', ['title' => 'Create course'])
@section('content')<h1>Create course</h1><div class="card"><form method="POST" action="{{ route('courses.store') }}">@include('courses._form', ['submitLabel' => 'Create course'])</form></div>@endsection
