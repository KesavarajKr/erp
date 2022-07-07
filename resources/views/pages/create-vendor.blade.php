@extends('layout.app');
@section('title','ERP - Estimate');
@section('main-content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-lg-12 layout-spacing">

                <div class="widget-content widget-content-area br-6">
            <div class="form-row mb-4">
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
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                </div>
                <div class="col-lg-3">
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" onblur="AddItem();">
                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Company Name <span style="color:red">*</span></label>
                    <input type="text" name="companyname" class="form-control" required  id="com_name" onblur="AddItem1();">
                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Vendor Display Name <span style="color:red"></span></label>
                    <!--<select class="form-control" name='cname'required  id='cname'>-->

                    <!--</select>-->
                        <input type="text" class="form-control" name='cname' id='cname'>
                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Vendor E-mail</label>
                    <input type="email" name="email" class="form-control" >
                </div>
                <div class="col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Vendor Phone<span style="color:red;">*</span></label>
                    <input type="text" name="phone" id="phone"  class="form-control" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                    <span id="phoneerror" style="color:red";>Enter 10 Digit Number</span>
                </div>
                <div class="col-lg-3">
                    <label style="margin-bottom:10px;margin-top:15px;">Vendor Office Phone</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                    <span id="phoneerroroffice" style="color:red";>Enter 10 Digit Number</span>
                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Department</label>
                    <input type="text" name="department" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label style="margin-bottom:10px;margin-top:15px;">Website</label>
                    <input type="text" name="website" class="form-control">
                </div>

                <div class="col-lg-12 mt-3">
                    <div  class="tab-struct custom-tab-1">
                        <ul role="tablist" class="nav nav-pills" id="myTabs_7">
                            <li class="nav-item"  role="presentation"><a aria-expanded="true"  data-toggle="tab" class="nav-link active" role="tab" id="home_tab_7" href="#home_7">Address</a></li>
                            <li role="presentation" class="nav-item"><a  data-toggle="tab" id="profile_tab_7" role="tab" href="#profile_7" class="nav-link" aria-expanded="false">Other Details</a></li>
                            <li role="presentation" class="nav-item"><a  data-toggle="tab" id="contact_id" role="tab" href="#profile_8" class="nav-link" aria-expanded="false">Contact</a></li>
                            <li role="presentation" class="nav-item"><a  data-toggle="tab" id="profile_tab_7" role="tab" href="#profile_9" class="nav-link" aria-expanded="false">Remarks</a></li>

                        </ul>
                        <div class="tab-content" id="myTabContent_7">
                            <div  id="home_7" class="tab-pane fade active show" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5 class="mt-3">Billing Address</h5>
                                        <label style="margin-bottom:10px;margin-top:15px;">Attention</label>
                                                <input type="text" name="att1" id="att1" class="form-control">
                                        <label style="margin-bottom:10px;margin-top:15px;">Country/Orgin</label>
                                        <!--<input type='hidden' value="" name="region11" id="region11">-->

        </select>
                                        <label style="margin-bottom:10px;margin-top:15px;">Address </label><span style="color:red;">*</span>
                                                    <textarea type="text" name="address1" id="address1"  class="form-control" required></textarea>
                                        <label style="margin-bottom:10px;margin-top:15px;">State </label><span style="color:red;">*</span>
                                                    <select  class="form-control"  name="state1" id="state1" required></select>
                                        <label style="margin-bottom:10px;margin-top:15px;">City </label><span style="color:red;">*</span>
                                                    <select class="form-control"  name="city1" id="city1"></select>
                                        <label style="margin-bottom:10px;margin-top:15px;">Pincode</label><span style="color:red;">*</span>
                                                    <input type="text" name="pincode1"  maxlength="6" id="pincode1" class="form-control" required>
                                        <label style="margin-bottom:10px;margin-top:15px;">Phone Number</label>
                                                    <input type="text" name="phone1" id="phone1" class="form-control" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                    <span id="phoneerror1" style="color:red";>Enter 10 Digit Number</span>

                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="mt-3" >Shipping Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-success btn-sm" onclick="copy();">Copy Billing Address</a>
                                        </h5>

                                        <label style="margin-bottom:10px;margin-top:15px;">Attention</label>
                                                    <input type="text" name="att2" id="att2" class="form-control">
                                        <label style="margin-bottom:10px;margin-top:15px;">Country/Orgin</label>
                                            <!--<input type='hidden' value="" name="region12" id="region12">-->


        </select>
                                        <label style="margin-bottom:10px;margin-top:15px;">Address</label><span style="color:red;">*</span>
                                                    <textarea type="text" name="address2"   id="address2" class="form-control" required></textarea>
                                        <label style="margin-bottom:10px;margin-top:15px;">State </label><span style="color:red;">*</span>
                                                    <select class="form-control"   name="state2" id="state2" required></select>
                                        <label style="margin-bottom:10px;margin-top:15px;">City </label><span style="color:red;">*</span>
                                                 <select class="form-control"  name="city2" id="city2"></select>
                                                   <!--<input type="text" name="city2" id="secondlist2" class="form-control secondlist2">-->
                                        <label style="margin-bottom:10px;margin-top:15px;">Pincode</label><span style="color:red;">*</span>
                                                    <input type="text" name="pincode2"  id="pincode2" maxlength="6" class="form-control" required>
                                        <label style="margin-bottom:10px;margin-top:15px;">Phone Number</label>
                                                    <input type="text" name="phone2" id="phone2" class="form-control" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                                            <span id="phoneerror2" style="color:red";>Enter 10 Digit Number</span>

                                    </div>
                                </div>
                            </div>
                            <div  id="profile_7" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                                        <div class="col-lg-12">
                                                            <label style="margin-bottom:10px;margin-top:15px;">GST Treatment</label><span style="color:red;">*</span>
                                                                        <select class="form-control" name="gst_treatment" id="gst_treatment">
                                                                            <option value="">Choose</option>
                                                                            <option value="Registered Business">Registered Business</option>
                                                                            <option value="Unregistered Business">Unregistered Business</option>
                                                                            </select>
                                                            <label style="margin-bottom:10px;margin-top:15px;" id="gstlabel">GST No<span style="color:red;">*</span></label>
                                                            <input type="text" class="form-control" name="gstin" id="gstin">
                                                            <label style="margin-bottom:10px;margin-top:15px;" id="panlabel">PAN No</label>
                                                            <input type="text" class="form-control" name="pan" id="pan">
                                                            <label style="margin-bottom:10px;margin-top:15px;" id="panlabel">Source Of Supply</label>
                                                            <input type="text" class="form-control" name="place_of_supply" id="place_of_supply">

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
                            <div id="profile_8" class="tab-pane fade " role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label style="margin-bottom:10px;margin-top:15px;">Contact Person</label>
                                                    <input type="text" name="contactperson" id="contactperson" class="form-control">
                                        <label style="margin-bottom:10px;margin-top:15px;">Contact Number</label>
                                        <input type="text" name="contactphone" id="contactphone" class="form-control" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        <span id="contacterror" style="color:red";>Enter 10 Digit Number</span>
                                    </div>
                                </div>
                            </div>
                            <div id="profile_9" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label style="margin-bottom:10px;margin-top:15px;">Remarks</label>
                    <textarea class="form-control"  name="remark" placeholder="Enter Your Text"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                </div>
            </div>
                </div>
    </div>
    </div>
</div>
@endsection
