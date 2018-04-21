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
                                @if(!is_null($category->project))
                                    <a href="/projects/{{$category->project_id}}">
                                        {{ $category->project->name }}
                                    </a>
                                @else
                                    not assign
                                @endif
                            <br>
                            <b>Assign To : </b>
                                @if(!is_null($category->user))
                                    <a href="/users/{{$category->assign_to}}">
                                        {{ $category->user->name }}
                                    </a>
                                @else
                                    not assign
                                @endif
                            <br>
                            <b>Created Date : </b> {{ $category->created_at }} <br>
                            <b>Lastest Update : </b> {{ $category->updated_at }} <br>
                        </p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <a href="/categories/{{$category->id}}/edit" class="btn btn-success col-6">
                            <button class="btn col-6 " style="color:white;background: rgba(0,0,0,0)">
                                Edit
                            </button>
                        </a>
                        <form class="col-6 btn btn-danger" style="margin:0px" action="/categories/{{ $category->id }}" method="post">
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