<?php

namespace App\Listeners;

use App\Mail\NewCategoryMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class CategoryCreatedConfirmationEmail
{

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        //
        $category = $event->category;
        Mail::to('mstrzygowski@gmail.com')->send(new NewCategoryMail($category));

    }
}
