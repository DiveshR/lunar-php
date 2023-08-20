<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lunar\Base\Migration;

class CreateMediaVariantTable extends Migration
{
    public function up()
    {
        Schema::create($this->prefix.'media_product_variant', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_variant_id')->constrained($this->prefix.'product_variants')->onDelete('cascade');
            $table->boolean('primary')->default(false)->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->prefix.'media_product_variant');
    }
}
