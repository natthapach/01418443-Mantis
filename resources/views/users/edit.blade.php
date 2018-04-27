@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align:center">
                <h3><b>Edit User</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-group" style="max-width:50%;margin: 0 auto" method="post" action="/users/{{$user->id}}">
                    <!-- CSRF: Cross-Site Request Forgery -->
                    @method("PUT")
                    {{ csrf_field() }}
                    

                    <label for="name">Name :</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') ?? $user->name }}">
                    @if($errors->has('name'))    
                        <div class="alert alert-danger">
                            @foreach($errors->get('name') as $message)
                                {{ $message }}
                            @endforeach
                        </div>    
                    @endif

                    <label for="email">E-mail :</label>
                    <input id="email" class="form-control" type="text" name="email" value="{{ old('email') ?? $user->email }}">
                    @if($errors->has('email'))    
                        <div class="alert alert-danger">
                            @foreach($errors->get('email') as $message)
                                {{ $message }}
                            @endforeach
                        </div>    
                    @endif
                    
                    <label for="access_level">Access Level</label>
                    <select class="form-control" name="access_level" id="access_level">
                        @foreach($accessLevels as $level)
                            @if((old('access_level') ?? $user->access_level) == $level)
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