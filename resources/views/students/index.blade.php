<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Students</h1>
    <a href="{{ route('students.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Student</a>
    <ul class="mt-4">
        @foreach ($students as $student)
            <li class="border-b py-2 flex justify-between items-center">
                <span>{{ $student->name }} ({{ $student->email }}) - Department: {{ $student->department_id }}</span>
                <div>
                    <a href="{{ route('students.edit', $student) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>


</body>
</html>