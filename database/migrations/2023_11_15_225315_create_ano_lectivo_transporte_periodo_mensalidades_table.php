<?php

use App\Models\AnoLectivoMensalidade;
use App\Models\AnoLectivoTransportePeriodo;
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
        Schema::create('ano_lectivo_transporte_periodo_mensalidades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ano_lectivo_periodo_transporte_id', false, true);

            $table->foreign('ano_lectivo_periodo_transporte_id', 'fk_erme')
                ->references('id')
                ->on('ano_lectivo_transporte_periodos')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->bigInteger('ano_lectivo_mensalidade_id', false, true);
            
            $table->foreign('ano_lectivo_mensalidade_id', 'fk_eirsdf')
                ->references('id')
                ->on('ano_lectivo_mensalidades')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->double('valor')->min(0);

            $table->date('data_limite')->nullable();

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ano_lectivo_transporte_periodo_mensalidades');
    }
};
