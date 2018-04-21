@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align:center">
                <h3><b>Edit Category</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6" style="margin:0 auto;">
                <form class="form-group" method="post" action="/categories/{{$category->id}}">
                    <!-- CSRF: Cross-Site Request Forgery -->
                    @method("PUT")
                    {{ csrf_field() }}
                    

                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') ?? $category->name }}">
                    @if($errors->has('name'))    
                        <div class="alert alert-danger">
                            @foreach($errors->get('name') as $message)
                                {{ $message }}
                            @endforeach
                        </div>    
                    @endif

                    <label for="project">Project</label>
                    <select class="form-control" name="project" id="project">
                        @foreach($projects as $project)
                            @if((old('project') ?? $category->project_id) == $project->id)
                                <option value="{{ $project->id }}" selected>{{$project->id . " : " . $project->name}}</option>
                            @else
                                <option value="{{ $project->id }}">{{$project->id . " : " . $project->name}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="assign_to">Assign to</label>
                    <select class="form-control" name="assign_to" id="assign_to">
                        @foreach($users as $user)
                            @if((old('assign_to') ?? $category->assign_to) == $user->id)
                                <option value="{{ $user->id }}" selected>{{$user->id . " : " . $user->name}}</option>
                            @else
                                <option value="{{ $user->id }}">{{$user->id . " : " . $user->name}}</option>
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