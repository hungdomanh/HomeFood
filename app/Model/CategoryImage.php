<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryImage extends Model
{
    protected $table = 'category_images';
    protected $fillable = [
        'category_id',
        'link',
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
