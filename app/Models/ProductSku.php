<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    //可直接写入和修改的字段
    protected $fillable = ['title', 'description', 'price', 'stock'];

    //模型关联 由sku得到它对应的商品
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
