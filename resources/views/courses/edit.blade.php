@extends('layouts.app', ['title' => 'Edit course'])
@section('content')<h1>Edit course</h1><div class="card"><form method="POST" action="{{ route('courses.update', $course) }}">@method('PUT') @include('courses._form', ['submitLabel' => 'Save changes'])</form></div>@endsection
