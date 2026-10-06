@extends('layouts.app', ['title' => $student->name])
@section('content')
<h1>{{ $student->name }}</h1>
<div class="card">
    <p><strong>Email:</strong> {{ $student->email }}</p><p><strong>Phone:</strong> {{ $student->phone }}</p>
    <p><strong>Address:</strong> {{ $student->address ?: 'Not provided' }}</p><p><strong>Date of birth:</strong> {{ $student->date_of_birth ?: 'Not provided' }}</p>
    <a class="button" href="{{ route('students.edit', $student) }}">Edit</a> <a class="button secondary" href="{{ route('students.index') }}">Back</a>
</div>
@endsection
