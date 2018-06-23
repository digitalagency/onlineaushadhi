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
                                <li>Account</li>
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
                                        <li role="presentation"><a href="#personal-info" aria-controls="home" role="tab" data-toggle="tab" class="profile">My Personal Information</a></li>
                                        <li role="presentation"><a href="#prescription" aria-controls="profile" role="tab" data-toggle="tab" class="prescriptions">Prescription/ Lab reports</a></li>
                                        <li role="presentation" class="active"><a href="#history" aria-controls="messages" role="tab" data-toggle="tab">Order History</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane" id="personal-info">
                                            <div class="personal-info">
                                                <span class="title title--sm">Please be sure to update your personal information if it has changed.</span>
                                                <hr>
                                                <dl class="dl-horizontal">
                                                    <dt>Full Name:</dt>
                                                    <dd>{{ $user->name }}</dd>
                                                    <dt>Email ID:</dt>
                                                    <dd>{{ $user->email }}</dd>
                                                    <dt>Phone:</dt>
                                                    <dd>{{ $user->phone }}</dd>
                                                    <dt>Location:</dt>
                                                    <dd>{{ $user->address }}</dd>
                                                </dl>
                                                <hr>
                                                <a href="/profile/edit" class="btn btn-danger">Update Information</a>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="prescription">
                                            <div class="prescription">
                                                <span class="title title--sm">Your Prescription</span>
                                                <hr>

                                                @if (session()->has('success_message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('success_message') }}
                                                    </div>
                                                @endif

                                                @if ($prescriptions->count() > 0)
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr class="info">
                                                                <th>Prescription ID</th>
                                                                <th>Prescription</th>
                                                                <th>Date</th>
                                                                <th>Order ID</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($prescriptions as $prescription)
                                                            <tr>
                                                                <td>{{ $prescription->image_name }}</td>
                                                                <td>
                                                                    <figure class="prescription-img">
                                                                        <a href="{{ asset('storage/app/'.$prescription->image_name) }}"  data-remote="false" data-toggle="modal" data-target="#prescriptionDetail"><img src="{{ asset('storage/app/'.$prescription->image_name) }}" alt=""></a>
                                                                    </figure>
                                                                </td>
                                                                <td>{{ $prescription->date }}</td>
                                                                <td>-</td>

                                                                <td>


                                                                    <form action="{{ url('/prescriptions/'.$prescription->id) }}" method="POST" style="float:left;" onsubmit="return confirmPrescriptionDelete();">
                                                                        {{ csrf_field() }}
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <button type="submit" onclick="" style="border: none;background: none;"><i class="oa-trash"></i></button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @else
                                                    <p>
                                                        No prescriptions added yet.
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane active" id="history">
                                            <div class="sales history">
                                                <span class="title title--sm">Order History</span>
                                                <hr>
                                                @if ($sales->count() > 0)
                                                    <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr class="info">
                                                            <th>S.N.</th>
                                                            <th>Order No.</th>
                                                            <th>Order Date</th>
                                                            <th>Delivery Date</th>
                                                            <th>Total (NRs)</th>
                                                            <th>Discount (NRs)</th>
                                                            <th>Net Price (NRs)</th>
                                                            <th>Details</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($sales as $sale)
                                                            <tr>
                                                                <td>{{ $loop->index + 1 }}</td>
                                                                <td><a href="/sales/{{ $sale->id }}" data-remote="false" data-toggle="modal" data-target="#salesDetail" class="saleDetail">{{ $sale->id }}</a></td>
                                                                <td>{{ $sale->date }}</td>
                                                                <td>{{ $sale->delivery_date }}</td>
                                                                <td>{{ $sale->total_amount }}</td>
                                                                <td>{{ $sale->discount_amount }}</td>
                                                                <td>{{ $sale->net_amount }}</td>
                                                                <td><a href="/sales/{{ $sale->id }}" data-remote="false" data-toggle="modal" data-target="#salesDetail" class="btn btn-info saleDetail"><i class="oa-search"></i></a> </td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                                @else
                                                    <p>No Orders placed yet.</p>
                                                @endif
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
<script>
    function confirmPrescriptionDelete() {
        var x = confirm('Are you sure to delete?');
        if (x) {
            return true;
        }

        return false;
    }
</script>
