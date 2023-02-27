<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['title', 'description', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

<<<<<<< HEAD
    public function setAccepted($value)

    {
        $this->is_accepted=$value;
        $this->save;
        return true;

    }

    public static function  toBeRevisionedCount()
    {
        return Announcement::where ('is_accepted', null)->count();
=======
    public function toSearchableArray(){
        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $category,
        ];
        return $array;
>>>>>>> a9f7ca10a4a01fc6d521ede9f6f87e64d50332a0
    }
}
