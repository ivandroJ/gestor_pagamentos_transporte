<?php

use App\Models\AnoLectivo;
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
        Schema::create('ano_lectivo_periodos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AnoLectivo::class, 'ano_lectivo_id')
                ->references('id')
                ->on('ano_lectivos')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->string('designacao', 150);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ano_lectivo_periodos');
    }
};
