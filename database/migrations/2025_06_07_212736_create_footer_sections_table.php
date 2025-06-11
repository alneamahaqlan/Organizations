<?php

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
        Schema::create('footer_sections', function (Blueprint $table) {
             $table->id();
    $table->foreignId('footer_id')->constrained('footers')->onDelete('cascade');
    $table->string('name');         // e.g. Company, Quick Links
    $table->string('slug');
      $table->enum('type', array_column(\App\Enums\FooterItemType::cases(), 'value'))
          ->default(\App\Enums\FooterItemType::Text->value);        // e.g. company, quick-links
    $table->integer('sort_order')->default(0);
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_sections');
    }
};
