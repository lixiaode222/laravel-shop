<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\InternalException;

class ProductSku extends Model
{
    //可直接写入和修改的字段
    protected $fillable = ['title', 'description', 'price', 'stock'];

    //模型关联 由sku得到它对应的商品
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //减少该商品SKU的库存
    public function decreaseStock($amount)
    {
        if ($amount < 0) {
            throw new InternalException('减库存不可小于0');
        }

        return $this->newQuery()->where('id', $this->id)->where('stock', '>=', $amount)->decrement('stock', $amount);
    }

    //增加该商品SKU的库存
    public function addStock($amount)
    {
        if ($amount < 0) {
            throw new InternalException('加库存不可小于0');
        }
        $this->increment('stock', $amount);
    }
}
