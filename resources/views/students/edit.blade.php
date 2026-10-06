@extends('layouts.app', ['title' => 'Edit Student'])

@section('content')
    <h1>Edit Student</h1>

    @include('partials.errors')

    <div class="card">
        <form method="POST" action="{{ route('students.update', $student) }}">
            @method('PUT')
            @include('students._form', ['submitLabel' => 'Save changes'])
        </form>
    </div>
@endsection
