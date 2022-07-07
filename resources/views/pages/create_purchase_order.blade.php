@extends('layout.app');
@section('title','ERP - Estimate');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-lg-12 layout-spacing">

                <div class="widget-content widget-content-area br-6">
            <div class="form-row mb-4">

                <div class="col-lg-2">
                    <label style="margin-bottom:10px;margin-top:15px;">Order Date <span style="color:red">*</span></label>
                    <input  type="date" name="order_date" id="order_date" required  class="form-control">
                </div>
                <div class="col-lg-4">
									<label style="margin-bottom:10px;margin-top:15px;">Vendor Name <i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i></label>
										<select class="form-control select2 statte"  type='text' id='vendor' name='vendor'>
											<option value="#">--Choose Vendor--</option>

                         <option value="#">

  </option>



</select>
										</select>
								</div>
                                <div class="col-lg-3">
									<label style="margin-bottom:10px;margin-top:15px;">Order No</label>


								<input type='text' id='order_no' name='order_no' class="form-control" value="">
								</div>
                                <div class="col-lg-3">
									<label style="margin-bottom:10px;margin-top:15px;">Due Date</label>
									<input type="date" name="delivery_date" id="delivery_date" class="form-control">
								</div>
            </div>
            <div class="row">
								<div class="col-lg-12">


								    						<div class="col-lg-2" >
																	<label style="margin-bottom:10px;margin-top:15px;">Delivery To</label>

																</div>
															<div class="col-lg-2" >
																	<div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
													<input type="radio" id="customRadioInline1" name="customRadioInline1" value="1" checked>
													<label for="radio3">Organisation </label>
												</div>
												</div>
												<input type="hidden" value="Business" name="hcustype" id="hcustype">
											<div class="col-lg-8" >
																	<div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
													<input type="radio" id="customRadioInline2" name="customRadioInline1" value="2">
													<label for="radio4"> Customer </label>
												</div>
																</div>

																<div class="col-lg-4" id="organization" >
																    <table style="width:100%;height:100px;">
  <tbody>
    <tr>

      <td style="width:45%;border-left: none;border-right:none;">

        <h4 style="">Sri Renuga Engineering Works</h4>

       <p>Coimbatore-631004.<br>
          India<br>
          <span>GST IN: 1234567890</span></p>
      </td>
    </tr>
  </tbody>
 </table>
 <input type="hidden" name="hidcompanyid" value="">
																    <!--<textarea name="organization"  class="form-control"  placeholder="Enter Product Description" rows="6" ></textarea>-->

																</div>
																<div class="col-lg-4" style="display:none;" id="statte1">
																    <select  name="selectbox" id="cusq" class="form-control select2 cusq" >
										<option value="0">Choose Customer</option>

									</select>
																</div>

								</div>
                            </div>
                            <div class="col-lg-12">
                                <div class="table-responsive" id="addmore" style="margin-top:30px">
                                    <table class="table">
                                        <thead>
                                             <th scope="col" class=""></th>
                                            <th>S.No</th>
                                            <th>Services/Products Name<span style="color:red">*</span>&nbsp;&nbsp; <i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal5"></i> </th>
                                            <th>HSN/SAC</th>

                                            <th>Quantity</th>
                                            <th>Tax</th>
                                            <th>Rate</th>
                                            <th>Amount</th>
                                        </thead>
                                        <tbody>
                                            <!--<i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal2"></i>-->
                                            <tr>
                                                 <td></td>
                                                 <td><span class="row_no">1.</span></td>

                                            <td style="width:200px;"><div class="form-group">
                                                        <select class="form-control select2 productq"  id='product' name='product[]' onchange="kontakte(this)" >
                                                              <option value="0">--Choose Product--</option>




                </select>
                <textarea name="discription[]" id="discription" class="form-control" style='display:none;margin-top:2%' placeholder="Enter Product Description"></textarea>
                                                         <label id="pdlabel"></label>
                                                    </div>
                                                </td>

                                                <td style="width:150px"><div class="form-group">
                                                        <input type='text' id='hsn' required name='hsn[]' class="form-control">

                                                    </div></td>
                                                <td><input type="text" type='number' id='qty' required name='qty[]'  Value="1" onblur="textchange(this)"class="form-control"></td>
                                                <td style="width:150px">
                                                    <select class="form-control select2 gstq" type='text' id='cat'required name='cat[]' onchange='gstchange(this)'>
                                                            <option value=''>Choose</option>
                                                            <option value="5">GST 5%</option>
                                                            <option value="12">GST 12%</option>
                                                            <option value="18">GST 18%</option>
                                                            <option value="28">GST 28%</option>
                                                            <option value="33">GST 33%</option>
                                                        </select>
                                                </td>
                                                <td><input type="text" type='text' id='rate' required name='rate[]' class="form-control" onkeyup='ratechange(this)'></td>
                                                <td><input type="text" class="form-control" id='amount' required name='amount[]' value='0.0'></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-success btn-sm btn addmore" style="margin-left:20px;">Add More</button>
                                    <button type="button" class="btn btn-danger btn-sm btn delete">Delete</button>
                                </div>
                            </div>
                            <div class="row">
									<div class="col-lg-5">
										<label style="margin-bottom:10px;margin-top:60px; margin-left:10px">Customer Notes</label>
											<textarea type="text" name="customer_notes" class="form-control" autocomplete="off" placeholder="Customer Notes" style="margin-left:10px"></textarea>
									</div>
									<div class="col-lg-6">
										<div class="row">
											<div class="col-lg-6">
												<label>SubTotal</label>
											</div>
											<div class="col-lg-6">
												<input type="text" class="form-control text-right"  name="subtotal" id="subtotal" value="0.00">
											</div>
											<div class="col-lg-6 Igst">
												<label>IGST</label>
											</div>
											<div class="col-lg-6 Igst">
												<input type="text" name="txtIgst" id="txtIgst" class="form-control text-right" value="0.00">
											</div>
											<div class="col-lg-6 cgst">
												<label>CGST</label>
											</div>
											<div class="col-lg-6 cgst">
												<input type="text" name="txtcgst" id="txtcgst" class="form-control text-right" value="0.00">
											</div>
											<div class="col-lg-6 sgst">
												<label>SGST</label>
											</div>
											<div class="col-lg-6 sgst">
												<input type="text" name="txtsgst" id="txtsgst" class="form-control text-right" value="0.00">
											</div>
											<div class="col-lg-2">
												<label style="margin-top:10px">Discount</label>
											</div>
											<div class="col-lg-2">
												<input type="text" name="discount" id="discount"  class="form-control text-right" value="0.00" onchange="txtchange(this)">
											</div>
											<div class="col-lg-2">
												<select class="form-control" name="selectdiscount"id="selectdiscount" onchange="selechange(this)">
													<option value="Cash">₹</option>
													<option  value="percent">%</option>
												</select>
											</div>
											<div class="col-lg-6">
												<input type="text" name="txtdiscount" id="txtdiscount" class="form-control text-right" value="0.00">
											</div>
											<div class="col-lg-2">
												<label style="margin-top:10px">Adjustment</label>
											</div>
											<div class="col-lg-2">
												<input type="text"  name="adjusment" id="adjusment" class="form-control text-right" value="0.00" onchange="txtchangeadj(this)">
											</div>
											<div class="col-lg-2">

											</div>
											<div class="col-lg-6">
												<input type="text" name="Adj" id="Adj" class="form-control text-right" value="0.00">
											</div>
											<div class="col-lg-6">
												<label style="margin-top:10px">Total</label>
											</div>
											<div class="col-lg-6">
												<input type="text" name="total1" id="Total" class="form-control text-right" value="0.00">
											</div>
										</div>
									</div>
									<div class="col-lg-6"></div>


								</div>
                                <div class="row">
								    <div class="col-lg-6">
								        <label style="margin-bottom:10px;margin-top:60px;margin-left:10px">Terms & Conditions</label>
									 <input type="checkbox" name="term_condtions" id="term_condtions" onclick="add_term()">
									 <textarea rows="5" cols="1" class="form-control termhide" name="term_condtions_data" id="term_condtions_data" style="margin-left:10px"></textarea>
								    </div>
								</div>
                                <div class="col-lg-12" style="margin-top:30px;padding-bottom:30px;margin-left:20px;">
                                    <input type="submit" name="save-purchaseentery" value="Save" class="btn btn-success" style="font-size: 17px;">
                                <a class="btn btn-primary" onclick="history.back()" style="font-size: 17px !important;"><i class="fa fa-hand-o-left mr-2" aria-hidden="true" style="color:#ffff;"></i>&nbsp;&nbsp;Back</a>
                                </div>
            </div>

            </div>
                </div>
    </div>
    </div>
</div>
@endsection
