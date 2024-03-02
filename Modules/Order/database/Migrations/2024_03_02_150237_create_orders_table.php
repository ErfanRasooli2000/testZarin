<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Order\Enums\OrderStatusEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer("count")->unsigned();
            $table->integer("followed")->default(0);
            $table->string("status")->default(OrderStatusEnum::Progress->value);
            $table->unsignedBigInteger("page_id");
            $table->unsignedBigInteger("created_by");
            $table->timestamps();

            $table->foreign("page_id")->references("id")->on("user_pages")->onDelete("cascade");
            $table->foreign("created_by")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
