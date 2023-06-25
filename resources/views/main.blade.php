<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex gap-4 mx-8 my-4">
        <a class="border-b-2 border-blue-500 hover:opacity-50 duration-300" href="/clients">Client</a>
        <a class="border-b-2 border-blue-500 hover:opacity-50 duration-300" href="/projects">Project</a>
    </div>
    <div>
        @yield('content')
    </div>
    
</body>
</html>