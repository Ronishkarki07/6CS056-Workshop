@extends('layouts.app', ['title' => 'Students'])

@section('content')
<div class="actions">
    <h1>Students</h1>
    <a class="button" href="{{ route('students.create') }}">Add student</a>
</div>
<div class="card">
    <table>
        <thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr></thead>
        <tbody>
        @forelse ($students as $student)
            <tr>
                <td>{{ $student->name }}</td><td>{{ $student->email }}</td><td>{{ $student->phone }}</td>
                <td class="actions">
                    <a href="{{ route('students.show', $student) }}">View</a>
                    <a href="{{ route('students.edit', $student) }}">Edit</a>
                    <form method="POST" action="{{ route('students.destroy', $student) }}">@csrf @method('DELETE')<button class="danger" type="submit" onclick="return confirm('Delete this student?')">Delete</button></form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No students found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
