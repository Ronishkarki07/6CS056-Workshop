@csrf
<label for="name">Name</label>
<input id="name" name="name" value="{{ old('name', $student->name ?? '') }}" required>
<label for="email">Email</label>
<input id="email" type="email" name="email" value="{{ old('email', $student->email ?? '') }}" required>
<label for="phone">Phone</label>
<input id="phone" name="phone" value="{{ old('phone', $student->phone ?? '') }}" required>
<label for="address">Address</label>
<textarea id="address" name="address">{{ old('address', $student->address ?? '') }}</textarea>
<label for="date_of_birth">Date of birth</label>
<input id="date_of_birth" type="date" name="date_of_birth" value="{{ old('date_of_birth', isset($student) ? $student->date_of_birth?->format('Y-m-d') : '') }}">
<p>
    <button type="submit">{{ $submitLabel }}</button>
    <a class="button secondary" href="{{ route('students.index') }}">Cancel</a>
</p>
