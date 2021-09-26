<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class UpdateMedicationTable
 */
class UpdateMedicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::rename('medication', 'medications');

        Schema::table('medications', function (Blueprint $table) {
            $table->renameColumn('MEDREC_ID', 'patient_id');
            $table->renameColumn('NDC', 'national_drug_code');
        });

        Schema::table('medications', function (Blueprint $table) {
            $table->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::rename('medications', 'medication');

        Schema::dropIfExists('medication');
    }
}
