<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class UpdateDiseaseTable
 */
class UpdateDiseaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::rename('disease', 'diseases');

        Schema::table('diseases', function (Blueprint $table) {
            $table->renameColumn('MEDREC_ID', 'patient_id');
            $table->renameColumn('ICD', 'international_classification_of_diseases');
        });

        Schema::table('diseases', function (Blueprint $table) {
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
        Schema::rename('diseases', 'disease');

        Schema::dropIfExists('disease');
    }
}
