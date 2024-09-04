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
    <h1 class="text-2xl font-bold mb-4">Add Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700">Name:</label>
            <input type="text" name="name" class="w-full border-gray-300 rounded p-2" value=" {{ $student->name }} ">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email:</label>
            <input type="text" name="email" class="w-full border-gray-300 rounded p-2" value=" {{ $student->email }} ">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Department:</label>
            <select name="department_id" class="w-full border-gray-300 rounded p-2">
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>


</body>
</html>