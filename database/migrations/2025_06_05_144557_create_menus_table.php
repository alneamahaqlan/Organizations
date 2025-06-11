<?php

use App\Enums\PageStatus;
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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url')->nullable();
              $table->foreignId('page_id')->nullable()->constrained('pages');
            $table->string('icon')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained('menus');
            $table->integer('sort_order')->default(0);
            $table->enum('status', PageStatus::values())->default(PageStatus::Draft->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};