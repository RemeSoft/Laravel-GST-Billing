@extends('layout.app')
@section('content')
                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Invoice</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <!-- Logo & title -->
                                <div class="clearfix ">
                                    <div class="text-center">
                                        <h1>ABC Company</h1>
                                    </div>
                                    <div class="text-center">
                                        <span>Bikaner-334001 (Raj.) India</span><br>
                                        <span><b>Email:</b> abc@gmail.com | <b>Web:</b> www.abc.com | <b>Mob:</b>
                                            +919601230111</span>
                                    </div>
                                    <div class="row pt-3 pb-1">
                                        <div class="col-6 text-right">
                                            <span class="text-right"><b>PAN NO:</b> TEST02984</span>
                                        </div>
                                        <div class="col-6">
                                            <span>
                                                <b>GSTIN NO:</b> TEST92895C0DE3</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row">
                                    <div class="col-12 text-center border">
                                        <b>
                                            <h3 class="m-1">GST INVOICE </h3>
                                        </b>
                                    </div>
                                </div>
                                <div class="row text-center ">
                                    <div class="col-md-6 border p-0">
                                        <b>
                                            <div class="border-bottom">
                                                <h5>Details of the Client |
                                                    Billed to</h5>
                                            </div>
                                        </b>
                                        <div class="row pl-2 pt-1">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Name : {{$bill->party->name}}</label>
                                                <input type="text" style="border: none; line-height: -10;">
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Address : {{$bill->party->address}}</label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Phone : {{$bill->party->phone}}</label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2 pb-1">
                                            <div class="col-9 d-flex justiy-content-start">
                                                <label for="">State : {{$bill->party->bank_state}}</label>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 border p-0">
                                        <b>
                                            <div class="border-bottom">
                                                <h5>Invoice Details</h5>
                                            </div>
                                        </b>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Invoice No : {{$bill->invoice_no}}</label>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="row pl-2">
                                            <div class="col-12 d-flex justiy-content-start">
                                                <label for="">Invoice Date : {{$bill->invoice_date}}</label>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-12 p-0">
                                        <div class="table-responsive table-bordered">
                                            <table class="table mt-4 table-centered border">
                                                <thead>
                                                    <tr>
                                                        <th class="py-0"
                                                            style="width: 8%; background-color: rgb(130, 210, 241); color: black;">
                                                            SR NO.</th>
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
                                                        <td>1</td>
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
                                    <div class="col-sm-6 col-lg-9 p-0">
                                        <div class="clearfix pt-2 pb-2 mt-1 mb-1 ml-1 text-center"
                                            style="background-color: rgba(218, 218, 218, 0.37); border-radius: 5px;">
                                            <h5><b>Bank Details</b></h5>
                                            <p><b>{{$bill->party->bank}}, ACCOUNT NO:</b> {{$bill->party->account_number}} <b>IFSC:</b> {{$bill->party->bank_ifse}}</p>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-sm-6 col-lg-3 mt-1">
                                        <ul class="list-unstyled">
                                            <li><b>Total :</b> <span class="float-right"><i
                                                        class="fas fa-rupee-sign"></i> {{$bill->total_amount}}</span></li>
                                            <li><b>CGST :</b><span class="float-right"><i class="fas fa-rupee-sign"></i>
                                                   {{$bill->cgst_rate}}</span></li>
                                            <li><b>SGST :</b><span class="float-right"><i class="fas fa-rupee-sign"></i>
                                                    {{$bill->sgst_rate}}</span></li>
                                            <li><b>IGST :</b><span class="float-right"><i class="fas fa-rupee-sign"></i>
                                                    {{$bill->igst_rate}}</span></li>
                                        <div class="clearfix"></div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->
                                <div class="mt-4 mb-1">
                                    <div class="text-right d-print-none">
                                        <a href="javascript:window.print()"
                                            class="btn btn-primary waves-effect waves-light">Print <i
                                                class="mdi mdi-printer mr-1"></i></a>
                                        <a href="manageGST.html" class="btn btn-danger waves-effect waves-light">All
                                            Bills <i class="fas fa-rupee-sign"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->
@endSection