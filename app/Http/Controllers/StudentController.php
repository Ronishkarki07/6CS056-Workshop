<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(Request $request): View
    {
        $students = Student::query()
            ->when($request->string('search')->trim()->value(), function ($query, string $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('students.index', compact('students'));
    }

    public function create(): View
    {
        return view('students.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $student = Student::create($this->validated($request));

        return to_route('students.show', $student)->with('success', 'Student created successfully.');
    }

    public function show(Student $student): View
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student): View
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student): RedirectResponse
    {
        $student->update($this->validated($request, $student));

        return to_route('students.show', $student)->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();

        return to_route('students.index')->with('success', 'Student deleted successfully.');
    }

    private function validated(Request $request, ?Student $student = null): array
    {
        $emailRule = 'required|email|max:255|unique:students,email';

        if ($student) {
            $emailRule .= ','.$student->id;
        }

        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => $emailRule,
            'phone' => ['required', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:500'],
            'date_of_birth' => ['nullable', 'date'],
        ]);
    }
}
