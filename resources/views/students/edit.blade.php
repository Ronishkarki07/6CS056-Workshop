@extends('layouts.app', ['title' => 'Edit student'])
@section('content')
<h1>Edit student</h1>
<div class="card"><form method="POST" action="{{ route('students.update', $student) }}">@method('PUT') @include('students._form', ['submitLabel' => 'Save changes'])</form></div>
@endsection
