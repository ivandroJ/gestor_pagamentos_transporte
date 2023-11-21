<?php

use App\Models\AnoLectivoPeriodo;
use App\Models\Transporte;
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
        Schema::create('ano_lectivo_transporte_periodos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AnoLectivoPeriodo::class, 'ano_lectivo_periodo_id')
                ->references('id')
                ->on('ano_lectivo_periodos')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignIdFor(Transporte::class, 'transporte_id')
                ->references('id')
                ->on('transportes')
                ->cascadeOnUpdate();

            $table->time('inicio_recolha')->nullable();
            $table->time('inicio_distribuicao')->nullable();
            $table->double('valor_mensalidade')->min(0);


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ano_lectivo_transporte_periodos');
    }
};
