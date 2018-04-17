@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align:center">
                <h3><b>Edit Project</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-group" method="post" action="/projects/{{ $project->id }}">
                    <!-- CSRF: Cross-Site Request Forgery -->
                    @method("PUT")
                    @csrf
                    {{-- csrf_field() --}}
                    <label for="name">Name:</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') ?? $project->name }}">

                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="8">{{ old('description') ?? $project->description }}</textarea>
                    
                    <label for="view_status">View Status</label>
                    <select class="form-control" name="view_status" id="view_status">
                        @foreach($view_status as $key => $value)
                            @if((old('view_status') ?? $project->view_status) == $key)
                                <option value="{{ $key }}" selected>{{$value}}</option>
                            @else
                                <option value="{{ $key }}">{{$value}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        @foreach($status as $key => $value)
                            @if((old('status')??$project->status) == $key)
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