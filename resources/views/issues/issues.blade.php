@extends("layouts.list")

@section("topic")
    ALL CATEGORIEs
@endsection

@section("header")
    <tr>
    <th scope="col">id</th>
    <th scope="col">summary</th>
    <th scope="col">project</th>
    <th scope="col">category</th>
    <th scope="col">reporter</th>
    <th scope="col">assign to</th>
    <th scope="col">status</th>
    <th scope="col">priority</th>
    <th scope="col">severity</th>
    <th scope="col">created date</th>
    </tr>
@endsection

@section("body")
    @foreach($issues as $issue)
    <tr>
        <th scope="row">{{$issue->id}}</th>
        <td>
            <a href="{{ route('issue', ['id'=>$issue->id]) }}">
                {{$issue->summary}}
            </a>
        </td>
        <td>{{$issue->project->name}}</td>
        <td>{{$issue->category->name}}</td>
        <td>{{$issue->reporterUser->name}}</td>
        <td>{{$issue->assignTo->name}}</td>
        <td>{{$issue->status}}</td>
        <td>{{$issue->priority}}</td>
        <td>{{$issue->severity}}</td>
        <td>{{$issue->created_at}}</td>
    </tr>
    @endforeach
@endsection
