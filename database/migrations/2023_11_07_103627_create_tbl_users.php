<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name',200);
            $table->string('user_first_name',200);
            $table->string('user_last_name',200);
            $table->string('user_email',200);
            $table->string('user_phone',20);
            $table->enum('user_gender', ["M","F","O"]);
            $table->text('user_address')->nullable();
            $table->date('user_dob');
            $table->string('user_password')->nullable();
            $table->string('user_role')->nullable();
            $table->boolean('user_status')->default(1);
            $table->integer('user_created_by')->nullable();
            $table->integer('user_updated_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users');
    }
}
