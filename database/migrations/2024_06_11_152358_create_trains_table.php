<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Traduzione trains (
     *                   `id` Usigned BIGINT NOT NULL AUTO_INCREMENT
     *                   `azienda` VARCHAR(255) NOT NULL, non sarà mai vuoto
     *                   `codice_treno` VARCHAR(255) NOT NULL, non sarà mai vuoto e sarà anche unico
     *                   `stazione_di_partenza` VARCHAR(255) NOT NULL, non sarà mai vuoto
     *                   `stazione_di_arrivo` VARCHAR(255) NOT NULL, non sarà mai vuoto
     *                   `data_di_partenza` TIMESTAMP NOT NULL, tiene conto del fuso orario
     *                   `data_di_arrivo` TIMESTAMP  NULL, tiene conto del fuso orario può contenere un valore null visto che non sappiamo sempre con certezza l'orario d'arrivo
     *                   `in_orario` TINYINT(1), di default true dunque 1
     *                   `cancellato`TINYINT(0), di default false dunque 0
     *                 )
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('codice_treno')->uniqid();
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->dateTimeTz('orario_di_partenza', precision: 0);
            $table->dateTimeTz('orario_di_arrivo', precision: 0)->nullable();
            $table->integer('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
