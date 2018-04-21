@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row" style="margin-top:16px">
            <div class="col-12">
                <h2><b>Project Detail</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">{{ $project->name }}</h5>
                    <div class="card-body">
                        <h5><b>{{$project->status}}</b></h5>
                        <p class="card-text">
                            <b>View status : </b>{{ $project->view_status }} <br>
                            <b>Created Date : </b> {{ $project->created_at }} <br>
                            <b>Lastest Update : </b> {{ $project->updated_at }} <br>
                        </p>

                        <p>
                            {{ $project->description}}
                        </p>

                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <a href="/projects/{{$project->id}}/edit" class="btn btn-success col-6">
                            <button class="btn col-6 " style="color:white;background: rgba(0,0,0,0)">
                                Edit
                            </button>
                        </a>
                        <form class="col-6 btn btn-danger" style="margin:0px" action="/projects/{{ $project->id }}" method="post">
                            @csrf
                            @method("DELETE")
                            
                            <button id="delete-btn" class="btn col-6 " style="color:white;background: rgba(0,0,0,0)" type="submit">Delete</button>
                        </form> 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection