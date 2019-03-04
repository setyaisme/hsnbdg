<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investasi_bulanans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marketing_id');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->integer('akum_komisi');
            $table->integer('akum_point');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('investasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marketing_id');
            $table->integer('nasabah_id');
            $table->integer('tenor_id');
            $table->date('tgl_investasi');
            $table->integer('jml_investasi');
            $table->integer('kom_mk');
            $table->integer('point_mk');
            $table->integer('stat_investasi');
            $table->date('tgl_mul_tenor');
            $table->date('tgl_akhir_tenor');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('detail_investasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investasi_id');
            $table->integer('stat_invest_id');
            $table->integer('stat_invest_akhir_id');
            $table->date('tgl_perubahan');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('stat_invests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investasi_id');
            $table->integer('stat_inv');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('tenors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('periode');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('point_hitungs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tenor_id');
            $table->integer('min invest');
            $table->integer('point');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('gaji_marketings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marketing_id');
            $table->integer('nominal');
            $table->integer('periode_gaji');
            $table->integer('stat_transfer');
            $table->date('tgl_update');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('marketings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mk');
            $table->integer('jabatan_id');
            $table->integer('mk_parent_id');
            $table->integer('stat');
            $table->date('tgl_teregister');
            $table->integer('akumulasi_komisi');
            $table->integer('akumulasi_point');
            $table->integer('stat_aktif');
            $table->integer('nominal_gaji');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('nasabahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('no_ktp');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('history_jabatans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_aktif');
            $table->integer('marketing_id');
            $table->integer('jabatan_lama_id');
            $table->integer('jabatan_baru_id');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('jabatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
