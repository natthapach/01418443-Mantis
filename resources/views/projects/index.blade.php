@extends("layouts.list")

@section("topic")
    ALL PROJECTs
@endsection

@section("header")
    <tr>
    <th scope="col">id</th>
    <th scope="col">project name</th>
    <th scope="col">status</th>
    <th scope="col">view status</th>
    <th scope="col">create date</th>
    </tr>
@endsection

@section("body")
    @foreach($projects as $project)
    <tr>
        <th scope="row">{{$project->id}}</th>
        <td>
            <a href="{{ route('project', ['id'=>$project->id]) }}">
                {{$project->name}}
            </a>
        </td>
        <td>{{$project->status}}</td>
        <td>{{$project->view_status}}</td>
        <td>{{$project->created_at}}</td>
    </tr>
    @endforeach
@endsection
