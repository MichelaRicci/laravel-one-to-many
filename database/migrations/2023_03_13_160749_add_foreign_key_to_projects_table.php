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
        Schema::table('projects', function (Blueprint $table) {
            //Definisco la colonna
            $table->unsignedBigInteger('type_id')->nullable()->after('id');

            //Definisco la relazione con la colonna
            $table->foreign('type_id')->refences('id')->on('types')->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->dropForeign('projects_type_id_foreign');

            $table->dropColumn('type_id');


        });
    }
};
