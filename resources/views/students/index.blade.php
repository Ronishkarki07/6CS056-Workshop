@extends('layouts.app', ['title' => 'Students'])

@section('content')
<div class="actions">
    <h1>Students</h1>
    <a class="button" href="{{ route('students.create') }}">Add student</a>
</div>
<div class="card">
    <form class="filters" method="GET">
        <input name="search" value="{{ request('search') }}" placeholder="Search name, email, or phone">
        <button type="submit">Search</button>
        <a class="button secondary" href="{{ route('students.index') }}">Clear</a>
    </form>
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
    <div class="pagination">{{ $students->links() }}</div>
</div>
@endsection
