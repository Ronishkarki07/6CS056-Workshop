<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Training Institute' }}</title>
    <style>
        :root { color-scheme: light; font-family: system-ui, sans-serif; }
        body { background: #f4f7fb; color: #172033; margin: 0; }
        nav { background: #172033; padding: 1rem 5%; display: flex; gap: 1rem; }
        nav a { color: white; text-decoration: none; font-weight: 600; }
        main { max-width: 1100px; margin: 2rem auto; padding: 0 1rem; }
        .card { background: white; border-radius: .75rem; box-shadow: 0 2px 12px #17203312; padding: 1.25rem; margin-bottom: 1rem; }
        .actions, form.filters { display: flex; flex-wrap: wrap; gap: .75rem; align-items: center; }
        input, textarea, select { border: 1px solid #cbd5e1; border-radius: .4rem; padding: .65rem; width: 100%; box-sizing: border-box; }
        label { display: block; font-weight: 600; margin: .75rem 0 .3rem; }
        button, .button { background: #2563eb; border: 0; border-radius: .4rem; color: white; cursor: pointer; padding: .65rem 1rem; text-decoration: none; }
        .button.secondary { background: #64748b; } .button.danger, button.danger { background: #dc2626; }
        table { border-collapse: collapse; width: 100%; } th, td { border-bottom: 1px solid #e2e8f0; padding: .8rem .5rem; text-align: left; }
        .success { background: #dcfce7; color: #166534; padding: .75rem; border-radius: .4rem; } .errors { color: #b91c1c; }
        .pagination { margin-top: 1rem; } .pagination a, .pagination span { margin-right: .5rem; }
        @media (max-width: 650px) { table { display: block; overflow-x: auto; } }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('students.index') }}">Students</a>
        <a href="{{ route('courses.index') }}">Courses</a>
    </nav>
    <main>
        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="card errors">
                <strong>Please fix the following errors:</strong>
                <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>
