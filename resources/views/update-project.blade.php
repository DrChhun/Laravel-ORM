@extends('main')

@section('content')
<form class="flex flex-col w-1/2 mx-auto" name="add-blog-post-form" id="add-blog-post-form" method="post" action="/projects/{{$id}}">
    {{ method_field('PUT') }}
        @csrf
        @foreach($data as $data)
        <label for="">Title</label>
        <input class="border-2 border-gray-200" value="{{$data->title}}" name="title" type="text" placeholder="title">

        <label for="">Descripition</label>
        <textarea placeholder="text here" class="border-2 border-gray-200" name="description" id="" cols="30" rows="10">
            {{$data->description}}
        </textarea>

        <label for="">Deadline</label>
        <input value="{{$data->deadline}}" class="border-2 border-gray-200" name="deadline" type="date" placeholder="deadline">

        <label for="">Assigned client</label>
        <select class="border-2 border-gray-200" name="assigned_client" id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>

        <label for="">Status</label>
        <select class="border-2 border-gray-200" name="status" id="cars">
            <option value="volvo">Open</option>
            <option value="saab">Close</option>
        </select>

        <button class="text-start bg-blue-500 px-8 py-2 w-fit text-white rounded-md" type="submit">Submit</button>
        @endforeach
</form>
@endsection