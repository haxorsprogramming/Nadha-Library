<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_profile', function (Blueprint $table) {
            $table -> id();
            $table -> char('username', 50);
            $table -> char('nama_lengkap', 200);
            $table -> char('tempat_lahir', 200);
            $table -> date('tanggal_lahir');
            $table -> enum('jenis_kelamin', ['l', 'p']);
            $table -> char('nomor_anggota', 100);
            $table -> char('email', 100);
            $table -> char('nomor_handphone', 100);
            $table -> char('alamat_lengkap', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_profile');
    }
}
