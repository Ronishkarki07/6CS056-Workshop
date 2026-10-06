<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Institute</title>
    <style>
        body {
            align-items: center;
            background: #f4f7fb;
            color: #172033;
            display: flex;
            font-family: system-ui, sans-serif;
            justify-content: center;
            margin: 0;
            min-height: 100vh;
        }

        main {
            background: white;
            border-radius: .75rem;
            box-shadow: 0 2px 12px #17203312;
            max-width: 600px;
            padding: 2rem;
            text-align: center;
            width: calc(100% - 2rem);
        }

        a {
            background: #2563eb;
            border-radius: .4rem;
            color: white;
            display: inline-block;
            margin: .5rem;
            padding: .75rem 1rem;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main>
        <h1>Training Institute</h1>
        <p>Manage students and courses from one place.</p>
        <a href="{{ route('students.index') }}">Manage Students</a>
        <a href="{{ route('courses.index') }}">Manage Courses</a>
    </main>
</body>
</html>
