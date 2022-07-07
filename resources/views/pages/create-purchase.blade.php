@extends('layout.app');
@section('title','ERP - Estimate');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-lg-12 layout-spacing">

                <div class="widget-content widget-content-area br-6">
            <div class="form-row mb-4">

                <div class="col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Date <span style="color:red">*</span></label>
                    <input type="date" name="purchase_date" id="purchase_date" required  class="form-control" autocomplete="off">
                </div>
                <div class="col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Vendor Name &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal1"></i></label>
                    <select class="form-control select2" type='text' id='vendor' name='vendor' onchange="kontakte(this)"placeholder="Enter vendor">
<option value="">---Choose Vendor---</option>


</select>
                </div>
                <div class="col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Invoice Bill No</label>
                 <input class="form-control" type='text' id='invoice' name='invoice'>
                </div>
                <div class="col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Invoice Date</label>
                    <input type="date" name="inv_date" id="inv_date" class="form-control" autocomplete="off">
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive" style="margin-top:30px">
                        <table class="table">
                            <thead>

                        <th scope="col" class="text-center"></th>
                    <th scope="col" class="text">S.No</th>
                    <th scope="col" class="text" style="width:250px">Services/Products Name &nbsp;&nbsp;&nbsp; <i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal5"></i></th>
                    <!--<th scope="col" class="text">Unit</th>        -->
                    <th scope="col" class="text">Services/Products Per Rate</th>
                     <th scope="col" class="text" >Quantity</th>
                     <th scope="col" class="text" >Tax Amount</th>
                    <th scope="col" class="text" >Cost Price</th>
                    <th scope="col" class="text">Sale Price</th>
                </thead>
                            <tbody>
                                <tr>
<td></td>
<td style="width: 10px;"> <span class="row_no">1.</span></td>

<td><select class="form-control select2 productq" type='text' id='product' name='product[]' onchange="kontakte(this)"placeholder="Enter Product" style="width: 250px;">
<option value="0">-Choose Product-</option>






</select></td>


<td><input class="form-control" type='text' id='prate' name='prate[]'  /></td>
<td><input class="form-control" type='number' id='qty' name='qty[]'  Value="1" onkeyup="textchanges(this)"/></td>
<td><input class="form-control" type='text' id='tax' name='tax[]' style="text-align: right;" Value="0.0" /></td>
<td><input class="form-control " type='text' id='cost' name='cost[]' style="text-align: right;" value='0.0'/></td>
<td><input class="form-control" type='text' id='sale' name='sale[]' style="text-align: right;" value='0.0'/> </td>

</tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-success btn-sm addmore" style="margin-left: 23px;">Add More</button>
                        <button type="button" class="btn btn-danger btn-sm delete">Delete</button>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-3">
                        <label style="margin-bottom:10px;margin-top:60px;margin-left:23px">Product Description</label>
                            <textarea type="text" name="perchasedes" class="form-control" autocomplete="off" placeholder="Purchase Description" style="width: 302px;margin-left:23px"></textarea>
                    </div>
                    <div class="col-lg-3">
                        <label style="margin-bottom:10px;margin-top:60px;margin-left:23px">Sale Description</label>
                             <textarea type="text" name="saledes" class="form-control" autocomplete="off" placeholder="Sale Description" style="width: 302px;margin-left:23px"></textarea>
                    </div>
                    <div class="col-lg-3">
                        <label style="margin-bottom:10px;margin-left:23px">Total Amount</label>

                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" type='text' id='sale' name='sale[]' style="text-align: right;" value='0.0'/>

                    </div>
                    <div class="col-lg-12" style="margin-top:30px;padding-bottom:30px;margin-left:23px">
                        <button type="submit" name="save-purchaseentery" class="btn btn-success" style="font-size: 18px">Save</button>
                    <a class="btn btn-primary" onclick="history.back()"><i class="fa fa-hand-o-left mr-2" aria-hidden="true" style="color:#ffff; font-size: 20px;"></i>&nbsp;&nbsp;Back</a>


                    </div>
                </div>
            </div>
                </div>
    </div>
    </div>
</div>
@endsection
