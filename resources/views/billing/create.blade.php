@extends('layout.app')
@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold"> CREATE GST BILL </h4>
            </div>

            @include('include.alert')
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title text-uppercase">Invoice Basic Info</h4>
                    <hr>
                    <form action="{{ route('create-gst-bill') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label>Type</label>
                                    <select name="party_id" class="form-control border-bottom" id="validationCustom01">
                                        @foreach($parties as $party)
                                        <option value="{{ $party->id }}">{{ $party->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label>Invoice Date</label>
                                    <input name="invoice_date" type="date" class="form-control border-bottom"
                                        id="validationCustom02" placeholder="Enter Invoice Date">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label>Invoice Number</label>
                                    <input name="invoice_no" type="text" class="form-control border-bottom"
                                        id="validationCustom03" placeholder="Enter Invoice Number">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h4 class="header-title text-uppercase">Item Details</h4>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 border p-1 text-center">
                                <b>DESCRIPTIONS</b>
                            </div>
                            <div class="col-md-4 border p-1 text-center">
                                <b>TOTAL AMOUNT</b>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8 border p-2">
                                <input name="item_description" class="form-control" />
                            </div>
                            <div class="col-md-4 border p-2">
                                <input name="total_amount" class="form-control" type="text" id="totalAmountInput"
                                    oninput="calculateNetAmount()">
                            </div>
                        </div>

                        <div class="row mt-0">
                            <div class="col-md-3">
                                <label>CGST (%)</label>
                                <input name="cgst_rate" type="text" class="form-control border-bottom"
                                    placeholder="CGST Rate" id="cgst" oninput="calculateNetAmount()">
                                <span class="float-right gststyle" id="cgstDisplay">0</span>
                                <input type="hidden" id="cgstAmount" name="cgst_amount" value="0">
                            </div>

                            <div class="col-md-3">
                                <label>SGST (%)</label>
                                <input name="sgst_rate" type="text" class="form-control border-bottom"
                                    placeholder="SGST Rate" id="sgst" oninput="calculateNetAmount()">
                                <span class="float-right gststyle" id="sgstDisplay">0</span>
                                <input type="hidden" id="sgstAmount" name="sgst_amount" value="0">
                            </div>

                            <div class="col-md-3">
                                <label>IGST (%)</label>
                                <input name="igst_rate" type="text" class="form-control border-bottom"
                                    placeholder="IGST Rate" id="igst" oninput="calculateNetAmount()">
                                <span class="float-right gststyle" id="igstDisplay">0</span>
                                <input type="hidden" id="igstAmount" name="igst_amount" value="0">
                            </div>

                            <div class="col-md-3">
                                <ul style="list-style: none;float: right;">
                                    <li>
                                        <b>Total Amount:</b> ₹ <span type="text" id="totalAmountDisplay">0</span>
                                    </li>
                                    <li>
                                        <b>Tax:</b> ₹ <span type="text" id="taxDisplay">0</span>
                                        <input type="hidden" value="0" name="tax_amount" id="taxAmount">
                                    </li>
                                    <li>
                                        <b>Net Amount:</b> ₹ <span type="text" id="netAmountDisplay">0</span>
                                        <input type="hidden" value="0" name="net_amount" id="netAmount">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="declaration" type="text" class="form-control border-bottom"
                                        id="validationCustom05" placeholder="Declaration">
                                </div>

                                <a href="printGST_bill.html">
                                    <button type="submit" class="btn btn-primary float-right mb-2">SUBMIT</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
