<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class UpdatePatientTable
 */
class UpdatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::rename('patient', 'patients');

        Schema::table('patients', function (Blueprint $table) {
            $table->renameColumn('MEDREC_ID', 'id');
            $table->renameColumn('PATIENT_NAME', 'name');
        });

        Schema::table('patients', function (Blueprint $table) {
            $table->string('id')->primary()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::rename('patients', 'patient');

        Schema::table('patient', function (Blueprint $table) {
            $table->dropPrimary('id');
        });

        Schema::table('patient', function (Blueprint $table) {
            $table->renameColumn('id', 'MEDREC_ID');
            $table->renameColumn('name', 'PATIENT_NAME');
        });
    }
}
