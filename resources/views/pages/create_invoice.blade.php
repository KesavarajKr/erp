@extends('layout.app');
@section('title','ERP - Estimate');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-lg-12 layout-spacing">

                <div class="widget-content widget-content-area br-6">
            <div class="form-row mb-4">
                <div class="form-group col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Company/Customer Name<span style="color:red">*</span> &nbsp;&nbsp;&nbsp; <i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal"></i></label>
                    <select id="selectbox" name="selectbox" class="form-control select2 statte" required>
                        <option value="">Choose Customer</option>

                    </select>
                </div>
                <div class="form-group col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Customer E-mail</label>
                                                    <input type="email" class="form-control" name="email" id="emailas">
                </div>
                <div class="col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Invoice No &nbsp;&nbsp;&nbsp; <i class="fa fa-cog" aria-hidden="true" data-toggle="modal" data-target="#myModal4"></i></label>
                                                <input type="text" name="estimate" id="estimate" class="form-control" autocomplete="off" value="" >
          <input type="hidden" name="prefix" value="" >
                </div>
                <div class="col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Invoice Prefix &nbsp;&nbsp;&nbsp; <i class="fa fa-cog" aria-hidden="true" data-toggle="modal" data-target="#myModal4"></i></label>
                                                <input type="text" name="estimate" id="estimate" class="form-control" autocomplete="off" value="" >
          <input type="hidden" name="prefix" value="" >
                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Billing Address</label>
                            <textarea type="text" name="shipping" id="shipping" class="form-control" autocomplete="off" cols="30" rows="2"></textarea>
                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Shipping Address</label>
                        <textarea type="text" name="billing" id="billing" class="form-control" autocomplete="off" cols="30" rows="2"></textarea>
                </div>
                <div class="col-lg-4">
                    <label style="margin-bottom:10px;margin-top:15px;">Terms &nbsp;&nbsp;&nbsp; <i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal3"></i></label>
                     <select name="terms" class='form-control select2' id="terms" >
                        <option value="#">--Choose Term--</option>
                        <option value="#myModal3">Add New</option>
                        <option value="#"></option>
                    </select>
                         <input type="hidden" name="termday" id="termday" class="text" value="0"/>
                </div>
                <div class="col-lg-4">
                    <label style="margin-bottom:10px;margin-top:15px;">Invoice Date <span style="color:red">*</span></label>
                            <input type="date" name="estimate_date" id="estimate_date" class="form-control" autocomplete="off" Value="" required  onblur="validatedate(this)">
                </div>
                <div class="col-lg-4">
                    <label style="margin-bottom:10px;margin-top:15px;">Invoice Date <span style="color:red">*</span></label>
                            <input type="date" name="estimate_date" id="estimate_date" class="form-control" autocomplete="off" Value="" required  onblur="validatedate(this)">
                </div>
                <div class="col-lg-4">
                    <label style="margin-bottom:10px;margin-top:15px;">Due Date<span style="color:red">*</span></label>
                            <input type="text" name="expiry_date" id="expiry_date" class="form-control" autocomplete="off" required>
                </div>
                <div class="col-lg-4">
                    <label style="margin-bottom:10px;margin-top:15px;">Customer GST <span style="color:red">*</span></label>
                            <input type="text" name="estimate_date" id="estimate_date" class="form-control" autocomplete="off" Value="" required  onblur="validatedate(this)">
                </div>
                <div class="col-lg-4">
                    <label style="margin-bottom:10px;margin-top:15px;">Pincode <span style="color:red">*</span></label>
                            <input type="text" name="estimate_date" id="estimate_date" class="form-control" autocomplete="off" Value="" required  onblur="validatedate(this)">
                </div>
                <div class="col-lg-4">
                    <label style="margin-bottom:10px;margin-top:15px;">State<span style="color:red">*</span></label>
                            <input type="text" name="expiry_date" id="expiry_date" class="form-control" autocomplete="off" required>
                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Sales Person &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal2"></i></label>
                         <select name="things" class='form-control select2' id="things">
                            <option value="#">--Choose Person--</option>
                            <option value="#myModal2">Add New</option>
                        </select>
                </div>

                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Item Rates Are</label>
                        <select name="Tax" id="tax" class='form-control'>
                        <option value="1">Tax Exclusive</option>
                        <option value="2">Tax Inclusive</option>
                        <option value="3">Tax Exemption</option>
                        </select>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive" id="addmore" style="margin-top:30px">
                        <table class="table">
                            <thead>
                                <th></th>
                                <th>Sno</th>
                                <th style="width:300px">Products  <span style="color:red">*</span> &nbsp;&nbsp;&nbsp; <i class="fa fa-plus text-success" aria-hidden="true" data-toggle="modal" data-target="#myModal5"></i></th>
                                <th>HSN/SAC</th>
                                <th>Quantity</th>
                                <th>Tax</th>
                                <th>Rate</th>
                                <th>Amount</th>
                            </thead>
                            <tbody>
                                <td></td>
<td><span class="row_no">1.</span></td>
<td><select class="form-control select2 productq" type='text' id='product' name='product[]' onchange="kontakte(this)" required placeholder="Enter Product" style="width: 450px;">
<option value="0">--Choose Product--</option>


         <option value="#">

</option>

<!--   <option value="#myModal12">-->
<!--Add New&hellip;-->
<!--</option>-->



</select>

<!--<label id="pdlabel"></label>-->

<textarea name="discription[]" id="discription" class="form-control" style='display:none;margin-top:2%' placeholder="Enter Product Description"></textarea>
</td>
<td><input class="form-control ratecls" type='text' id='hsn' required name='hsn[]'/></td>
<td><input class="form-control" type='text' id='qty' required name='qty[]'  Value="1" onblur="textchange(this)"/></td>
<td>
<select class="form-control " id='cat' required name='cat[]' onchange='gstchange(this)' style="width: 150px;">
<option value="">Choose</option>
<option value="0">Exempted 0% or GST 0%</option>
<option value="5">GST 5%</option>
<option value="12">GST 12%</option>
<option value="18">GST 18%</option>
<option value="28">GST 28%</option>
<option value="33">GST 33%</option>

</select></td>


<td><input class="form-control ratecls" type='text' id='rate' required name='rate[]' style="text-align: right;" value='0.0' onkeyup='ratechange(this)'/></td>
<td><input class="form-control ratecls" type='text' id='amount' required name='amount[]' style="text-align: right;" value='0.0'/> </td>
<!--<td><input class="form-control" type='text' id='tax' name='tax[]'  placeholder="Enter Tax" style="width: 200px;" /> </td>-->

</tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-success btn-sm addmore">Add More</button>
                            <button type="button" class="btn btn-danger btn-sm delete">Delete</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label style="margin-bottom:10px;margin-top:60px;">Customer Notes</label>
                                <textarea type="text" name="restock" class="form-control" autocomplete="off" placeholder="Customer Notes"></textarea>
                             <input type="checkbox" name="paymenthave" style="margin-top:20px" id="payment" onclick="add_payment()">
                             <label>I have received the Payment</label>
                             <div class="paymenthide
                             ">

                                <br>
                                <label style="margin-top:20px">Payment Mode</label >
               <select name="paymentmode" class='form-control select2'  id="paymentmode">
                    <option value="">Choose</option>
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                    <option value="Cheque">Cheque</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                </select>
                </div>
                 <label style="margin-top:30px">Terms & Conditions</label>
                         <input type="checkbox" name="term_condtions" id="term_condtions" onclick="add_term()">
                         <textarea  rows="5" cols="1" class="form-control termhide" name="term_condtions_data" id="term_condtions_data"></textarea>
                        </div>

                        <div class="col-lg-3">
                            <!--<input type="checkbox" name="paymenthave" placeholder="" style="margin-top:165px">-->
                            <!--    <label>I have Received the PayMent</label>-->
                                <br>
                                 <br> <br> <br> <br>  <br>
                                  <br>
                                   <br>
                                    <br>
                                    <br>
                                  {{-- <div class="paymenthide1
                                  ">
                                <label style="margin-top:20px">Deposit To</label>
               <select name="deposite" class='form-control select2'  id="deposite">
                    <option value="Sai Techno Solutions">Sai Techno Solutions</option>

                </select>
                </div> --}}
                        </div>

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Sub Total</label>
                                </div>
                                <div class="col-lg-6">
                                 <input type="text" name="subtotal" id="subtotal" class="form-control text-right" value="0.00">
                                </div>
                                    <div class="col-lg-2">
                                    <label style="margin-top:10px">Discount</label>
                                </div>
                                <div class="col-lg-2">
                                     <input type="text" name="discount" id="discount" class="form-control text-right"  onchange="txtchange(this)" value="0">
                                </div>
                                <div class="col-lg-2">
                                     <select class="form-control text-right"  name="selectdiscount"id="selectdiscount" onchange="selechange(this)" style="background-color: lightgray"><option value="Cash">₹</option><option  value="percent">%</option>  </select>
                                </div>
                                <div class="col-lg-6">
                                     <input type="text" name="txtdiscount" id="txtdiscount" class="form-control text-right" value="0.00">
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
                                    <label style="margin-top:10px">Adjustment</label>
                                </div>
                                <div class="col-lg-2">
                                     <input type="text" name="adjusment" id="adjusment" class="form-control text-right" onchange="txtchangeadj(this)" value="0">
                                </div>
                                <div class="col-lg-2">

                                </div>
                                <div class="col-lg-6">
                                     <input type="text" class="form-control text-right" name="Adj" id="Adj" value="0.00">
                                </div>
                                <div class="col-lg-6">
                                    <label style="margin-top:10px">Total</label>
                                </div>
                                <div class="col-lg-6">
                                     <input type="text" class="form-control text-right" name="total1" id="Total" value="0.00">
                                </div>
                                 <div class="col-lg-6">
                    <label style="margin-top:10px">Amount Paid</label>
                    </div>
                    <div class="col-lg-6">
                    <input type="text" class="form-control text-right" name="amtpaid" id="amtpaid" value="0.00">
                    </div>
                            </div>
                        </div>
                            <div class="col-lg-3" >


                            </div>
                            <div class="col-lg-3">

                            </div>

                        <div class="col-lg-3">

                        </div>

                    </div>

                    <div class="col-lg-12">
										  <input type="hidden" id="dis" name="dis" value="Cash" >
                   <input type="hidden" id="hidday" name="hidcat" value="" >
                   <input type="submit" class="btn btn-success mt-5" style="font-size: 17px" name="update-estimate" id="submit" value="Save">
					<a class="btn btn-primary mt-5" onclick="history.back()"><i class="fa fa-hand-o-left mr-2" aria-hidden="true" style="color:#ffff; font-size:17px;"></i>&nbsp;&nbsp;Back</a>
									</div>
                </div>
            </div>
                </div>
    </div>
    </div>
</div>
@endsection
