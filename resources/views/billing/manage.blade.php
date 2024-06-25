@extends('layout.app')
@section('content')
            <div class="row">
                <div class="col">
                    <div class="page-title-box">
                        <h2 class="page-title font-weight-bold text-uppercase">Manage Bills</h2>
                    </div>
                    @include('include.alert')
                </div>

            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <a href="{{route('create-bill')}}" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                            <i class="mdi mdi-plus-circle"></i> Create New Bill
                        </a>
                        <h4 class="header-title mb-4 text-uppercase">Manage Bills</h4>
                        <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered"
                            id="tickets-table">
                            <thead>
                                <tr>
                                    <th>
                                        S.No.
                                    </th>
                                    <th>Bill No</th>
                                    <th>Cielnt's Info</th>
                                    <th>Billing Info</th>
                                    <th>Date</th>
                                    <th class="hidden-sm">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(count($bills))
                                @foreach($bills as $index=>$bill)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$bill->invoice_no}}</td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><b>Client Name : </b><span>{{$bill->party->name}}</span></li>
                                            <li><b>Phone : </b><span>{{$bill->party->phone}}</span></li>
                                        </ul>
                                    </td>

                                    <td>
                                        <ul class="list-unstyled">
                                            <li><b>Total Amount :</b><span> {{$bill->total_amount}}</span></li>
                                            <li><b>TAX :</b><span> {{$bill->tax_amount}}</span></li>
                                            <li><b>Net Amount :</b><span> {{$bill->net_amount}}</span></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><b>Total Amount :</b><span> 555</span></li>
                                            <li><b>TAX :</b><span> 55</span></li>
                                            <li><b>Net Amount :</b><span> 55</span></li>
                                        </ul>
                                    </td>

                                    <td>
                                        {{date('d-m-Y', strtotime($bill->invoice_date))}}
                                    </td>
                                    <td>
                                        <div class="btn-group dropdown">
                                            <a href="javascript: void(0);"
                                                class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm"
                                                data-toggle="dropdown" aria-expanded="false"><i
                                                    class="mdi mdi-dots-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{route('delete', ['gst_bills', $bill->id] )}}"><i
                                                        class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>
                                                <a class="dropdown-item" href="{{route('print-bill', $bill->id)}}"><i
                                                        class="mdi mdi-printer mr-2 text-muted font-18 vertical-middle"></i>
                                                    Print</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6">No record found</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div><!-- end col -->
                </div>
            </div>
            <!-- end row -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-body p-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-box m-0">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="m-1"><b>Date : </b>01/09/2023</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-1 float-right"><b>Bill No. : </b>#01</p>
                                            </div>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="row pt-1">
                                            <div class="col-6">
                                                <p class="m-1"><b>Customer Name : </b>John Doe</p>
                                            </div>
                                            <div class="col-6">
                                                <p class="m-1 float-right"><b>Phone No. : </b>9865320159</p>
                                            </div>
                                        </div>
                                        <!-- <div class="border-bottom"></div> -->

                                        <!-- Logo & title -->

                                        <div class="row">
                                            <div class="col-12 p-0">
                                                <div class="table-responsive table-bordered">
                                                    <table class="table mt-0 table-centered border">
                                                        <thead>
                                                            <tr>

                                                                <th class="py-0"
                                                                    style="background-color: rgb(130, 210, 241); color: black;">
                                                                    DESCRIPTION</th>
                                                                <th style="width: 15%; background-color: rgb(130, 210, 241); color: black;"
                                                                    class="text-center py-1">
                                                                    AMOUNT
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td>
                                                                    <b>Web Design</b> <br />
                                                                    2 Pages static website - my website
                                                                </td>
                                                                <td class="text-center">$660.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive -->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row border">
                                            <div class="col-sm-12 col-lg-12 mt-1">
                                                <ul class="list-unstyled float-right">
                                                    <li><b>Total Amount :</b> <span class="float-right"><i
                                                                class="fas fa-rupee-sign ml-2"></i> 0.00</span></li>

                                                    <li><b>TAX :</b><span class="float-right"><i
                                                                class="fas fa-rupee-sign"></i> 0.00</span>
                                                    </li>
                                                    <li><b>Net Amount :</b><span class="float-right"><i
                                                                class="fas fa-rupee-sign"></i> 0.00</span>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="printGST_bill.html" class="btn btn-primary waves-effect waves-light">Print
                                <i class="mdi mdi-printer mr-1"></i></a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection