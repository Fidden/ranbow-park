<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use App\Notifications\OrderNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * @param OrderStoreRequest $request
     * @return RedirectResponse
     */
    public function store(OrderStoreRequest $request): RedirectResponse
    {
        /* @var Order $order */
        $order = Order::query()
            ->create([
                ...$request->validated(),
                'hash' => Str::uuid()
            ]);

        $order->notify(new OrderNotification($order->hash));

        return to_route('home');
    }
}
