

    var ss = $(".basic").select2({
    tags: true,
});


    $('#zero-config').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
    "<'table-responsive'tr>" +
    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
           "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });

    $(document).ready(function() {

var html =
   '<tr><td><input class="form-control f_name1" placeholder="Name" type="text" name="f_name[]" id="f_name1"></td><td><input placeholder="Relation" class="form-control" type="text" name="f_relation[]"></td><td><input placeholder="Mobile Number" class="form-control" type="text" name="f_mobile[]"></td><td><button class="btn btn-danger remove">X</button></td></tr>';
$("#addProduct1").click(function() {
   // alert("Hellow");
   $('#app1').append(html);
});

$(document).on('click', '.remove', function() {
   $(this).parents('tr').remove();
});
    });

    var html2 =
            '<tr><td><select class="form-control"><option>Tenth</option><option>Twelth</option><option>UG</option><option>PG</option><option>Others</option></select></td><td><input class="form-control" type="text" name="degree[]" placeholder="Board" ></td><td><input class="form-control" type="text" name="university[]"	placeholder="Institure"></td><td><input class="form-control" type="text" name="passedout[]" placeholder="Pass out"></td><td><input class="form-control" type="file" name="document[]" placeholder="Pass out" ></td><td><button type="button" class="btn btn-danger remove2">X</button></td></tr>';
        $("#addProduct").click(function() {
            $('#app2').append(html2);
        });

        $(document).on('click', '.remove2', function() {
            $(this).parents('tr').remove();
        });

        var html3 =
            '<tr><td><input class="form-control" type="text" name="year[]" placeholder="Year" ></td><td><input class="form-control" type="text" name="period[]"placeholder="Period" ></td><td><input class="form-control" type="text" name="role[]" placeholder="Role"></td><td><input class="form-control" type="text" name="company[]" placeholder="Company"></td><td><input class="form-control" type="text" name="empdesignation[]" placeholder="Designation"></td><td><button type="button" class="btn btn-danger remove3">X</button></td></tr>';
        $("#addexperiencedetails").click(function() {
            $('#app3').append(html3);
        });

        $(document).on('click', '.remove3', function() {
            $(this).parents('tr').remove();
        });

        function submitform() {
        var name = $("#name").val();
        var dob = $("#dob").val();
        var fileUpload = $("#fileUpload").val();
        var Qualification = $("#Qualification").val();
        var mobile_no = $("#mobile_no").val();
        var nationality = $("#nationality").val();
        var gender = $("#gender").val();
        var designation = $("#designation").val();
        var temp_address = $("#temp_address").val();
        var fileUpload1 = $("#fileUpload1").val();
        var fileUpload2 = $("#fileUpload2").val();
        var fileUpload3 = $("#fileUpload3").val();
        var aadhaarno = $('#aadhaarno').val();

        if (name == "") {
            $(".alertmessage").text('Please Enter Employee Name');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            $("#collapse_1").collapse('show');
            $("#name").focus();
            return false;
        } else if (dob == "") {
            $(".alertmessage").text('Please Enter DOB');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            $("#collapse_1").collapse('show');
            $("#dob").focus();
            topFunction();
            return false;
        } else if (fileUpload == "") {
            $(".alertmessage").text('Please Choose Photo');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            topFunction();
            $("#collapse_1").collapse('show');
            $("#fileUpload").focus();
            return false;
        } else if (Qualification == "") {

            $(".alertmessage").text('Please Enter Qualification');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            topFunction();
            $("#collapse_1").collapse('show');
            $("#Qualification").focus();
            return false;
        } else if (mobile_no == "") {
            $(".alertmessage").text('Please Enter Mobile No');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            topFunction();
            $("#collapse_1").collapse('show');
            $("#mobile_no").focus();
            return false;
        } else if (gender == "") {
            $(".alertmessage").text('Please Choose Gender');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            topFunction();
            $("#collapse_1").collapse('show');
            $("#gender").focus();
            return false;
        } else if (designation == "") {
            $(".alertmessage").text('Please Enter Designation');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            topFunction();
            $("#collapse_1").collapse('show');
            $("#designation").focus();
            return false;
        } else if (temp_address == "") {
            $(".alertmessage").text('Please Choose Address');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            topFunction();
            $("#collapse_1").collapse('show');
            $("#temp_address").val();
            return false;
        } else if (nationality == "") {
            $(".alertmessage").text('Please Choose Nationality');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            topFunction();
            $("#collapse_4").collapse('show');
            $("#nationality").focus();
            return false;
        } else if (fileUpload1 == "") {
            $(".alertmessage").text('Please Choose Aadhaar Card');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            $("#collapse_5").collapse('show');
            $("#fileUpload1").focus();
            return false;
        } else if(aadhaarno ==''){
            $(".alertmessage").text('Please Enter Aadhaar Number');
            $(".alert").css("display", "block");
            setTimeout(
                function() {
                    $(".alert").css("display", "none");
                }, 5000);
            $("#collapse_5").collapse('show');
            $("#aadhaarno").focus();
            return false;
        }
        // else if (fileUpload2 == "") {
        //     $(".alertmessage").text('Please Choose Nationality');
        //     $(".alert").css("display", "block");
        //     setTimeout(
        //         function() {
        //             $(".alert").css("display", "none");
        //         }, 5000);

        //     $("#collapse_5").collapse('show');
        //     $("#fileUpload2").focus();
        //     return false;
        // }
        // else if (fileUpload3 == "") {
        //     $(".alertmessage").text('Please Choose Nationality');
        //     $(".alert").css("display", "block");
        //     setTimeout(
        //         function() {
        //             $(".alert").css("display", "none");
        //         }, 5000);

        //     $("#collapse_5").collapse('show');
        //     $("#fileUpload3").focus();
        //     return false;
        // }

    }


