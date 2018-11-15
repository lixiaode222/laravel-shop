<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    //可直接写入和修改的字段
    protected $fillable = ['amount'];

    public $timestamps = false;

    //模型关联 由订单项得到对应的用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //模型关联 由订单项得到对应的商品sku
    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }
}
