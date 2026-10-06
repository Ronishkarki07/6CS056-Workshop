@extends('layouts.app', ['title' => 'Create student'])
@section('content')
<h1>Create student</h1>
<div class="card"><form method="POST" action="{{ route('students.store') }}">@include('students._form', ['submitLabel' => 'Create student'])</form></div>
@endsection
