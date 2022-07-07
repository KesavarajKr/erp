@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Expense Details</b></h4>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="/create-expense" class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;">Add New Expense</a>
                    <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-2">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Expense Account</th>
                            <th>Vendor name</th>
                            <th>Paid Through</th>
                            <th>Invoice No#</th>
                            <th>Amount</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01-01-2022</td>
                            <td>Account</td>
                            <td>Test Name</td>
                            <td>Paid through</td>
                            <td>INV-0001</td>
                            <td>949.00</td>
                            <td>
                                <button class="btn btn-info">View</button>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                        </tr>

                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>



@endsection
