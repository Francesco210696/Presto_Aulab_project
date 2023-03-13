<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $categories = [
            __('ui.motori'),
            __('ui.Informatica'),
            __('ui.Elettrodomestici'),
            __('ui.Giardino'),
            __('ui.Arredamento'),
            __('ui.Telefoni'),
            __('ui.Immobili'),
            __('ui.Sport'),
            __('ui.Giochi'),
            __('ui.motori'),
        ];


        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
