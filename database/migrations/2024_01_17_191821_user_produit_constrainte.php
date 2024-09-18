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
        Schema::table('achats', function (Blueprint $table) {
            //
            $table->foreign('user_id')->references('id')->on('users') ->onDelete('restrict'); 
            $table->foreign('produits_id')->references('id')->on('produits')->onDelete('restrict'); 
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('achats', function (Blueprint $table) {
            //
            $table->dropForeign('user_id');
            $table->dropForeign('produits_id');
            Schema::disableForeignKeyConstraints();
        });
    }
};
