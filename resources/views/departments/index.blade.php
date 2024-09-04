<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Document</title>
  
</head>
<body>

  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Departments</h1>
    <a href="{{ route('departments.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Department</a>
    <ul class="mt-4">
        @foreach ($departments as $department)
            <li class="border-b py-2 flex justify-between items-center">
                <span>{{ $department->name }}</span>
                <div>
                    <a href="{{ route('departments.edit', $department) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('departments.destroy', $department) }}" method="POST" class="inline">
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