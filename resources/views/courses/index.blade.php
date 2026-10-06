@extends('layouts.app', ['title' => 'Courses'])
@section('content')
<div class="actions"><h1>Courses</h1><a class="button" href="{{ route('courses.create') }}">Add course</a></div>
<div class="card"><table><thead><tr><th>Name</th><th>Duration</th><th>Fee</th><th>Difficulty</th><th>Status</th><th>Actions</th></tr></thead><tbody>
@forelse ($courses as $course)<tr><td>{{ $course->name }}</td><td>{{ $course->duration }} weeks</td><td>{{ number_format((float) $course->fee, 2) }}</td><td>{{ $course->difficulty }}</td><td>{{ $course->is_active ? 'Active' : 'Inactive' }}</td><td class="actions"><a href="{{ route('courses.show', $course) }}">View</a><a href="{{ route('courses.edit', $course) }}">Edit</a><form method="POST" action="{{ route('courses.destroy', $course) }}">@csrf @method('DELETE')<button class="danger" onclick="return confirm('Delete this course?')">Delete</button></form></td></tr>
@empty<tr><td colspan="6">No courses found.</td></tr>@endforelse
</tbody></table></div>
@endsection
