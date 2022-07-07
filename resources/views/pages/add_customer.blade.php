@extends('layout.app');
@section('title','ERP - Dashboard');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-lg-6">
                        <h4><b>Customer Details</b></h4>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button class="btn btn-success btn-outline fancy-button btn-0" style="font-size:16px;" data-toggle="modal" data-target="#myModal">Add Customer</button>
                <button class="btn btn-info btn-outline fancy-button btn-0" style="font-size:16px;">Back</button>
                    </div>
                </div>

            </div>
            <div class="widget-content widget-content-area br-6 mt-3">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>

                            <th>Customer Name</th>
                            <th>E-mail</th>
                            <th>Phone Number</th>
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
      <div class="modal-content" style="width:1100px;left:-115px">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <label style="margin-bottom:10px;margin-top:15px;">Converted ID</label>
                    <select id="leadid" name="leadid" class="form-control select2">
                        <option>Select Lead</option>

                    </select>
                </div>
                <div class="col-lg-4" >
                    <label style="margin-bottom:10px;margin-top:15px;">Customer Type</label>

                </div>
                <div class="col-lg-3" >
                    <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
    <input type="radio" id="customRadioInline1" name="customRadioInline1" value="Business" checked>
    <label for="radio3"> Business </label>
</div>
                </div>
                <div class="col-lg-5" >
                    <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
    <input type="radio" id="customRadioInline2" name="customRadioInline1" value="Individual">
    <label for="radio4"> Individual </label>
</div>
                </div>
                <div class="col-lg-4">
                    <label style="margin-bottom:10px;">Primary Contact</label>
                </div>
                <div class="col-lg-2">
                    <select name='Salutation' id='Salutation' class="form-control">
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Miss.</option>
                        <option>Dr.</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname">
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" onblur="AddItem();">
                </div>
                <div class="col-lg-6" id="comm">
                    <label style="margin-bottom:10px;margin-top:15px;">Company Name <span style="color:red">*</span></label>
                    <input type="text" name="companyname" id="com_name" class="form-control" autocomplete="off" required onblur="AddItem1();">
                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Customer Display Name <span style="color:red">*</span></label>
                    <!--<select class="form-control" name='cname' id='cname'>-->

                    <!--</select>-->
                    <input type="text" class="form-control" name='cname' id='cname'>

                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Customer E-mail</label>
                    <input type="email" class="form-control" name="email" id="c_email">
                </div>
                <div class="col-3-added col-lg-3" >
                    <label style="margin-bottom:10px;margin-top:15px;">Customer Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                    <span id="phoneerror" style="color:red";>Enter 10 Digit Number</span>
                </div>
                <div class="col-lg-3" id="customer_officeid">
                    <label style="margin-bottom:10px;margin-top:15px;">Customer Office Phone</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                    <span id="phoneerroroffice" style="color:red";>Enter 10 Digit Number</span>
                </div>
                <div class="col-lg-6" id="departmentid">
                    <label style="margin-bottom:10px;margin-top:15px;">Department</label>
                    <input type="text" class="form-control" name="department">
                </div>
                <div class="col-lg-6" id="websiteid">
                    <label style="margin-bottom:10px;margin-top:15px;" >Website</label>
                    <input type="text" class="form-control" name="website">
                </div>
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin-top:25px">
                        <li class="nav-item">
                          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Address</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Other Details</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-remarks" role="tab" aria-controls="pills-contact" aria-selected="false">Remarks</a>
                          </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                        <h5 class="mt-3">Billing Address</h5>
                                        <label style="margin-bottom:10px;margin-top:15px;">Attention</label>
                                            <input type="text" class="form-control" name="att1" id="att1">
                                            <label style="margin-bottom:10px;margin-top:15px;">Country/Orgin</label>
                                            <!--<input type='hidden' value="" name="region11" id="region11">-->

        <select name="region1" id="region1" class="form-control">
            <option value="">Select Country</option>


        </select>
                                            <label style="margin-bottom:10px;margin-top:15px;">Address <span style="color:red">*</span></label>
                            <textarea type="text" name="address1" id="address1" class="form-control" required  placeholder="Address"></textarea>
                            <label style="margin-bottom:10px;margin-top:15px;">State <span style="color:red">*</span></label>
                                        <select  class="form-control"  name="state1" id="state1" required></select>
                                <label style="margin-bottom:10px;margin-top:15px;">City <span style="color:red">*</span></label>
                                <select class="form-control"  name="city1" id="city1"></select>
                                <label style="margin-bottom:10px;margin-top:15px;">Pincode <span style="color:red">*</span></label>
                                    <input type="text" name="pincode1" required id="pincode1" maxlength="6" class="form-control" >
                                <label style="margin-bottom:10px;margin-top:15px;">Phone Number</label>
                        <input type="text" name="phone1" id="phone1"  class="form-control" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                <span id="phoneerror1" style="color:red";>Enter 10 Digit Number</span>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h5 class="mt-3" >Shipping Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <button type="button" class="btn btn-success btn-sm" onclick="copy();">Copy Billing Address</button>
                                                            </h5>

                                        <label style="margin-bottom:10px;margin-top:15px;">Attention</label>
                                         <input type="text" name="att2" id="att2" class="form-control" autocomplete="off">
                                        <label style="margin-bottom:10px;margin-top:15px;">Country/Orgin</label>
                                    <!--<input type='hidden' value="" name="region12" id="region12">-->

        <select name="region2" id="region2" class="form-control">
            <option value="">Select Country</option>

        </select>
                                            <label style="margin-bottom:10px;margin-top:15px;">Address</label><span style="color:red;">*</span>
                                       <textarea type="text"  name="address2" id="address2"  class="form-control"  placeholder="Address" required></textarea>
                                    <label style="margin-bottom:10px;margin-top:15px;">State </label><span style="color:red;">*</span>
                                <select class="form-control"   name="state2" id="state2" required></select>
                                <label style="margin-bottom:10px;margin-top:15px;">City</label><span style="color:red;">*</span>

                                   <select class="form-control"  name="city2" id="city2"></select>
                                                   <!--<input type="text" name="city2" id="secondlist2" class="form-control secondlist2">-->
                                    <label style="margin-bottom:10px;margin-top:15px;">Pincode </label><span style="color:red;">*</span>
                                     <input type="text" name="pincode2" id="pincode2" maxlength="6" class="form-control" autocomplete="off" required >
                                    <label style="margin-bottom:10px;margin-top:15px;">Phone Number</label>
                                <input type="text" name="phone2" id="phone2"  class="form-control" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                            <span id="phoneerror2" style="color:red";>Enter 10 Digit Number</span>

                                                        </div>
                                                    </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label style="margin-bottom:10px;margin-top:15px;">GST Treatment</label><span style="color:red;">*</span>
                                                <select class="form-control" name="gst_treatment" id="gst_treatment">
                                                    <option value="">Choose</option>
                                                    <option value="Registered Business">Registered Business</option>
                                                    <option value="Unregistered Business">Unregistered Business</option>
                                                    </select>
                   <label style="margin-bottom:10px;margin-top:15px;" id="gstlabel">GST No<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" name="gstin" id="gstin" >
                                    <label style="margin-bottom:10px;margin-top:15px;" id="panlabel">PAN No</label>
                                    <input type="text" class="form-control" name="pan" id="pan">
                                    <label style="margin-bottom:10px;margin-top:15px;" id="panlabel">Place Of Supply</label>
                                    <input type="text" class="form-control" name="place_of_supply" id="place_of_supply" value="Tamil Nadu (33)">

                                    <div class="row">

                                        <div class="col-lg-4" >
                                                <label style="margin-bottom:10px;margin-top:15px;">Tax Preference</label>

                                            </div>
                                            <div class="col-lg-3" >
                                                <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
                                <input type="radio" id="taxable1" name="tax_Preference" value="Taxable" checked>
                                <label for="radio3"> Taxable </label>
                            </div>
                                            </div>
                                            <div class="col-lg-5" >
                                                <div class="radio radio-success" style="margin-bottom:10px;margin-top:15px;">
                                <input type="radio" id="taxable2" name="tax_Preference" value="Non Taxable">
                                <label for="radio4"> Non Taxable </label>
                            </div>
                                            </div>


                                    </div>

                    <label style="margin-bottom:10px;margin-top:15px;" id="exemption_reasonlabel">Exemption Reason</label>

                                <input class="form-control" name="exemption_reason" id="exemption_reason">

                   <label style="margin-bottom:10px;margin-top:15px;" id="exemption_reasonlabel">Currency</label>

                                <select class="form-control select2" name="currency" id="currency">
                                    <option value="">Choose Currency</option>
<option value="USD">USD-United States Dollars</option>
<option value="EUR">EUR-Euro</option>
<option value="GBP">GBP-United Kingdom Pounds</option>
<option value="DZD">DZD-Algeria Dinars</option>
<option value="ARP">ARP-Argentina Pesos</option>
<option value="AUD">AUD-Australia Dollars</option>
<option value="ATS">ATS-Austria Schillings</option>
<option value="BSD">BSD-Bahamas Dollars</option>
<option value="BBD">BBD-Barbados Dollars</option>
<option value="BEF">BEF-Belgium Francs</option>
<option value="BMD">BMD-Bermuda Dollars</option>
<option value="BRR">BRR-Brazil Real</option>
<option value="BGL">BGL-Bulgaria Lev</option>
<option value="CAD">CAD-Canada Dollars</option>
<option value="CLP">CLP-Chile Pesos</option>
<option value="CNY">CNY-China Yuan Renmimbi</option>
<option value="CYP">CYP-Cyprus Pounds</option>
<option value="CSK">CSK-Czech Republic Koruna</option>
<option value="DKK">DKK-Denmark Kroner</option>
<option value="NLG">NLG-Dutch Guilders</option>
<option value="XCD">XCD-Eastern Caribbean Dollars</option>
<option value="EGP">EGP-Egypt Pounds</option>
<option value="FJD">FJD-Fiji Dollars</option>
<option value="FIM">FIM-Finland Markka</option>
<option value="FRF">FRF-France Francs</option>
<option value="DEM">DEM-Germany Deutsche Marks</option>
<option value="XAU">XAU-Gold Ounces</option>
<option value="GRD">GRD-Greece Drachmas</option>
<option value="HKD">HKD-Hong Kong Dollars</option>
<option value="HUF">HUF-Hungary Forint</option>
<option value="ISK">ISK-Iceland Krona</option>
<option value="INR" selected="selected">INR-Indian Rupees</option>
<option value="IDR">IDR-Indonesia Rupiah</option>
<option value="IEP">IEP-Ireland Punt</option>
<option value="ILS">ILS-Israel New Shekels</option>
<option value="ITL">ITL-Italy Lira</option>
<option value="JMD">JMD-Jamaica Dollars</option>
<option value="JPY">JPY-Japan Yen</option>
<option value="JOD">JOD-Jordan Dinar</option>
<option value="KRW">KRW-Korea (South) Won</option>
<option value="LBP">LBP-Lebanon Pounds</option>
<option value="LUF">LUF-Luxembourg Francs</option>
<option value="MYR">MYR-Malaysia Ringgit</option>
<option value="MXP">MXP-Mexico Pesos</option>
<option value="NLG">NLG-Netherlands Guilders</option>
<option value="NZD">NZD-New Zealand Dollars</option>
<option value="NOK">NOK-Norway Kroner</option>
<option value="PKR">PKR-Pakistan Rupees</option>
<option value="XPD">XPD-Palladium Ounces</option>
<option value="PHP">PHP-Philippines Pesos</option>
<option value="XPT">XPT-Platinum Ounces</option>
<option value="PLZ">PLZ-Poland Zloty</option>
<option value="PTE">PTE-Portugal Escudo</option>
<option value="ROL">ROL-Romania Leu</option>
<option value="RUR">RUR-Russia Rubles</option>
<option value="SAR">SAR-Saudi Arabia Riyal</option>
<option value="XAG">XAG-Silver Ounces</option>
<option value="SGD">SGD-Singapore Dollars</option>
<option value="SKK">SKK-Slovakia Koruna</option>
<option value="ZAR">ZAR-South Africa Rand</option>
<option value="KRW">KRW-South Korea Won</option>
<option value="ESP">ESP-Spain Pesetas</option>
<option value="XDR">XDR-Special Drawing Right (IMF)</option>
<option value="SDD">SDD-Sudan Dinar</option>
<option value="SEK">SEK-Sweden Krona</option>
<option value="CHF">CHF-Switzerland Francs</option>
<option value="TWD">TWD-Taiwan Dollars</option>
<option value="THB">THB-Thailand Baht</option>
<option value="TTD">TTD-Trinidad and Tobago Dollars</option>
<option value="TRL">TRL-Turkey Lira</option>
<option value="VEB">VEB-Venezuela Bolivar</option>
<option value="ZMK">ZMK-Zambia Kwacha</option>
<option value="EUR">EUR-Euro</option>
<option value="XCD">XCD-Eastern Caribbean Dollars</option>
<option value="XDR">XDR-Special Drawing Right (IMF)</option>
<option value="XAG">XAG-Silver Ounces</option>
<option value="XAU">XAU-Gold Ounces</option>
<option value="XPD">XPD-Palladium Ounces</option>
<option value="XPT">XPT-Platinum Ounces</option>
                                  </select>

                                    <label style="margin-bottom:10px;margin-top:15px;">Opening Balance</label>
                                                <input type="text" class="form-control" name="openbalance">
                                    <label style="margin-bottom:10px;margin-top:15px;">Payment Terms</label>
                                    <select class="form-control select2" name="payterm" id='post'>
                                        <option>Due On Receipt</option>
                                        <option>Net 15</option>
                                        <option>Net 20</option>
                                        <option>Net 25</option>
                                        <option>Due On Next Month</option>
                                    </select>
                                    <label style="margin-bottom:10px;margin-top:15px;">Facebook</label>
                                    <input type="text" class="form-control" name="fb">

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label style="margin-bottom:10px;margin-top:15px;">Contact Person</label>
                                                <input type="text" name="contactperson" id="contactperson" class="form-control" autocomplete="off">
                                    <label style="margin-bottom:10px;margin-top:15px;">Contact Number</label>
                            <input type="text" name="contactphone" id="contactphone"  class="form-control" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                            <span id="contacterror" style="color:red";>Enter 10 Digit Number</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-remarks" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label style="margin-bottom:10px;margin-top:15px;">Remarks</label>
                        <textarea type="text" name="remark" class="form-control"  placeholder="Remarks"></textarea>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection
