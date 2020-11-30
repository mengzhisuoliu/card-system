<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; use Illuminate\Support\Facades\DB; class CreateProductsTable extends Migration { public function up() { Schema::create('products', function (Blueprint $sp8b9ab3) { $sp8b9ab3->increments('id'); $sp8b9ab3->integer('user_id')->index(); $sp8b9ab3->integer('category_id')->index(); $sp8b9ab3->string('name'); $sp8b9ab3->longText('description'); $sp8b9ab3->integer('sort')->default(1000); $sp8b9ab3->integer('buy_min')->default(1); $sp8b9ab3->integer('buy_max')->default(10); $sp8b9ab3->integer('count_sold')->default(0); $sp8b9ab3->integer('count_all')->default(0); $sp8b9ab3->integer('count_warn')->default(0); $sp8b9ab3->boolean('support_coupon')->default(false); $sp8b9ab3->string('password')->nullable(); $sp8b9ab3->boolean('password_open')->default(false); $sp8b9ab3->integer('cost')->default(0); $sp8b9ab3->integer('price'); $sp8b9ab3->text('price_whole')->nullable(); $sp8b9ab3->text('instructions')->nullable(); $sp8b9ab3->text('fields')->nullable(); $sp8b9ab3->boolean('enabled'); $sp8b9ab3->tinyInteger('inventory')->default(\App\User::INVENTORY_AUTO); $sp8b9ab3->tinyInteger('fee_type')->default(\App\User::FEE_TYPE_AUTO); $sp8b9ab3->tinyInteger('delivery')->default(\App\Product::DELIVERY_AUTO); $sp8b9ab3->timestamps(); }); } public function down() { Schema::dropIfExists('goods'); } }