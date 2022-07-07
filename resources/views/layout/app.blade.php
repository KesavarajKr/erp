<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="../assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="../assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="../plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="../assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../plugins/jquery-step/jquery.steps.css">
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="../plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="../plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../plugins/select2/select2.min.css">
    <link href="../assets/css/tables/table-basic.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="../plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="../plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="../plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="../plugins/table/datatable/dt-global_style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- END PAGE LEVEL STYLES -->
    <style>
        #formValidate .wizard > .content {min-height: 25em;}
        #example-vertical.wizard > .content {min-height: 24.5em;}
    </style>
</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                {{-- <li class="nav-item theme-logo">
                    <a href="/dashboard">
                        <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                    </a>
                </li> --}}
                <li class="nav-item theme-text">
                    <a href="/dashboard" style="color:#fff" class="nav-link"> RAC - ERP </a>
                </li>
            </ul>
            {{-- <a href="javascript:void(0);" style="color:#fff" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a> --}}


            <ul class="navbar-item flex-row ml-md-auto">
                <li class="nav-item dropdown notification-dropdown" >
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{-- <span style="background-color:#fff;padding:5px">25</span> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                        <span class="badge badge-success" style="border:0px;background-color:#fff;width:20px;height:20px">
                            <p style="color:#000;font-weight:bold">{{$notificationcount}}</p>
                        </span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll" style="overflow-y:scroll">






                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="https://www.freeiconspng.com/thumbs/shutdown-icon/shutdown-icon-26.png" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">

                            <div class="dropdown-item">
                                {{-- {{auth()->user()->name}} --}}
                                <a class="" href="/logout"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->

    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">
                {{-- <div class="shadow-bottom"></div> --}}
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="/dashboard" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>

                            </div>
                        </a>

                    </li>

                    @include('layout.navbar');

                </ul>

            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->

        <div id="content" class="main-content">
            @section('main-content')

            @show

            @include('layout.footer');
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="../assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="../plugins/apex/apexcharts.min.js"></script>
    <script src="../assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="../assets/js/scrollspyNav.js"></script>
    <script src="../plugins/jquery-step/jquery.steps.min.js"></script>
    <script src="../plugins/jquery-step/custom-jquery.steps.js"></script>
    <script src="../plugins/table/datatable/datatables.js"></script>
    <script src="../plugins/select2/select2.min.js"></script>
    <script src="../plugins/select2/custom-select2.js"></script>
    <script src="../assets/js/AjaxFunction.js"></script>
    <script src="../plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="../plugins/sweetalerts/custom-sweetalert.js"></script>
     <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
     <script src="../plugins/table/datatable/datatables.js"></script>
     <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
     <script src="../plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
     <script src="../plugins/table/datatable/button-ext/jszip.min.js"></script>
     <script src="../plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
     <script src="../plugins/table/datatable/button-ext/buttons.print.min.js"></script>
</body>
</html>
<script>
    $('#html5-extension').DataTable( {
        "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
    "<'table-responsive'tr>" +
    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        buttons: {
            buttons: [
                { extend: 'copy', className: 'btn btn-sm' },
                { extend: 'csv', className: 'btn btn-sm' },
                { extend: 'excel', className: 'btn btn-sm' },
                { extend: 'print', className: 'btn btn-sm' }
            ]
        },
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
    } );
</script>
<script>
    $(document).ready(function() {
        var html =
   '<tr><td><input class="form-control f_name1" placeholder="Name" type="text" name="f_name[]" id="f_name1"></td><td><input placeholder="Relation" class="form-control" type="text" name="f_relation[]"></td><td><input placeholder="Mobile Number" class="form-control" type="text" name="f_mobile[]"></td><td><button class="btn btn-danger remove">X</button></td></tr>';
    $(document).on('click', '#addProduct1', function() {
//    alert("Hellow");


   $('#app1').append(html);
//    alert($("#app1").val())
});

$(document).on('click', '.remove', function() {
   $(this).parents('tr').remove();
});

    });
    $(document).ready(function(){

        fetchUser();

        function fetchUser()
        {
            $.ajax({
                type:'GET',
                url:'/getuser',
                dataType:'json',
                success: function(response){
                    // console.log(response.users)
                    $('.userTable tbody').html("");
                    $.each(response.users,function(key, item){
                        $('.userTable tbody').append(
                            '<tr>\
                            <td>'+item.id+'</td>\
                             <td>'+item.name+'</td>\
                             <td>'+item.password+'</td>\
                             <td>'+item.roll+'</td>\
                             <td>\
                                 <button class="btn btn-danger btn-sm">Delete</button>\
                             </td>\
                         </tr>'
                        )

                    });
                }
            })
        }


        $(document).on('submit','#userform',function(e){

            e.preventDefault();

            var name = $("input[name=name]").val();
            var password = $("input[name=epass]").val();
            var role = $("select[name=role]").val();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
           type:'POST',
           url:"{{ route('user.store') }}",
           data:{name:name, password:password, role:role},
           success:function(data){
            $('#myModal').modal('hide');
            document.getElementById("userform").reset();
                        swal({
                title: 'User!',
                text: "User Saved Successfully!",
                type: 'success',
                padding: '2em'
                });
                fetchUser();
           }
        });

    });

});



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
        "bDestroy": true
    });

       var html3 =
            '<tr><td><input class="form-control" type="text" name="year[]" placeholder="Year" ></td><td><input class="form-control" type="text" name="period[]"placeholder="Period" ></td><td><input class="form-control" type="text" name="role[]" placeholder="Role"></td><td><input class="form-control" type="text" name="company[]" placeholder="Company"></td><td><input class="form-control" type="text" name="empdesignation[]" placeholder="Designation"></td><td><button type="button" class="btn btn-danger remove3">X</button></td></tr>';
        $("#addexperiencedetails").click(function() {
            $('#app3').append(html3);
        });

        $(document).on('click', '.remove3', function() {
            $(this).parents('tr').remove();
        });




</script>
<script>
    var html2 =
            '<tr><td><select class="form-control" name="level[]"><option>Choose Level</option><option>Tenth</option><option>Twelth</option><option>UG</option><option>PG</option><option>Others</option></select></td><td><input class="form-control" type="text" name="degree[]" placeholder="Board" ></td><td><input class="form-control" type="text" name="university[]"	placeholder="Institure"></td><td><input class="form-control" type="text" name="passedout[]" placeholder="Pass out"></td><td><button type="button" class="btn btn-danger remove2">X</button></td></tr>';

        $("#eductionadd").click(function(){
            // alert("Hi");
            $('#appp2').append(html2);
        });

        $(document).on('click', '.remove2', function() {
            $(this).parents('tr').remove();
        });
</script>

<script>
     $('#email').on('blur', function() {
            check();
        });
        $('#name').on('blur', function() {
            check1();
        });
        $('#secondname').on('blur', function() {
            check2();
        });
        $('#mobile_no').on('blur', function() {
            check3();
        });
        $('#landline').on('blur', function() {
            check4();
        });
        $('#dob').on('blur', function() {
            check13();
        });
        $('#Qualification').on('blur', function() {
            check14();
        });
        $('#nationality').on('blur', function() {
            check15();
        });
        $('#gender').on('blur', function() {
            check16();
        });
        $('#designation').on('blur', function() {
            check17();
        });
        $('#bankname').on('blur', function() {
            check5();
        });
        $('#branchname').on('blur', function() {
            check6();
        });
        $('#accholdername').on('blur', function() {
            check7();
        });
        $('#accno').on('blur', function() {
            check8();
        });
        $('#ifsc_code').on('blur', function() {
            check9();
        });
        $('#f_name').on('blur', function() {
            check10();
        });
        $('#f_name1').on('blur', function() {
            check18();
        });
        $('#f_relation').on('blur', function() {
            check11();
        });
        $('#f_mobile').on('blur', function() {
            check12();
        });
</script>
<script>
     function check() {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var email = $("#email").val();
        if (filter.test(email) || email == "") {
            $("#email").css("border", "1px solid green");
            $("#user_email").hide();
            valid = false;
        } else {
            $("#user_email").html('Please enter correct Email Id')
            $("#email").css("border", "1px solid red");
            // $("#email").focus();
            $("#user_email").show();
            valid = false;
        }

    }

    function check1() {
        var name_x = /^[a-zA-Z ]*$/;
        var name = $("#name").val();
        if (!name_x.test(name) || name == "") {
            $('#user_name').html("Please enter correct Name.");
            $("#name").css("border", "1px solid red");
            // $("#name").focus();
            $("#user_name").show();
            valid = false;
        } else {
            $("#name").css("border", "1px solid green");
            $("#user_name").hide();
            return false;
        }
    }

    function check2() {
        var name_x = /^[a-zA-Z\s]*$/;
        if (!name_x.test($('#secondname').val())) {
            $('#user_name2').html("Please enter correct Name.");
            $("#secondname").css("border", "1px solid red");
            // $("#secondname").focus();
            $("#user_name2").show();
            valid = false;
        } else {
            $("#secondname").css("border", "1px solid green");
            $("#user_name2").hide();
            return false;
        }
    }

    function check3() {
        var pattern = /^[0-9]{10}$/;
        var mobile_no = $('#mobile_no').val();
        if (!pattern.test(mobile_no) || mobile_no == "") {
            $('#mobile').html("Please enter 10 digit Mobile no.");
            $("#mobile_no").css("border", "1px solid red");
            // $("#mobile_no").focus();
            $("#mobile").show();
            valid = false;
        } else {
            $("#mobile_no").css("border", "1px solid green");
            $("#mobile").hide();
            return false;
        }
    }

    function check4() {
        var pattern = /^[0-9]$/;
        if (isNaN($('#landline').val())) {
            $('land').html("Please enter correct Landline no.");
            $("#landline").css("border", "1px solid red");
            // $("#landline").focus();
            $("#land").show();
            valid = false;
        } else {
            $("#landline").css("border", "1px solid green");
            $("#land").hide();
            return false;
        }
    }

    function check5() {
        var pattern = /^[a-zA-Z\s]*$/;
        if (!pattern.test($('#bankname').val())) {
            $('#bank').html("Please enter correct Bank Name.");
            $("#bankname").css("border", "1px solid red");
            // $("#bankname").focus();
            $("#bank").show();
            valid = false;
        } else {
            $("#bankname").css("border", "1px solid green");
            $("#bank").hide();
            return false;
        }
    }

    function check6() {
        var pattern = /^[a-zA-Z\s]*$/;
        if (!pattern.test($('#branchname').val())) {
            $('#branch').html("Please enter correct Branch Name.");
            $("#branchname").css("border", "1px solid red");
            // $("#branchname").focus();
            $("#branch").show();
            valid = false;
        } else {
            $("#branchname").css("border", "1px solid green");
            $("#branch").hide();
            return false;
        }
    }

    function check7() {
        var pattern = /^[a-zA-Z\s]*$/;
        if (!pattern.test($('#accholdername').val())) {
            $('#holder').html("Please enter correct Name.");
            $("#accholdername").css("border", "1px solid red");
            // $("#accholdername").focus();
            $("#holder").show();
            valid = false;
        } else {
            $("#accholdername").css("border", "1px solid green");
            $("#holder").hide();
            return false;
        }
    }

    function check8() {
        if (isNaN($('#accno').val())) {
            $('#acc').html("Please enter correct Account No.");
            $("#accno").css("border", "1px solid red");
            // $("#accno").focus();
            $("#acc").show();
            valid = false;
        } else {
            $("#accno").css("border", "1px solid green");
            $("#acc").hide();
            return false;
        }
    }

    function check9() {
        var pattern = /^[A-Z]{4}[A-Z0-9]{5,7}$/;
        if (!pattern.test($('#ifsc_code').val())) {
            $('#ifsc').html("Please enter valid IFSC code.");
            $("#ifsc_code").css("border", "1px solid red");
            // $("#ifsc_code").focus();
            $("#ifsc").show();
            valid = false;
        } else {
            $("#ifsc_code").css("border", "1px solid green");
            $("#ifsc").hide();
            return false;
        }
    }

    function check10() {
            var name_x = /^[a-zA-Z\s]*$/;
            var fname = $('.f_name').val();
            console.log(fname);
            if (!name_x.test(fname)) {
                $('#fname').html("Please enter correct Name.");
                $("#f_name").css("border", "1px solid red");
                // $("#f_name").focus();
                $("#fname").show();
                valid = false;
            } else {
                $("#f_name").css("border", "1px solid green");
                $("#fname").hide();
                return false;
            }
    }


    function check11() {
        var name_x = /^[a-zA-Z\s]*$/;
        if (!name_x.test($('#f_relation').val())) {
            $('#frelation').html("Please enter correct Name.");
            $("#f_relation").css("border", "1px solid red");
            // $("#f_relation").focus();
            $("#frelation").show();
            valid = false;
        } else {
            $("#f_relation").css("border", "1px solid green");
            $("#frelation").hide();
            return false;
        }
    }

    function check12() {
        var pattern = /^[0-9]{10}$/;
        if (!pattern.test($('#f_mobile').val())) {
            $('#fmobile').html("Please enter correct Mobile no.");
            $("#f_mobile").css("border", "1px solid red");
            // $("#f_mobile").focus();
            $("#fmobile").show();
            valid = false;
        } else {
            $("#f_mobile").css("border", "1px solid green");
            $("#fmobile").hide();
            return false;
        }
    }

    function check13() {
        var dob = $('#dob').val();
        if (dob == "") {
            $('#DOB').html("Please enter DOB.");
            $("#dob").css("border", "1px solid red");
            // $("#dob").focus();
            $("#DOB").show();
            valid = false;
        } else {
            $("#dob").css("border", "1px solid green");
            $("#DOB").hide();
            return false;
        }
    }

    function check14() {
        var qfy = $('#Qualification').val();
        if (qfy == "") {
            $('#qfy').html("Please enter Qualification.");
            $("#Qualification").css("border", "1px solid red");
            // $("#Qualification").focus();
            $("#qfy").show();
            valid = false;
        } else {
            $("#Qualification").css("border", "1px solid green");
            $("#qfy").hide();
            return false;
        }
    }

    function check15() {
        var nation = $('#nationality').val();
        if (nation == "") {
            $('#nation').html("Please select Nationality.");
            $("#nationality").css("border", "1px solid red");
            // $("#nationality").focus();
            $("#nation").show();
            valid = false;
        } else {
            $("#nationality").css("border", "1px solid green");
            $("#nation").hide();
            return false;
        }
    }

    function check16() {
        var gen = $('#gender').val();
        if (gen == "") {
            $('#gen').html("Please select Gender.");
            $("#gender").css("border", "1px solid red");
            // $("#gender").focus();
            $("#gen").show();
            valid = false;
        } else {
            $("#gender").css("border", "1px solid green");
            $("#gen").hide();
            return false;
        }
    }

    function check17() {
        var des = $('#designation').val();
        if (des == "") {
            $('#des').html("Please select Designation.");
            $("#designation").css("border", "1px solid red");
            // $("#designation").focus();
            $("#des").show();
            valid = false;
        } else {
            $("#designation").css("border", "1px solid green");
            $("#des").hide();
            return false;
        }
    }

    function check18() {
            var name_x = /^[a-zA-Z\s]*$/;
            var fname = $('#f_name1').val();
            console.log(fname);
            if (!name_x.test(fname)) {
                $('#fname').html("Please enter correct Name.");
                $("#f_name1").css("border", "1px solid red");
                // $("#f_name1").focus();
                $("#fname").show();
                valid = false;
            } else {
                $("#f_name1").css("border", "1px solid green");
                $("#fname").hide();
                return false;
            }
    }

    function fnCalculateAge(){

var userDateinput = document.getElementById("dob").value;
console.log(userDateinput);

// convert user input value into date object
var birthDate = new Date(userDateinput);
 console.log(" birthDate"+ birthDate);

// get difference from current date;
var difference=Date.now() - birthDate.getTime();

var  ageDate = new Date(difference);
var calculatedAge=   Math.abs(ageDate.getUTCFullYear() - 1970);

if(calculatedAge < 18)
{
    alert("Please Add Employee is Major...");
}
else
{
    $("#minormajor").val("Major")
    // alert("Major");
}

}
</script>

<script>

    window.onload = function(){


      // var mobilekey = "MTYwMzk3MTY2NS42NTU2IzEwNDc0NzE1Mg==";
      // var mobile = '9361878047';


      var links = "https://mapi.indiamart.com/wservce/enquiry/listing/GLUSR_MOBILE/6380977800/GLUSR_MOBILE_KEY/MTYyMTYwODI0My4wNjA4IzgwMDAwNDk=/";

      //  console.log(links);
      //var objects = JSON.stringify(links);

     $.each(links, function(i, item) {
     var roll = item.RN;
     var sendername = item.SENDER_NAME;

        alert(roll);
     $.ajax({
           type: "POST",
           url: "save_indiamartdata.php",
           data:{roll_no:item.RN,sender_name:item.SENDERNAME,entrydate:item.DATE_RE,created:item.DATE_TIME_RE,com_name:item.GLUSR_USR_COMPANYNAME,mobile:item.MOB,notes:item.ENQ_MESSAGE,address:item.ENQ_ADDRESS,deal_name:item.PRODUCT_NAME,email:item.SENDEREMAIL,queryId:item.QUERY_ID},
           //type:"json",
           success: function(data){
               console.log(data);
              if(true){
                 // alert("added");
              }
              else{
                 // alert("Not added");
              }

           }
      });



  });

  }
  </script>
  <script>
      $(".addfollowup").click(function(){

        var leadid = $(this).data("leadid");

        $("#leadid").val(leadid);
      });
  </script>
  <script>
    $(".conertlead").click(function(){

      var leadid = $(this).data("leadid");

      $("#leadsource").val(leadid);
    });
</script>
<script>
    $(".assignlead").click(function(){

      var leadid = $(this).data("leadid");

      $("#leadsource1").val(leadid);
    });
</script>
<script>
    $(".leadsfilter").click(function(){

        var filtertype = $(this).attr("id");

        if (filtertype != '')

                {

                    $.ajax({

                        url: "/getFilteration",

                        method: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            filter: filtertype
                        },
                        success: function(response) {

                            $('#filteration').find('tr').remove().end();
                            // $('#filteration').find('tr')remove().end()
                    $('#myModal3').modal('show');
                    // $('#filteration').html(response);
                    $.each(response,function(key, item){
                    //   console.log(item.Caste_name);
                       $('#filteration').append(
                            '<tr> <td>'+item.leadid+'</td><td>'+item.leadentrydate+'</td><td>'+item.leadsource+'</td><td>'+item.customername+'</td><td>'+item.mobilenumber+'</td><td><span style="width:100px" class="badge badge-secondary">'+item.leadstatus+'</span></td><td> <a href="leadedit/'+item.id+'" class="btn btn-info btn-sm" title="Edit Leads"><i class="bi bi-pencil-square"></i></a> <a href="deletelead/'+item.id+'" onclick="return confirm("Do You want Delete this Data?")" class="btn btn-danger btn-sm" title="Delete Leads"><i class="bi bi-trash-fill"></i></a> <a href="viewlead/'+item.id+'" class="btn btn-warning btn-sm" title="View Lead"><i class="bi bi-eye-fill"></i></a> <button class="btn btn-primary btn-sm addfollowup" data-leadid="'+item.leadid+'" data-toggle="modal" data-target="#exampleModal1" title="Add Notes"><i class="bi bi-card-text"></i></button> <button class="btn btn-primary btn-sm conertlead" title="Convert Lead" data-leadid="'+item.leadid+'" data-toggle="modal" data-target="#exampleModal2"><i class="bi bi-arrow-repeat"></i></button> </td></tr>'
                        )

                    });
                        }

                    });

                }

    })
</script>
<script>
    $(".datefilter").click(function(){

        var fromdate = $("#fromdate").val();
        var todate = $("#todate").val();

       if(fromdate != '' || todate != '')
       {
        $.ajax({
        url: "/getDateFilteration",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            fromdate: fromdate,
            todate: todate
        },
        success: function(response) {
            // $('#customdateoutput').html(response);
            $.each(response,function(key, item){
                    //   console.log(item.Caste_name);
                       $('#customdateoutput').append(
                            '<tr> <td>'+item.leadid+'</td><td>'+item.leadentrydate+'</td><td>'+item.leadsource+'</td><td>'+item.customername+'</td><td>'+item.mobilenumber+'</td><td><span style="width:100px" class="badge badge-secondary">'+item.leadstatus+'</span></td><td> <a href="leadedit/'+item.id+'" class="btn btn-info btn-sm" title="Edit Leads"><i class="bi bi-pencil-square"></i></a> <a href="deletelead/'+item.id+'" onclick="return confirm("Do You want Delete this Data?")" class="btn btn-danger btn-sm" title="Delete Leads"><i class="bi bi-trash-fill"></i></a> <a href="viewlead/'+item.id+'" class="btn btn-warning btn-sm" title="View Lead"><i class="bi bi-eye-fill"></i></a> <button class="btn btn-primary btn-sm addfollowup" data-leadid="'+item.leadid+'" data-toggle="modal" data-target="#exampleModal1" title="Add Notes"><i class="bi bi-card-text"></i></button> <button class="btn btn-primary btn-sm conertlead" title="Convert Lead" data-leadid="'+item.leadid+'" data-toggle="modal" data-target="#exampleModal2"><i class="bi bi-arrow-repeat"></i></button> </td></tr>'
                        )

                    });
        }
        });

       }
       else
       {
           alert("fill data");
       }

            });
</script>

<script>
    $(".viewnotes").click(function(){
        var notesid = $(this).data("leadid");
        alert(notesid)

        if(notesid)
        {
            $.ajax({
        url: "/getcallupdate",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            notesid: notesid,
        },
        success: function(response) {
            // $('#customdateoutput').html(response);
            $('.callupdatecontent').find('li').remove().end();
            $.each(response,function(key, item){
                    //   console.log(item.leadid);
                      $('#myModal5').modal('show');

                      $('.callupdatecontent').append(
                        // item.description
                        // '<li class="list-group-item"> <div class="card shadow"> <div class="card-body"> <div class="row"> <div class="col-lg-1"> <i class="mt-2 text-info bi bi-book" style="font-size:50px"></i> </div><div class="col-lg-9"> <h5><b>'+item.notes+'</b></h5> <p>'+item.description+'</p><span class="badge badge-success">Added to :'+item.created_at+'</span> </div></div></div></div></li>'
                        '<li class="list-group-item"> <div class="card shadow"> <div class="card-body"> <div class="row"> <div class="col-lg-3"> <i class="mt-2 text-info bi bi-book" style="font-size:50px"></i> </div><div class="col-lg-7"> <h5><b>'+item.title+'</b></h5> <p>'+item.description+'</p><span class="badge badge-success">Added to : '+item.created_at+'</span> </div></div></div></div></li>'
                        )


                    });
        }
        });
        }
        else
        {
            alert("No Data");
        }



    });
</script>
<script>
    $(".callupdatefilter").change(function(){

        var filterdate = $(this).val();

        if(filterdate)
        {
            $.ajax({
        url: "/getfilternotes",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            filterdate: filterdate,
        },
        success: function(response) {

            $.each(response,function(key, item){

                $('#notecontent').html(
                        // item.description

                        '<tr> <td>'+item.created_at+'</td><td>'+item.leadid+'</td><td>'+item.title+'</td><td> <td><button class="btn btn-warning viewnotes" data-leadid="'+item.leadid+'" data-toggle="modal" data-target="#myModal5">View Notes</button></td> <td><a href="viewlead/'+item.id+'" class="btn btn-primary" >View Lead</a></td></td></tr>'
                        )


                    });
        }
        });
        }


    });
</script>
<script>
    // $(".getattendance").click(function(){

        $(document).on("click",".getattendance",function() {

        var empid = $(this).data('empid');
        var logindate = $(this).data('logdate');

        // alert("working");
        //get all attendance

        if(empid != '' || logindate != '')
       {
        $.ajax({
        url: "/getAttendance",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            empid: empid,
            logindate: logindate
        },
        success: function(response) {
            $('#attendanceout').find('tr').remove().end();
            $.each(response,function(key, item){
                      console.log(item.lotime);
                       $('#attendanceout').append(
                            '<tr> <td>'+item.lotime+'</td><td>'+item.Direction+'</td></tr>'
                        )

                    });
        }
        });

       }
       else
       {
           alert("fill data");
       }


       //get morning and afternoon lunch

       if(empid != '' || logindate != '')
       {
        $.ajax({
        url: "/getAttendanceFirst",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            empid: empid,
            logindate: logindate
        },
        success: function(response) {

            $("#time1").text(response+" Hr");
        }
        });

       }
       else
       {
           alert("fill data");
       }

       if(empid != '' || logindate != '')
       {
        $.ajax({
        url: "/getAttendanceSecond",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            empid: empid,
            logindate: logindate
        },
        success: function(response) {
            // $('#time2').remove().end();
            $("#time2").html(response+" Hr");
        }
        });

       }
       else
       {
           alert("fill data");
       }

       if(empid != '' || logindate != '')
       {
        $.ajax({
        url: "/getAttendanceTotal",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            empid: empid,
            logindate: logindate
        },
        success: function(response) {
            // $('#time2').remove().end();
            $("#time3").html(response+" Hr");

            if(response < "08:00:00")
            {
                // alert("Absent");
                $("#attendancestatus").html('<span class="badge badge-danger">Absent</span>');
            }
            else
            {
                // alert("Present");
                $("#attendancestatus").html('<span class="badge badge-success">Present</span>');
            }
        }
        });

       }
       else
       {
           alert("fill data");
       }

    })
</script>

<script>
    // $(".attendancefilter").change(function(){

        $(document).on('change','.attendancefilter',function(){

        var getdate = $(this).val();

        if(getdate)
        {
            $.ajax({
        url: "/getfilterattendance",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            getdate: getdate,
        },
        success: function(response) {
            $('#attendanceappend').find('tr').remove().end();
            $.each(response,function(key, item){
                    $("#attendanceappend").append(
                        '<tr> <td>'+item.empid+'</td><td>'+item.attedance_date+'</td><td>'+item.morning_in+'</td><td>'+item.lunch_out+'</td><td>'+item.lunch_in+'</td><td>'+item.eveningout+'</td><td>'+item.totalworkhrs+'</td><td>'+item.status+'</td></tr>'
                    )

                    });
        }
        });
        }

    })
</script>

<script>
    // $(".attendancefilter").change(function(){

        $(document).on('click','.viewmonthwisereport',function(){

        var getmonthyear = $(".monthyear").val();

        if(getmonthyear)
        {
            $.ajax({
        url: "/monthwisereport",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            getmonthyear: getmonthyear,
        },
        success: function(response) {

            $('#monthwisereport').find('tr').remove().end();
            $.each(response,function(key, item){
                alert(response.report[key])

                    $("#monthwisereport").append(
                        '<tr><td class="monthyr"></td><td>'+item.emp_id+'</td><td>'+item.name+'</td><td>25</td><td>@if($getcount = App\Models\attendance_detail::where("status", "p")->where("attedance_date","Like", '+2022-06+')->where("empid", '+item.empid+')->get())  @endif</td><td>1</td></tr>'
                    )

                    });
        }
        });
        }

    })
</script>
<script>
    $(".actualbasic").hide();
    $(".grossallowance").hide();
    $(".dailysalary").hide();

    $(".allowancetype").change(function(){

        var allowancetype = $(this).val();
        // alert(allowancetype);
        if(allowancetype == 'WithPF')
        {
            $(".actualbasic").show();
            $(".grossallowance").show();
            $(".dailysalary").hide();
        }
        else
        {
            $(".dailysalary").show();
            $(".actualbasic").hide();
            $(".grossallowance").hide();
        }



    })
</script>
<script>
 $(".monthsalaryname").hide();
    $(".datesalaryname").hide();
    $("#customsalaryperson").hide();
    $("#monthlysalaryworker").hide();
</script>
<script>
    // $(".attendancefilter").change(function(){

        $(document).on('click','.salarygenerate',function(){

        var getmonthyear = $(".monthyear").val();

        if(getmonthyear)
        {
            $.ajax({
        url: "/salarygenerate",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            getmonthyear: getmonthyear,
        },
        success: function(response) {
           alert("salary Generated");
           $(".monthsalaryname").show();
        //    $('#generatedemployee').find('option').remove().end();
           $.each(response,function(key, item){
                    $("#generatedemployee").append(
                        '<option value="'+item.emp_id+'">'+item.emp_id+' | '+item.name+'</option>'
                    )
                    });
        }
        });
        }

    })
</script>

<script>

    $(".getsalaryemployee").click(function(){

        $("#customsalaryperson").hide();
        $("#monthlysalaryworker").show();
        var employeeid = $("#generatedemployee").val();
        var monthyear = $(".monthyear").val();

        if(employeeid != "")
        {
            $.ajax({
            url: "/salarygenerateemployee",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                employeeid: employeeid,
                monthyear: monthyear,
            },
            success: function(response) {

                // alert(response.monthyear);
                var image = "images/"+response.image;
                $(".month").val(response.monthyear);
                $("#empimg").attr('src',image);
                    $("#employeename").text(response.name);
                    $(".employeeid").val(response.emp_id);
                    $("#designation").text(response.designation);
                    $("#dateofjoining").text(response.doj);
                    $("#allowancetype").text(response.allowance_type);
                    $("#totaldays").val(response.Total_days);
                    $("#Present_days").val(response.Present_days);
                    $("#holidays").val(response.Holidays);
                    $("#weekoff").val(response.weekoff);
                    $("#salarydays").val(response.salary_days);
                    $("#actualbasic").val(response.Actual_basic);
                    $("#da").val(response.DA);
                    $("#basic").val(response.basic_salary);
                    $("#netpay").val(response.Net_pay);
                    $("#hra").val(response.HRA);
                    $("#wa").val(response.WA);
                    $(".bonus").val(response.bonus);
                    $("#othmisc").val(response.Misc_allow);
                    $("#otamt").val(response.OT_AMT);
                    $("#othrs").val(response.OT_HRS);
                    $("#grosscr").val(response.GROSS_CR);
                    $("#epf").val(response.EPF);
                    $("#esi").val(response.ESI);
                    $("#loandedn").val(response.LOANDEDN);
                    $("#advancededn").val(response.ADVANCE_DEDN);
                    $("#othmiscdedn").val(response.OTH_MISC_DEDN);
                    $("#latededn").val(response.LATE_DEDN);
                    $("#grosscr").val(response.GROSS_DR);
            }
            });
        }
        else
        {
            alert("Select Employee")
        }

    });
</script>

<script>


$('.presentday').keyup(function() {


var tdays=$(this).closest("tr").find(".totaldays").val();
var pdays=$(this).closest("tr").find(".presentday").val();
var hdays=$(this).closest("tr").find(".holiday").val();
var wdays=$(this).closest("tr").find(".weekoff").val();
var add=parseInt(pdays)+parseInt(hdays)+parseInt(wdays);
$(this).closest("tr").find(".salaryday").val(add);
var abasic=$(this).closest("tr").find(".actualbasic1").val();
var DA=$(this).closest("tr").find(".da").val();
//   alert(DA)
abasic=parseFloat(abasic)+parseFloat(DA);
var cal= (parseFloat(abasic)/parseFloat(tdays))*parseFloat(add);
cal=cal.toFixed(2);
$(this).closest("tr").find(".basicsalary").val(cal);

// $(".grosscr").val(cal);
// $(".grossdr").val(cal);


 // GROSS CR


  var hra=$(".hra").val();
  var wa=$(".wa").val();
  var misc=$(".misc").val();
  var amt=$(".amt").val();
  var hrs=$(".hrs").val();
  var bonus=$(".bonus").val();
  var total=parseFloat(hra)+parseFloat(wa)+parseFloat(misc)+parseFloat(amt)+parseFloat(hrs)+parseFloat(bonus);
  var grosscr=$(".basicsalary").val();
  grosscr=parseFloat(grosscr)+parseFloat(total);
  grosscr=grosscr.toFixed(2);
  $(".grosscr").val(grosscr);


 // GROSS DR

 var epf=0;
    epf=$(".epf1").val();
  var esi=$(".esi").val();
  var loan=$(".loan").val();
  var advance=$(".advance").val();
  var misc1=$(".misc1").val();
  var late=$(".late").val();
//   var unifromm=$(".uniform").val();


  var total=parseFloat(esi)+parseFloat(loan)+parseFloat(advance)+parseFloat(epf)+parseFloat(misc1)+parseFloat(late);


  var grossdr=$(".grosscr").val();
  grossdr=parseFloat(grossdr)-parseFloat(total);
  grossdr=grossdr.toFixed(2);
  $(".grossdr").val(grossdr);

  var nettotal=$(".grossdr").val();


$(this).closest("tr").find(".netsalary").val(nettotal);




});
  $('.holiday').keyup(function() {

var tdays=$(this).closest("tr").find(".totaldays").val();
var pdays=$(this).closest("tr").find(".presentday").val();
var hdays=$(this).closest("tr").find(".holiday").val();
var wdays=$(this).closest("tr").find(".weekoff").val();
var add=parseFloat(pdays)+parseFloat(hdays)+parseFloat(wdays);
$(this).closest("tr").find(".salaryday").val(add);
var abasic=$(this).closest("tr").find(".actualbasic1").val();
var DA=$(this).closest("tr").find(".da").val();
abasic=parseFloat(abasic)+parseFloat(DA);
cal=cal.toFixed(2);
var cal= (abasic/tdays)*parseFloat(add);
$(this).closest("tr").find(".basicsalary").val(cal);
$(this).closest("tr").find(".netsalary").val(cal);



// GROSS CR


  var hra=$(".hra").val();
  var wa=$(".wa").val();
  var misc=$(".misc").val();
  var amt=$(".amt").val();
  var hrs=$(".hrs").val();
  var bonus=$(".bonus").val();
  var total=parseFloat(hra)+parseFloat(wa)+parseFloat(misc)+parseFloat(amt)+parseFloat(hrs)+parseFloat(bonus);
  var grosscr=$(".basicsalary").val();
  grosscr=parseFloat(grosscr)+parseFloat(total);
  grosscr=grosscr.toFixed(2);
  $(".grosscr").val(grosscr);


 // GROSS DR

 var epf=0;
    epf=$(".epf1").val();
  var esi=$(".esi").val();
  var loan=$(".loan").val();
  var advance=$(".advance").val();
  var misc1=$(".misc1").val();
  var late=$(".late").val();
//   var unifromm=$(".uniform").val();

  var total=parseFloat(esi)+parseFloat(loan)+parseFloat(advance)+parseFloat(epf)+parseFloat(misc1)+parseFloat(late);

  // alert(total);
  var grossdr=$(".grosscr").val();
  grossdr=parseFloat(grossdr)-parseFloat(total);
  grossdr=grossdr.toFixed(2);
  $(".grossdr").val(grossdr);
  var nettotal=$(".grossdr").val();

  $(this).closest("tr").find(".netsalary").val(nettotal);

});
    $('.weekoff').keyup(function() {


var tdays=$(this).closest("tr").find(".totaldays").val();
var pdays=$(this).closest("tr").find(".presentday").val();
var hdays=$(this).closest("tr").find(".holiday").val();
var wdays=$(this).closest("tr").find(".weekoff").val();
var add=parseInt(pdays)+parseInt(hdays)+parseInt(wdays);
$(this).closest("tr").find(".salaryday").val(add);
var abasic=$(this).closest("tr").find(".actualbasic").val();
var DA=$(this).closest("tr").find(".da").val();
abasic=parseFloat(abasic)+parseFloat(DA);
cal=cal.toFixed(2);
var cal= (abasic/tdays)*parseFloat(add);
$(this).closest("tr").find(".basicsalary").val(cal);
$(this).closest("tr").find(".netsalary").val(cal);


      // GROSS CR


  var hra=$(".hra").val();
  var wa=$(".wa").val();
  var misc=$(".misc").val();
  var amt=$(".amt").val();
  var hrs=$(".hrs").val();
  var bonus=$(".bonus").val();
  var total=parseFloat(hra)+parseFloat(wa)+parseFloat(misc)+parseFloat(amt)+parseFloat(hrs)+parseFloat(bonus);

  var grosscr=$(".basicsalary").val();
  grosscr=parseFloat(grosscr)+parseFloat(total);
  grosscr=grosscr.toFixed(2);
  $(".grosscr").val(grosscr);


 // GROSS DR

 var epf=0;
    epf=$(".epf1").val();
  var esi=$(".esi").val();
  var loan=$(".loan").val();
  var advance=$(".advance").val();
  var misc1=$(".misc1").val();
  var late=$(".late").val();
//   var unifromm=$(".uniform").val();

  var total=parseFloat(esi)+parseFloat(loan)+parseFloat(advance)+parseFloat(epf)+parseFloat(misc1)+parseFloat(late);

  // alert(total);
  var grossdr=$(".grosscr").val();
  grossdr=parseFloat(grossdr)-parseFloat(total);
  grossdr=grossdr.toFixed(2);
  $(".grossdr").val(grossdr);

   var nettotal=$(".grossdr").val();

   $(this).closest("tr").find(".netsalary").val(nettotal);

});



</script>

<script>
     $(".hra, .wa, .misc, .amt, .hrs").keyup(function(){
    var hra=$(this).closest("tr").find(".hra").val();
    var wa=$(this).closest("tr").find(".wa").val();
    var misc=$(this).closest("tr").find(".misc").val();
    var amt=$(this).closest("tr").find(".amt").val();
    var hrs=$(this).closest("tr").find(".hrs").val();
    var bonus=$(this).closest("tr").find(".bonus").val();
    var total=parseFloat(hra)+parseFloat(wa)+parseFloat(misc)+parseFloat(amt)+parseFloat(hrs)+parseFloat(bonus);
    var grosscr=$(".basicsalary").val();
    grosscr=parseFloat(grosscr)+parseFloat(total);
    grosscr=grosscr.toFixed(2);
    $(this).closest("tr").find(".grosscr").val(grosscr);


    // GROSS DR
    var epf=0;
    epf=$(".epf1").val();
    var esi=$(".esi").val();
    var loan=$(".loan").val();
    var advance=$(".advance").val();
    var misc1=$(".misc1").val();
    var late=$(".late").val();
    // var unifromm=$(".uniform").val();
    // var otherdedn=$(".otherdedn").val();
    var total=parseFloat(esi)+parseFloat(loan)+parseFloat(advance)+parseFloat(epf)+parseFloat(misc1)+parseFloat(late);

    // alert(total);
    var grossdr=$(".grosscr").val();

    grossdr=parseFloat(grossdr)-parseFloat(total);
    grossdr=grossdr.toFixed(2);
    $(".grossdr").val(grossdr);
    var nettotal=$(".grossdr").val();
    $(".netsalary").val(nettotal);
});
</script>

<script type="text/javascript">
    $(".epf1, .esi, .loan, .advance, .misc1, .late").keyup(function(){

      // alert(uniform)
      var epf=0;
    epf=$(".epf1").val();
    //   var epf=$(this).closest("tr").find(".epf1").val();
      var esi=$(this).closest("tr").find(".esi").val();
      var loan=$(this).closest("tr").find(".loan").val();
      var advance=$(this).closest("tr").find(".advance").val();
      var misc1=$(this).closest("tr").find(".misc1").val();
      var late=$(this).closest("tr").find(".late").val();
    //   var otherdedn=$(this).closest("tr").find(".otherdedn").val();
    // alert(otherdedn)



     var total=parseFloat(esi)+parseFloat(loan)+parseFloat(advance)+parseFloat(epf)+parseFloat(misc1)+parseFloat(late);

        // alert(total)
      var grossdr=$(".grosscr").val();
      grossdr=parseFloat(grossdr)-parseFloat(total);
      grossdr=grossdr.toFixed(2);
      $(this).closest("tr").find(".grossdr").val(grossdr);

      var nettotal=$(".grossdr").val();
      $(".netsalary").val(nettotal);

  });


  </script>

<script>

    // $("#designationtype").change(function(){
        $(document).on('change', '#designationtype', function() {

        var designationtype = $(this).val();

        if(designationtype != "")
        {
            $.ajax({
            url: "/getpfdata",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                designationtype: designationtype,
            },
            success: function(response) {
                // alert(response.ot)
                $("#pfdata").val(response.pf);
                $("#otdata").val(response.ot);
                $("#salarytype").val(response.salarytype);

                var pfdata = $("#pfdata").val();
                var allowancetype = $("#allowancetype").val();
                // alert(allowancetype);
                if(pfdata == 'Yes')
                {
                    $("#allowancetype").val('WithPF')
                    $('#allowancetype').trigger('change');
                }
                else
                {
                    $("#allowancetype").val('WithoutPF')
                    $('#allowancetype').trigger('change');

                }

            }
        });
    }
    });
</script>
<script>

    $(".getcalanderdate").click(function()
    {
        var date = $(this).data('date');
        var workdays = $(this).data('workdays');

        $(".getdate").val(date);
        $(".getworkdays").val(workdays);
    })
</script>


<script>
    // $(".attendancefilter").change(function(){

        $(document).on('click','.customsalarygenerate',function(){
            // alert("working");
        var fromdate = $(".fromdate").val();
        var todate = $(".todate").val();
            // alert(fromdate);
            // alert(todate);
        if(fromdate)
        {
            $.ajax({
        url: "/customsalarygenerate",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            fromdate: fromdate,
            todate: todate,
        },
        success: function(response) {
           alert("salary Generated");
           $(".datesalaryname").show();
        //    alert(response);
        //    $('#generatedemployee').find('option').remove().end();
           $.each(response,function(key, item){

                    $("#generatedemployeecustom").append(
                        '<option value="'+item.emp_id+'">'+item.emp_id+' | '+item.name+'</option>'
                    )
                    });
        }
        });
        }

    })
</script>
<script>
    $(document).ready(function(){
        var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = yyyy + '-' + mm + '-' + dd;


        if(today)
        {
            $.ajax({
        url: "/getnotification",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            today: today,

        },
        success: function(response) {

            $.each(response,function(key, item){

                $(".notification-scroll").append(
                    '<div class="dropdown-item"> <div class="media server-log"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg> <div class="media-body"> <div class="data-info"><h6 class="">'+item.leadid+'</h6> <p class="">'+item.summery+'</p></div></div></div></div>'
                )
                });
        }
        });
        }
    });
</script>

<script>
    $(".customgetsalaryemployee").click(function(){

        $("#monthlysalaryworker").hide();
        $("#customsalaryperson").show();
        var employeeid = $("#generatedemployeecustom").val();
        var fromdate = $(".fromdate").val();
        var todate = $(".todate").val();

        if(fromdate)
        {
            $.ajax({
            url: "/customsalarygenerateemployee",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                employeeid: employeeid,
                fromdate: fromdate,
                todate: todate
            },
            success: function(response) {
                alert(response.from_date);
                // var image = "images/"+response.image;
                var fdate = response.from_date;
                var tdate = response.to_date;

                    var period = fdate+" - "+tdate;
                // $("#empimg").attr('src',image);
                $(".salaryperiod").val(period);
                    $(".employeename").val(response.name);
                    $(".employeeid").val(response.emp_id);
                    $(".designation").text(response.designation);
                    $(".daily_salary").val(response.daily_salary);
                    $(".salary_days").val(response.salary_days);
                    $(".Total_days").val(response.Total_days);
                    $(".netpay").val(response.Net_pay);
                    $(".decuction").val(response.LATE_DEDN);
            }
            });
        }
        else
        {
            alert("Select Employee")
        }

    });
</script>


