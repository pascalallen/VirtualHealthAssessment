<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Class InitializeFromSqlFile
 */
final class InitializeFromSqlFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        DB::unprepared(file_get_contents(__DIR__.'/../db.sql'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('disease');
        Schema::dropIfExists('medication');
        Schema::dropIfExists('patient');
    }
}
