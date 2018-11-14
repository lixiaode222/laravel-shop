<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    //可直接写入和修改的字段
    protected $fillable = [
        'title', 'description', 'image', 'on_sale',
        'rating', 'sold_count', 'review_count', 'price'
    ];

    // 表明on_sale 是一个布尔类型的字段
    protected $casts = [
        'on_sale' => 'boolean',
    ];

    //模型关联  用商品得到它的所有skus
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    //得到商品图片的绝对路径
    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
    }

}
