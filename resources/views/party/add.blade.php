@extends('layout.app')
@section('content')
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title font-weight-bold text-uppercase"> Add Clients </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Start Form  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title text-uppercase"> Basic Info</h4>
                                    <hr>
                                    
                                    {{--Include Alert--}}
                                    @include('include.alert')

                                    <form class="needs-validation" method="POST" action="{{route('create-party')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom01">Type</label>
                                                    <select name="party_type" class="form-control border-bottom "
                                                        id="validationCustom01" placeholder="Please select Type"
                                                        >
                                                        <option value="Client">Client</option>
                                                        <option value="Vendor">Vendor</option>
                                                        <option value="Employee">Employee</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom01">Full Name</label>
                                                    <input name="name" type="text" class="form-control border-bottom "
                                                        id="validationCustom01" placeholder="Enter client's full name"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a Full name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom02">Phone/Mobile Number</label>
                                                    <input name="phone" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter phone/mobile number"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a Number.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom03">Address</label>
                                                    <input name="address" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter Address" >
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Address.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h4 class="header-title text-uppercase">Bank Details</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom04">Account Holder Name</label>
                                                    <input name="account_holder" type="text" class="form-control border-bottom "
                                                        id="validationCustom04" placeholder="Enter Accoumt Holder name"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom05">Account Number</label>
                                                    <input name="account_number" type="text" class="form-control border-bottom "
                                                        id="validationCustom05" placeholder="Enter Account Number"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Code.
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom02">Bank Name</label>
                                                    <input name="bank" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter Bank Name"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a GSTIN No.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom02">IFSC Code</label>
                                                    <input name="bank_ifse" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter IFSC Code"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a IFSC.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom02">ZIP Code</label>
                                                    <input name="bank_zip" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter ZIP Code"
                                                        >
                                                    <div class="invalid-feedback">
                                                        Please provide a Zip.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="validationCustom02">State</label>
                                                    <input name="bank_state" type="text" class="form-control border-bottom "
                                                        id="validationCustom02" placeholder="Enter State" >
                                                    <div class="invalid-feedback">
                                                        Please provide a State.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="validationCustom02">Branch</label>
                                                <input name="bank_branch" type="text" class="form-control border-bottom "
                                                    id="validationCustom02" placeholder="Enter Branch" >
                                                <div class="invalid-feedback">
                                                    Please provide a Branch Name.
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-secondary" type="reset">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection