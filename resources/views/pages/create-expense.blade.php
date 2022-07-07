@extends('layout.app');
@section('title','ERP - Estimate');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-lg-12 layout-spacing">

                <div class="widget-content widget-content-area br-6">
            <div class="form-row mb-4">
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Date <span style="color:red">*</span></label>
					<input type="date" type="date" name="expense_date" required  id="expense_date" class="form-control" autocomplete="off">
                    <label style="margin-bottom:10px;margin-top:15px;">Expense  Account<span style="color:red">*</span></label>
									<select name='expense_account' id='expense_account' style="color:red" class='form-control select2'>
                    <option value="#">

  </option>



                      <!--  <option value=""><i class="fa-plus-circle"></i> Add New&hellip;</option> -->
                  </select>
                  <div class="col-lg-4" >
                    <label style="margin-bottom:10px;margin-top:15px;">Expense Type</label>

                                                                    </div>
                                                                    <div class="col-lg-3" >
                                                                        <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" value="1" >
                                                        <label for="radio3">Goods </label>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-4" >
                                                        <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" value="2" checked>
                                        <label for="radio4"> Services </label>
                                    </div>
                                                    </div>
                                                    <label style="margin-bottom:10px;margin-top:15px;">SAC/HSN Code <span style="color:red"></span></label>

									 <input type="text" name="hsn_code" class="form-control" autocomplete="off"  id="hsn_code" >


									<label style="margin-bottom:10px;margin-top:15px;">Amount <span style="color:red">*</span></label>

									 <input type="text" name="expenseamt" class="form-control" autocomplete="off"  id="expenseamt" required value="0">

									 	 <input type="hidden" name="expenseamt1" autocomplete="off"  id="expenseamt1" required value="0">
									<label style="margin-bottom:10px;margin-top:15px;">Paid Through </label>
									<input type="text" name="paid_type" id="paid_type" class="form-control">
                                    <label style="margin-bottom:10px;margin-top:15px;">Vendor<i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i></label>
									 <select name="vendor" class='form-control select2' id="vendor" >

                        <option value="#">--Choose Vendor--</option>


</select>
<label style="margin-bottom:10px;margin-top:15px;">GST Treatment</label>
<select name="gst_treatment" id="gst_treatment" class="form-control">
     <option value="Registered Business">Registered Business</option>
     <option value="unregistered Business">Unregistered Business</option>
</select>
<label style="margin-bottom:10px;margin-top:15px;">Vendor GSTIN</label>
	<input type="text" name="gst_in" class="form-control" id="gst_in">
    <label style="margin-bottom:10px;margin-top:15px;">Source Of Supply</label>
	<input type="text" name="source_of_supply" class="form-control" id="source_of_supply">
    <label style="margin-bottom:10px;margin-top:15px;">Destination Of Supply</label>
	<input type="text" name="destination_of_supply" class="form-control" id="destination_of_supply" value="[TN] - Tamil Nadu">
    <div class="row">
        <div class="col-lg-3" >
                <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
<input type="radio" id="Inculsive" name="Taxinandex" value="1" checked >
<label for="radio5">Tax Inculsive </label>
</div>
</div>

<div class="col-lg-4" >
                <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
<input type="radio" id="Exclusive" name="Taxinandex" value="2" >
<label for="radio6"> Tax Exclusive </label>
</div>
            </div>

            </div>
            <label style="margin-bottom:10px;margin-top:15px;">Tax</label>
            <select name="tax" id="tax" class="form-control gstq">
               <option value=''>Choose</option>
                                                                       <option value="5">GST 5%</option>
                                                                       <option value="12">GST 12%</option>
                                                                       <option value="18">GST 18%</option>
                                                                       <option value="28">GST 28%</option>
                                                                       <option value="33">GST 33%</option>
                                                                   </select>
                                                                       <div class="row" style="display:none" id="gstlabel">
                                                                           <div class="col-lg-12">
                                                                        <label style="margin-bottom:10px;margin-top:15px;" id="lblgst">*</label>
                                                                        <input type="hidden" id="hiddengst" name="hiddengst" value="" >
                                                                           </div>
                                                                           </div>
                                                                           <label style="margin-bottom:10px;margin-top:15px;">Invoice No# </label>
									 <input type="text" name="exp_invoice" class="form-control" autocomplete="off" id="exp_invoice">
									<label style="margin-bottom:10px;margin-top:15px;">Notes </label>
									 <textarea type="text" name="note" class="form-control" autocomplete="off"></textarea>

									 <label style="margin-bottom:10px;margin-top:15px;">Attach The File </label>
                        <input type="file" id="exampleFormControlFile1" name="category-img" style="margin-bottom:10px;">
                </div>
                <div class="col-lg-6">
                    <iframe src="" id="ifram" style="height:700px;width:100%;border:1px solid gray"></iframe>
                </div>
                <input type="submit"  name="save-expense" style="width:150px;color:#fff font-size:18px !important;" name="" class="form-control btn btn-success" value="Submit">
							<input type="reset" style="width:150px;color:#fff font-size:17px;" name="" class="form-control btn btn-danger" value="Clear">
							<a class="btn btn-primary" onclick="history.back()"><i class="fa fa-hand-o-left mr-2" aria-hidden="true" style="color:#ffff; font-size:20px;"></i>&nbsp;&nbsp;Back</a>
            </div>
                </div>
    </div>
    </div>
</div>
@endsection
