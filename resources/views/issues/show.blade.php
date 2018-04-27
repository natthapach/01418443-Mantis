@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row" style="margin-top:16px">
            <div class="col-12">
                <h2><b>Issue Detail</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">{{ $issue->summary }}</h5>
                    <div class="card-body">
                        <p class="card-text">
                            <b>Project : </b>
                                @if(!is_null($issue->project))
                                    <a href="/projects/{{$issue->project_id}}">
                                        {{ $issue->project->name }}
                                    </a>
                                @else
                                    not assign
                                @endif
                            <br>
                            <b>Categry : </b>
                                @if(!is_null($issue->category))
                                    <a href="/categories/{{$issue->category_id}}">
                                        {{ $issue->category->name }}
                                    </a>
                                @else
                                    not assign
                                @endif
                            <br>
                            <b>Reporter : </b>
                                @if(!is_null($issue->reporterUser))
                                    <a href="/users/{{$issue->reporter}}">
                                        {{ $issue->reporterUser->name }}
                                    </a>
                                @else
                                    not assign
                                @endif
                            <br>
                            <b>Assign To : </b>
                                @if(!is_null($issue->assignTo))
                                    <a href="/users/{{$issue->assign_to}}">
                                        {{ $issue->assignTo->name }}
                                    </a>
                                @else
                                    not assign
                                @endif
                            <br>
                            <b>Status : </b> {{ $issue->status }} <br>
                            <b>Priority : </b> {{ $issue->priority }} <br>
                            <b>Severity : </b> {{ $issue->severity }} <br>
                            <b>Reproducibility : </b> {{ $issue->reproducibility }} <br>
                            <b>Created Date : </b> {{ $issue->created_at }} <br>
                            <b>Lastest Update : </b> {{ $issue->updated_at }} <br>
                        </p>
                        <p>
                            <b>Description</b> <br>
                            {{ $issue->description }}
                        </p>
                        <p>
                            <b>Steps</b> <br>
                            {{ $issue->steps }}
                        </p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <a href="/issues/{{$issue->id}}/edit" class="btn btn-success col-6">
                            <button class="btn col-6 " style="color:white;background: rgba(0,0,0,0)">
                                Edit
                            </button>
                        </a>
                        <a class="btn btn-danger col-6" href="/issues/{{ $issue->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                            <button id="delete-btn" class="btn col-6 " style="color:white;background: rgba(0,0,0,0)" type="submit">Delete</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("js")
    <script src="{{ asset('js/confirm-delete.js') }}" defer></script>
@endpush