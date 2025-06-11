<?php

use App\Enums\FooterItemType;
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
        Schema::create('footer_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('footer_section_id')->constrained('footer_sections')->onDelete('cascade');

    $table->enum('type', array_column(FooterItemType::cases(), 'value'))->default(FooterItemType::Text->value);
    $table->string('label')->nullable();
    $table->text('description')->nullable();
    $table->string('url')->nullable();
    $table->boolean('is_clickable')->default(false);
    $table->string('icon')->nullable();
    $table->string('image')->nullable();
    $table->integer('sort_order')->default(0);
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_items');
    }
};
