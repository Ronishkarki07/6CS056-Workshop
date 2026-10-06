@csrf
<label for="name">Name</label><input id="name" name="name" value="{{ old('name', $course->name ?? '') }}" required>
<label for="description">Description</label><textarea id="description" name="description" required>{{ old('description', $course->description ?? '') }}</textarea>
<label for="duration">Duration (weeks)</label><input id="duration" type="number" min="1" name="duration" value="{{ old('duration', $course->duration ?? '') }}" required>
<label for="fee">Fee</label><input id="fee" type="number" min="0" step="0.01" name="fee" value="{{ old('fee', $course->fee ?? '') }}" required>
<label for="difficulty">Difficulty</label><select id="difficulty" name="difficulty" required>@foreach(['Easy','Medium','Hard'] as $level)<option value="{{ $level }}" @selected(old('difficulty', $course->difficulty ?? '') === $level)>{{ $level }}</option>@endforeach</select>
<label><input type="checkbox" name="is_active" value="1" @checked(old('is_active', $course->is_active ?? true))> Active course</label>
<p><button type="submit">{{ $submitLabel }}</button> <a class="button secondary" href="{{ route('courses.index') }}">Cancel</a></p>
