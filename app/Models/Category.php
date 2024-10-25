<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * Get the list of categories.
     *
     * @return array
     */
    public static function getCategories()
    {
        return [
            (object) ['id' => 1, 'name' => 'Soul'],
            (object) ['id' => 2, 'name' => 'Ambient'],
            (object) ['id' => 3, 'name' => 'Pop'],
            (object) ['id' => 4, 'name' => 'Rap'],
            (object) ['id' => 5, 'name' => 'Funk'],
            (object) ['id' => 6, 'name' => 'Rock'],
            (object) ['id' => 7, 'name' => 'Reggae / Dub'],
            (object) ['id' => 8, 'name' => 'Techno'],
            (object) ['id' => 9, 'name' => 'Electro'],
        ];
    }

    public function getId()
    {
        $categories = self::getCategories();
        $randomCategory = $categories[array_rand($categories)];
        return $randomCategory->id;
    }

    public function getName($id)
    {
        $categories = self::getCategories();
        foreach ($categories as $category) {
            if ($category->id == $id) {
                return $category->name;
            }
        }
        return null;
    }

    public function getAllCategories(): HasMany
    {
        return $this->hasMany(Track::class, 'id_category');
    }
}
