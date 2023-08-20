<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lunar\Base\Migration;

class CreateCustomerCustomerGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->prefix.'customer_customer_group', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained($this->prefix.'customers');
            $table->foreignId('customer_group_id')->constrained($this->prefix.'customer_groups');
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
        Schema::dropIfExists($this->prefix.'customer_customer_group');
    }
}
