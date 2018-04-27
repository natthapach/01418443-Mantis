@extends("layouts.list")

@section("topic")
    ALL ISSUEs
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
        <th scope="row">{{$issue->issue_number}}</th>
        <td>
            <a href="/issues/{{$issue->id}}">
                {{$issue->summary}}
            </a>
        </td>
        <td>
            @if(!is_null($issue->project))
                <a href="/projects/{{$issue->project_id}}">
                    {{ $issue->project->name }}
                </a>
            @else
                not assign
            @endif
        </td>
        <td>
            @if(!is_null($issue->category))
                <a href="/categories/{{$issue->category_id}}">
                    {{ $issue->category->name }}
                </a>
            @else
                not assign
            @endif
        </td>
        <td>
            @if(!is_null($issue->reporterUser))
                <a href="/users/{{$issue->reporter}}">
                    {{ $issue->reporterUser->name }}
                </a>
            @else
                not assign
            @endif
        </td>
        <td>
            @if(!is_null($issue->assignTo))
                <a href="/users/{{$issue->assign_to}}">
                    {{ $issue->assignTo->name }}
                </a>
            @else
                not assign
            @endif
        </td>
        <td>{{$issue->status}}</td>
        <td>{{$issue->priority}}</td>
        <td>{{$issue->severity}}</td>
        <td>{{$issue->created_at}}</td>
    </tr>
    @endforeach
@endsection
