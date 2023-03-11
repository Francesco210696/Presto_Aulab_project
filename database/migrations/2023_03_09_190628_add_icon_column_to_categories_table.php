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
        $icons = ['fa-car', ' fa-laptop', 'fa-microchip', 'fa-book', 'fa-gamepad', 'fa-futbol-o', 'fa-home', 'fa-mobile', 'fa-bath', 'fa-leaf'];
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
