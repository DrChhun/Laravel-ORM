<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="{{ asset('css/app.css') }}" ref="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <h1 class="">this is dashboard</h1>

    <button class="px-4 py-2 bg-green-500 text-white my-8">Create client</button>

    <table class="table-auto w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="!text-start">Company</th>
                <th class="!text-start">VAT</th>
                <th class="!text-start">Address</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                <td>Malcolm Lockyer</td>
                <td>1961</td>
                <td class="flex justify-around">
                    <button class="px-4 py-2 bg-red-500 text-white rounded-sm">delete</button>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-sm">update</button>
                </td>
            </tr>
            <tr>
                <td>Witchy Woman</td>
                <td>The Eagles</td>
                <td>1972</td>
            </tr>
            <tr>
                <td>Shining Star</td>
                <td>Earth, Wind, and Fire</td>
                <td>1975</td>
            </tr>   
        </tbody>
    </table>
    
</body>
</html>