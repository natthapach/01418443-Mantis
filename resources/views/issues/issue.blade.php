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
                                <a href="{{route('project', ['id'=>$issue->project_id])}}">
                                    {{ $issue->project->name }}
                                </a>
                            <br>
                            <b>Reporter : </b>
                                <a href="{{route('project', ['id'=>$issue->reporter])}}">
                                    {{ $issue->reporterUser->name }}
                                </a>
                            <br>
                            <b>Assign To : </b>
                                <a href="{{route('user', ['id'=>$issue->assign_to])}}">
                                    {{ $issue->assignTo->name }}
                                </a>
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
            </div>
        </div>
    </div>
@endsection