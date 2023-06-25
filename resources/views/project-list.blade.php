@extends('main')

@section('content')
<a href="/projects/create"><button class="px-4 py-2 bg-green-500 text-white my-8">Create Project</button></a>

<table class="table-auto w-full">
    <thead class="bg-gray-100">
        <tr>
            <th class="!text-start">Title</th>
            <th class="!text-start">Description</th>
            <th class="!text-start">Deadline</th>
            <th class="!text-start">Assigned Client</th>
            <th class="!text-start">Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
        <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->deadline}}</td>
            <td>{{$client[$data->assigned_client - 1]->company}}</td>
            <td>{{$data->status}}</td>
            <td class="flex justify-around">
                <button class="px-4 py-2 bg-red-500 text-white rounded-sm">
                    <a href="/projects/delete/{{$data->id}}">delete</a></button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-sm">
                    <a href="/projects/{{$data->id}}/edit">update</a>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection