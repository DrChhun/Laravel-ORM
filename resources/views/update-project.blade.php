@extends('main')

@section('content')
    <form class="flex flex-col w-1/2 mx-auto" action="/projects/{{$id}}" method="post">
        {{ method_field('PUT') }}
        @csrf
        @foreach($data as $data)
            <label for="">Title</label>
            <input value="{{$data->title}}" class="border-2 border-gray-200" name="title" type="text" placeholder="title">

            <label for="">Descripition</label>
            <textarea placeholder="text here" class="border-2 border-gray-200" name="description" id="" cols="30" rows="10">
                {{$data->description}}
            </textarea>

            <label for="">Deadline</label>
            <input value="{{$data->deadline}}" class="border-2 border-gray-200" name="deadline" type="date" placeholder="deadline">

            <label for="">Assigned client</label>
            <select class="border-2 border-gray-200" name="assigned_client" id="cars">
                <option value="{{$data->assigned_client}}" selected hidden>{{$client[$data->assigned_client -1]->company}}</option>
                @foreach($client as $client)
                    <option value="{{$client->id}}">{{$client->company}}</option>
                @endforeach
            </select>

            <label for="">Status</label>
            <select class="border-2 border-gray-200" name="status" id="cars">
                <option value="{{$data->status}}" selected hidden>{{$data->status}}</option>
                <option value="Open">Open</option>
                <option value="Close">Close</option>
            </select>

            <button class="text-start bg-blue-500 px-8 py-2 w-fit text-white rounded-md" type="submit">Submit</button>
        @endforeach
    </form>
@endsection