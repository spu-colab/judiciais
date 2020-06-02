<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSetor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('spusc-admin.setor')->where('codigo',23)->update(['descricao' =>'SPU-SC-COORD']);
        DB::table('spusc-admin.setor')->where('codigo',5)->update(['descricao' =>'SPU-SC']);
        DB::table('spusc-admin.setor')->where('codigo',22)->update(['descricao' =>'SPU-SC-NUDEM']);
        DB::table('spusc-admin.setor')->where('codigo',20)->update(['descricao' =>'SPU-SC-NUDEPU']);
        DB::table('spusc-admin.setor')->where('codigo',27)->update(['descricao' =>'SPU-SC-NUFIS']);
        DB::table('spusc-admin.setor')->where('codigo',29)->update(['descricao' =>'SPU-SC-NUGEO']);
        DB::table('spusc-admin.setor')->where('codigo',18)->update(['descricao' =>'SPU-SC-NUGES']);
        DB::table('spusc-admin.setor')->where('codigo',28)->update(['descricao' =>'SPU-SC-NUINC']);
        DB::table('spusc-admin.setor')->where('codigo',21)->update(['descricao' =>'SPU-SC-NUJUC']);
        DB::table('spusc-admin.setor')->where('codigo',25)->update(['descricao' =>'SPU-SC-NUPRIV']);
        DB::table('spusc-admin.setor')->where('codigo',24)->update(['descricao' =>'SPU-SC-NUREF']);
        DB::table('spusc-admin.setor')->where('codigo',19)->update(['descricao' =>'SPU-SC-NUREP']);
        DB::table('spusc-admin.setor')->where('codigo',26)->update(['descricao' =>'SPU-SC-NUSUC']);
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