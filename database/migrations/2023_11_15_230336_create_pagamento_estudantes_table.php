<?php

use App\Models\EstudanteAnoLectivoTransporte;
use App\Models\User;
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
        Schema::create('pagamento_estudantes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estudante_ano_lectivo_transporte_id', false, true);
            $table->foreign('estudante_ano_lectivo_transporte_id','fk_3in23n')
                ->references('id')
                ->on('estudante_ano_lectivo_transportes')
                ->cascadeOnUpdate();
            $table->date('data_pagamento');
            $table->double('quantia');
            $table->text('observacao')->nullable();
            $table->string('estado', 50);

            $table->foreignIdFor(User::class, 'user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagamento_estudantes');
    }
};
