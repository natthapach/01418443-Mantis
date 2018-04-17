@extends("layouts.list")

@section("topic")
    ALL USERs
@endsection

@section("header")
    <tr>
    <th scope="col">id</th>
    <th scope="col">username</th>
    <th scope="col">name</th>
    <th scope="col">email</th>
    <th scope="col">access level</th>
    </tr>
@endsection

@section("body")
    @foreach($users as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <td>
            <a href="{{ route('user', ['id'=>$user->id]) }}">
                {{$user->username}}
            </a>
        </td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->access_level}}</td>
    </tr>
    @endforeach
@endsection