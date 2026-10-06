@extends('layouts.app', ['title' => 'Student Details'])

@section('content')
    <h1>Student Details</h1>
    <div class="card">
        <p><strong>ID:</strong> {{ $student->id }}</p>
        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>Phone:</strong> {{ $student->phone }}</p>
        <p><strong>Address:</strong> {{ $student->address ?: 'Not provided' }}</p>
        <p><strong>Date of Birth:</strong> {{ $student->date_of_birth?->format('d M Y') ?: 'Not provided' }}</p>
        <p><strong>Age:</strong> {{ $student->age ?? 'Not available' }}</p>
        <a class="button" href="{{ route('students.edit', $student) }}">Edit</a>
        <a class="button secondary" href="{{ route('students.index') }}">Back</a>
    </div>
@endsection
