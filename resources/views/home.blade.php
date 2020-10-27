@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col">
                    <div class="card bg-primary border-primary text-light">
                        <div class="card-body">
                            <h5 class="card-title"> <b> <i class="fa fa-inbox" aria-hidden="true"></i> </b> Inbox</h5>
                            <p class="card-text">Content</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card bg-success border-success text-light">
                        <div class="card-body">
                            <h5 class="card-title"> <b> <i class="fa fa-user-plus" aria-hidden="true"></i> </b> Subscribers </h5>
                            <p class="card-text">Content</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card bg-danger border-danger text-light">
                        <div class="card-body">
                            <h5 class="card-title"><b> <i class="fa  fa-external-link"></i> </b> Forwards </h5>
                            <p class="card-text">Content</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Content</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection
