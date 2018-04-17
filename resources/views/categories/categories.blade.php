@extends("layouts.list")

@section("topic")
    ALL CATEGORIEs
@endsection

@section("header")
    <tr>
    <th scope="col">id</th>
    <th scope="col">category name</th>
    <th scope="col">project</th>
    <th scope="col">assign to</th>
    <th scope="col">create date</th>
    </tr>
@endsection

@section("body")
    @foreach($categories as $category)
    <tr>
        <th scope="row">{{$category->id}}</th>
        <td>
            <a href="{{ route('category', ['id'=>$category->id]) }}">
                {{$category->name}}
            </a>
        </td>
        <td>{{$category->project->name}}</td>
        <td>{{$category->user->name}}</td>
        <td>{{$category->created_at}}</td>
    </tr>
    @endforeach
@endsection
