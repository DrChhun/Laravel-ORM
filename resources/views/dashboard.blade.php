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
            @foreach ($data as $data)
            <tr>
                <td>{{$data->company}}</td>
                <td>{{$data->vat}}</td>
                <td>{{$data->address}}</td>
                <td class="flex justify-around">
                    <button class="px-4 py-2 bg-red-500 text-white rounded-sm">
                        <a href="/dashboards/clients/{{$data->id}}">delete</a></button>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-sm">update</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Transh</h1>
    <div class="flex flex-col text-start">
        @foreach($trash as $trash)
            <a href="/restore/{{$trash->id}}">{{$trash->company}}</a>
        @endforeach
    </div>
    
</body>
</html>