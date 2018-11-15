<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //可直接写入和修改的字段
    protected $fillable = ['amount', 'price', 'rating', 'review', 'reviewed_at'];

    protected $dates = ['reviewed_at'];

    //表示这个模型没有创建和修改时间的字段
    public $timestamps = false;

    //模型关联 由这个订单项得到对应的商品
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //模型关联 由这个订单项得到对应的商品SKU
    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }

    //模型关联 由这个订单项得到对应的订单
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}