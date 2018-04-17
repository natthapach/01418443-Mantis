@extends("layouts.master")

@section("content")

    {{ var_dump($request)}}
    <form action="/photoes" enctype="multipart/form-data" class="form-group" method="post">
        {{ csrf_field() }}
        <input id="photo" class="form-control" name="photo" type="file">
        <label for="photo"></label>
        <input type="text" name="name" >

        <button type="submit">Upload</button>
    </form>
@endsection