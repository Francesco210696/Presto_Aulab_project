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
        Schema::table('categories', function (Blueprint $table) {
            $table->string('icon')->after('id');
        });
        $icons = ['directions_car', ' devices', 'kitchen', 'menu_book', 'sports_esports', 'fitness_center', 'cottage', 'smartphone', 'chair', 'local_florist'];
        $categorie = Category::all();
        $i = 0;
        foreach ($categorie as $categoria) {
            $categoria->icon = $icons[$i];
            $i++;
            $categoria->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
