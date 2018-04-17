@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align:center">
                <h3><b>Create Project</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-group" method="post" action="/projects">
                    <!-- CSRF: Cross-Site Request Forgery -->
                    {{ csrf_field() }}
                    <label for="name">Name:</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                    @if($errors->has('name'))    
                        <div class="alert alert-danger">
                            @foreach($errors->get('name') as $message)
                                {{ $message }}
                            @endforeach
                        </div>    
                    @endif

                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="8">{{ old('description') }}</textarea>
                    @if($errors->has('description'))    
                        <div class="alert alert-danger">
                            @foreach($errors->get('description') as $message)
                                {{ $message }}
                            @endforeach
                        </div>    
                    @endif

                    <label for="view_status">View Status</label>
                    <select class="form-control" name="view_status" id="view_status">
                        @foreach($view_status as $key => $value)
                            @if(old('view_status') == $key)
                                <option value="{{ $key }}" selected>{{$value}}</option>
                            @else
                                <option value="{{ $key }}">{{$value}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        @foreach($status as $key => $value)
                            @if(old('status') == $key)
                                <option value="{{ $key }}" selected>{{$value}}</option>
                            @else
                                <option value="{{ $key }}">{{$value}}</option>
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