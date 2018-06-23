@extends('layout')

@section('content')
    <main class="company-primary" role="main">
        <div class="home">
            @include('partials.content-search')

            <div class="breadcrumb-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcrumb list-inline list-unstyled">
                                <li><a href="/">Home</a></li>
                                <li>Profile edit</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="content__gutter-up-down">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>
                                    Account Information
                                    <br>
                                </h5>
                                <hr class="m-b-35">
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-4">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs m-b-25" role="tablist">
                                        <li role="presentation" class="active"><a href="#personal-info" aria-controls="home" role="tab" data-toggle="tab">My Personal Information</a></li>
                                        <li role="presentation"><a href="{{route('home')}}#prescriptions">Prescription/ Lab reports</a></li>
                                        <li role="presentation"><a href="{{route('home')}}#history">Order History</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="personal-info">
                                            <div class="personal-info">
                                                <span class="title title--sm">Please be sure to update your personal information if it has changed.</span>
                                                <hr>
                                                <form id="profileEdit" class="material" action="/profile/edit" method="post">
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif


                                                    <dl class="dl-horizontal">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="POST">
                                                        <dt>Full Name:</dt>
                                                        <dd><input type="text" name="name" value="{{ $user->name }}" required /> </dd>
                                                        <dt>Email ID:</dt>
                                                        <dd><input type="text" name="email" value="{{ $user->email }}" required email readonly /> </dd>
                                                        <dt>Phone:</dt>
                                                        <dd><input type="text" name="phone" value="{{ $user->phone }}" required readonly /> </dd>
                                                        <dt>Location:</dt>
                                                        <dd><input type="text" name="address" value="{{ $user->address }}" required /> </dd>
                                                    </dl>
                                                    <hr>
                                                    <button type="submit" class="btn btn-danger">Update Information</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <section id="push"></section>

    <!-- Default bootstrap modal example -->
    <div class="modal fade" id="salesDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Order Details</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="prescriptionDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Prescription</h4>
                </div>
                <div class="modal-body">
                    <img id="prescriptionImage" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
