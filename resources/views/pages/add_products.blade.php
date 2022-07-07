@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Product Details</b></h4>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Product</button>
                <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-3">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Product</th>
                            <th>Rate</th>
                            <th>HSN Code</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Product Name</td>
                            <td>15000.00</td>
                            <td>6541</td>
                            <td><button class="btn btn-info btn-sm">Edit</button></td>
                            <td><button class="btn btn-danger btn-sm">Delete</button></td>

                        </tr>

                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-row mb-4">
                    <div class="form-group col-lg-6">
                        <label style="margin-bottom:10px;margin-top:15px;">Services/Product ID<span style="color:red;">*</span></label>
                        <input type="text" name="pid" class="form-control" required value="">
                    </div>
                    <div class="col-lg-6">
                        <label style="margin-bottom:10px;margin-top:15px;">Services / Product Name<sapn style="color:red">*</sapn></label>
                        <input type="text" name="pname" class="form-control" required>
                    </div>
                    <div class="col-lg-6">
                        <label style="margin-bottom:10px;margin-top:15px">HSN Code</label><span style="color:red;">*</span>
                        <input type="text" name="phsn" class="form-control" maxlength="6" required>
                    </div>
                    <div class="col-lg-6">
                        <label style="margin-bottom:10px;margin-top:15px">Services/Product Description</label>
                        <input type="text" class="form-control" name="pqty">
                    </div>
                    <div class="col-lg-6">
                        <label style="margin-bottom:10px;margin-top:15px;">Stock</label>
                        <input type="text" name="estock" class="form-control" value="0" required>
                    </div>
                    <div class="col-lg-6">
                        <label style="margin-bottom:10px;margin-top:15px">Stock Alert</label>
                        <input type="text" class="form-control restock" name="restock" autocomplete="off" value="0">
                    </div>
                    <div class="col-lg-6">
                            <label style="margin-bottom:10px;margin-top:15px;">Tax Preference</label>
                    </div>
                    <div class="col-lg-3" >
                        <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
        <input type="radio" id="taxable1" name="tax_Preference" value="Taxable" checked>
        <label for="radio3"> Taxable </label>
    </div>
                    </div>
                    <div class="col-lg-3" >
                        <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
        <input type="radio" id="taxable2" name="tax_Preference" value="Non Taxable">
        <label for="radio4"> Non Taxable </label>
    </div>
                    </div>

                         <div class="col-lg-6">
                            <div class="checkbox checkbox-success" style="margin-bottom:10px;margin-top:15px">
            <input id="checkbox3" type="checkbox">
            <label for="checkbox3">Sale Information </label>
        </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkbox checkbox-success" style="margin-bottom:10px;margin-top:15px">
            <input id="checkbox4" type="checkbox">
            <label for="checkbox4">Purchase Information </label>
        </div>
                        </div>
                        <div class="col-lg-6">
                            <label style="margin-bottom:10px;margin-top:15px">Sale Price</label>
                            <input type="text" class="form-control"  name="pprice">
                        </div>
                        <div class="col-lg-6">
                            <label style="margin-bottom:10px;margin-top:15px">Cost Price</label>
                            <input type="text" class="form-control" name="ppprice">
                        </div>
                        <div class="col-lg-6">
                            <label style="margin-bottom:10px;margin-top:15px">Sale GST</label>
                            <input type="text" class="form-control" name="salegst">
                        </div>
                        <div class="col-lg-6">
                            <label style="margin-bottom:10px;margin-top:15px">Purchase GST</label>
                            <input type="text" class="form-control" name="purchasegst">
                        </div>
                        <div class="col-lg-6">
                            <label style="margin-bottom:10px;margin-top:15px">Account(Income)</label>
                            <select class="form-control select2"  name="acc1" id='Account'>
                                <option>-- Choose Account --</option>

<option value="">Add Income Type&hellip;</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label style="margin-bottom:10px;margin-top:15px">Account(Expense)</label>
                            <select class="form-control select2" name="acc2" id='Account1'>
                                <option>-- Choose Account --</option>

<option value="">Add Expense Type&hellip;</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label style="margin-bottom:10px;margin-top:15px">Description</label>
                            <textarea class="form-control" name="dis1"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <label style="margin-bottom:10px;margin-top:15px">Description</label>
                            <textarea class="form-control" name="dis2"></textarea>

                        </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection
