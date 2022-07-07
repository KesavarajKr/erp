<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->String('emp_id');
            $table->String('name');
            $table->String('image');
            $table->String('dob');
            $table->String('education');
            $table->String('mobile_num');
            $table->String('e_mail');
            $table->String('gender');
            $table->String('doj');
            $table->String('designation');
            $table->String('blood_group');
            $table->String('minor_major');
            $table->String('temp_addr');
            $table->String('perm_addr');
            $table->String('bank_name');
            $table->String('branch_name');
            $table->String('accountholder_name');
            $table->String('account_num');
            $table->String('ifsc_code');
            $table->String('aadhar_document');
            $table->String('pan_document');
            $table->String('voterid_document');
            $table->String('aadhar_num');
            $table->String('pan_num');
            $table->String('voterid_num');
            $table->String('allowance_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
