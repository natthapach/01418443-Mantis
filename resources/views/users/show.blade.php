@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row" style="margin-top:16px">
            <div class="col-12">
                <h2><b>User Detail</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">{{ $user->name }}</h5>
                    <div class="card-body">
                        <h5><b>{{$user->access_level}}</b></h5>
                        <p class="card-text">
                            <b>Username : </b>{{ $user->username}} <br>
                            <b>Email : </b> {{ $user->email }} <br>
                            @if($user->is_enabled == 1)
                                <b style="color:lightgreen">Enable</b>
                            @else
                                <b style="color:red">Disable</b>
                            @endif
                        </p>
                        
                    </div>

                    
                </div>
                <div class="col-12">
                    <div class="row">
                        @can('update', $user)
                        <a href="/users/{{$user->id}}/edit" class="btn btn-success col-6">
                            <button class="btn col-6 " style="color:white;background: rgba(0,0,0,0)">
                                Edit
                            </button>
                        </a>
                        @endcan
                        @can('delete', $user)
                        <a class="btn btn-danger col-6" href="/users/{{ $user->id }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                            <button id="delete-btn" class="btn col-6 " style="color:white;background: rgba(0,0,0,0)" type="submit">Delete</button>
                        </a>
                        @endcan
                    </div>
                </div>
                
                
            </div>
            
            

            
        </div>
    </div>
@endsection


@push("js")
    <script src="{{ asset('js/confirm-delete.js') }}" defer></script>
@endpush