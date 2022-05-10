<?php

namespace App\Listeners;

use App\Events\StockUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewProductStock
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\StockUpdated  $event
     * @return void
     */
    public function handle(StockUpdated $event)
    {
    }
}
