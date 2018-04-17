@extends("layouts.master")

@section("content")
    <div class="container">
        <div class="row" style="margin-top:16px">
            <div class="col-12" style="text-align:center">
                <h2><b>
                    @yield("topic")
                </b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <table class="table table-hover">
                <thead>
                    @yield("header")
                </thead>
                <tbody>
                    @yield("body")
                </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection