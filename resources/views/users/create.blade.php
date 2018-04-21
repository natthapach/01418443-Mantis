@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align:center">
                <h3><b>Create User</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6" style="margin:0 auto;">
                <form class="form-group" method="post" action="/users">
                    <!-- CSRF: Cross-Site Request Forgery -->
                    {{ csrf_field() }}
                    <label for="username">Username :</label>
                    <input id="username" class="form-control" type="text" name="username" value="{{ old('username') }}">

                    <label for="name">Name :</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                    @if($errors->has('name'))    
                        <div class="alert alert-danger">
                            @foreach($errors->get('name') as $message)
                                {{ $message }}
                            @endforeach
                        </div>    
                    @endif

                    <label for="email">E-mail :</label>
                    <input id="email" class="form-control" type="text" name="email" value="{{ old('email') }}">

                    <label for="password">Password:</label>
                    <input id="password" class="form-control" type="password" name="password" value="{{ old('password') }}">

                    <label for="access_level">Access Level</label>
                    <select class="form-control" name="access_level" id="access_level">
                        @foreach($accessLevels as $level)
                            @if(old('access_level') == $level)
                                <option value="{{ $level }}" selected>{{$level}}</option>
                            @else
                                <option value="{{ $level }}">{{$level}}</option>
                            @endif
                        @endforeach
                    </select>
                    <!-- <select name="status" id=""></select> -->
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection