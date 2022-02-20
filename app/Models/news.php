<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $table = 'news' ;

    protected $primarykey = 'id' ;

    public function categories()
    {
        return $this->belongsToMany(category::class);
    }  

    public function hascat($category) {
        if ($this->categories()->where('id', $category)->first())
        {
            return true;
        }
        return false;
    }
}
