@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align:center">
                <h3><b>Edit Issue</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6" style="margin:0 auto;">
                <form class="form-group" method="post" action="/issues/{{$issue->id}}">
                    <!-- CSRF: Cross-Site Request Forgery -->
                    @method("PUT");
                    {{ csrf_field() }}

                    <label for="summary">Summary</label>
                    <input id="summary" class="form-control" type="text" name="summary" value="{{ old('name') ?? $issue->summary }}">
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
                            @if((old('project') ?? $issue->project_id) == $project->id)
                                <option value="{{ $project->id }}" selected>{{$project->id . " : " . $project->name}}</option>
                            @else
                                <option value="{{ $project->id }}">{{$project->id . " : " . $project->name}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="category">Project</label>
                    <select class="form-control" name="category" id="category">
                        @foreach($categories as $category)
                            @if((old('category') ?? $issue->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{$category->id . " : " . $category->name}}</option>
                            @else
                                <option value="{{ $category->id }}">{{$category->id . " : " . $category->name}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="reporter">Reporter</label>
                    <select class="form-control" name="reporter" id="reporter">
                        @foreach($users as $user)
                            @if((old('reporter') ?? $issue->reporter) == $user->id)
                                <option value="{{ $user->id }}" selected>{{$user->id . " : " . $user->name}}</option>
                            @else
                                <option value="{{ $user->id }}">{{$user->id . " : " . $user->name}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="assigned_to">Assign to</label>
                    <select class="form-control" name="assigned_to" id="assigned_to">
                        @foreach($users as $user)
                            @if((old('assigned_to') ?? $issue->assigned_to) == $user->id)
                                <option value="{{ $user->id }}" selected>{{$user->id . " : " . $user->name}}</option>
                            @else
                                <option value="{{ $user->id }}">{{$user->id . " : " . $user->name}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        @foreach($statuses as $status)
                            @if((old('status') ?? $issue->status) == $status)
                                <option value="{{ $status }}" selected>{{$status}}</option>
                            @else
                                <option value="{{ $status }}">{{$status}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="priority">Priority</label>
                    <select class="form-control" name="priority" id="priority">
                        @foreach($priorities as $priority)
                            @if((old('priority') ?? $issue->priority) == $priority)
                                <option value="{{ $priority }}" selected>{{$priority}}</option>
                            @else
                                <option value="{{ $priority }}">{{$priority}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="severity">Severity</label>
                    <select class="form-control" name="severity" id="severity">
                        @foreach($severities as $severity)
                            @if((old('severity') ?? $issue->severity) == $severity)
                                <option value="{{ $severity }}" selected>{{$severity}}</option>
                            @else
                                <option value="{{ $severity }}">{{$severity}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="reproducibility">Reproducibility</label>
                    <select class="form-control" name="reproducibility" id="reproducibility">
                        @foreach($reproducibilities as $reproducibility)
                            @if((old('reproducibility') ?? $issue->reproducibility) == $reproducibility)
                                <option value="{{ $reproducibility }}" selected>{{$reproducibility}}</option>
                            @else
                                <option value="{{ $reproducibility }}">{{$reproducibility}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description">{{ old('description') ?? $issue->description }}</textarea>

                    <label for="steps">Steps</label>
                    <textarea class="form-control" name="steps" id="steps">{{ old('steps') ?? $issue->steps }}</textarea>
                    <!-- <select name="status" id=""></select> -->
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection