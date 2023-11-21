<?php

use App\Models\AnoLectivoTransportePeriodo;
use App\Models\Estudante;
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
        Schema::create('estudante_ano_lectivo_transportes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Estudante::class, 'estudante_id')
                ->references('id')
                ->on('estudantes')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->bigInteger('ano_lectivo_transporte_periodo_id', false, true);


            $table->foreign('ano_lectivo_transporte_periodo_id','fk_3krmwekmewf')
                ->references('id')
                ->on('ano_lectivo_transporte_periodos')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudante_ano_lectivo_transportes');
    }
};
