<?php

use App\Models\AnoLectivoTransportePeriodoMensalidade;
use App\Models\PagamentoEstudante;
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
        Schema::create('pagamento_estudante_ano_lectivo_transporte_mensalidades', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('pagamento_estudante_id',false,true);

            $table->foreign('pagamento_estudante_id','fk_32m4ds')
                ->references('id')
                ->on('pagamento_estudantes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->bigInteger('ano_lectivo_transporte_periodo_mensalidade_id', false, true);

            $table->foreign('ano_lectivo_transporte_periodo_mensalidade_id', 'fk_3ij2rin2')
                ->references('id')
                ->on('ano_lectivo_transporte_periodo_mensalidades')
                ->cascadeOnUpdate();

            $table->double('valor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagamento_estudante_ano_lectivo_transporte_mensalidades');
    }
};
