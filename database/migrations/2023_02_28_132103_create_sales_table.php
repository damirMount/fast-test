<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
    • Продажи – таблица, где будут записаны продажи квартир клиентам и условия на момент покупки квартиры. Включают
     * в себя следующие поля: Дата продажи, идентификатор клиента, идентификатор квартиры и цена на 1кв/м. 2б
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id');
            $table->bigInteger('apartment_id');
            $table->double('price')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
