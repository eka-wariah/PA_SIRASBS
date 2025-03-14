<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('rgn_id');
            $table->string('rgn_level');
            $table->BigInteger('rgn_number');
            $table->timestamps();
            $table->renameColumn('updated_at', 'rgn_updated_at');
            $table->renameColumn('created_at', 'rgn_created_at');
            $table->unsignedBigInteger('rgn_created_by')->unsigned()->nullable();
            $table->unsignedBigInteger('rgn_deleted_by')->unsigned()->nullable();
            $table->unsignedBigInteger('rgn_updated_by')->unsigned()->nullable();
      
            $table->softDeletes();
            $table->renameColumn('deleted_at', 'rgn_deleted_at');
            $table->string('rgn_sys_note')->nullable();


            $table->foreign('rgn_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('rgn_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('rgn_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
