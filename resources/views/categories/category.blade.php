@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row" style="margin-top:16px">
            <div class="col-12">
                <h2><b>Category Detail</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">{{ $category->name }}</h5>
                    <div class="card-body">
                        <p class="card-text">
                            <b>Project : </b>
                                <a href="{{route('project', ['id'=>$category->project_id])}}">
                                    {{ $category->project->name }}
                                </a>
                            <br>
                            <b>Assign To : </b>
                                <a href="{{route('user', ['id'=>$category->assign_to])}}">
                                    {{ $category->user->name }}
                                </a>
                            <br>
                            <b>Created Date : </b> {{ $category->created_at }} <br>
                            <b>Lastest Update : </b> {{ $category->updated_at }} <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection