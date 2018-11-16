<?php

namespace App\Providers;

use App\Listeners\RegisteredListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use App\Events\OrderPaid;
use App\Listeners\UpdateProductSoldCount;
use App\Listeners\SendOrderPaidMail;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        //注册后发送邮箱验证
        Registered::class => [
            RegisteredListener::class,
        ],

        //支付后触发的事件
        OrderPaid::class => [
            //更新商品销量
            UpdateProductSoldCount::class,
            //发送邮件提醒已经完成支付
            SendOrderPaidMail::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
