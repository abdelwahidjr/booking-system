<?php

namespace App\Observers;

use App\Activity;
use App\Booking;
use Illuminate\Support\Carbon;
use Request;

class BookingObserver
{

    private function activity(Booking $booking)
    {
        Activity::create([
            'login_at'   => Carbon::now()->toDateTimeString(),
            'ip_address' => Request::ip(),
            'user_id'    => $booking->user_id,
            'booking_id' => $booking->id,
        ]);
    }

    /**
     * Handle the booking "created" event.
     *
     * @param \App\Booking $booking
     * @return void
     */
    public function created(Booking $booking)
    {
        $this->activity($booking);
    }

    /**
     * Handle the booking "updated" event.
     *
     * @param \App\Booking $booking
     * @return void
     */
    public function updated(Booking $booking)
    {
        $this->activity($booking);

    }

    /**
     * Handle the booking "deleted" event.
     *
     * @param \App\Booking $booking
     * @return void
     */
    public function deleted(Booking $booking)
    {
        $this->activity($booking);

    }

    /**
     * Handle the booking "restored" event.
     *
     * @param \App\Booking $booking
     * @return void
     */
    public function restored(Booking $booking)
    {
        $this->activity($booking);

    }

    /**
     * Handle the booking "force deleted" event.
     *
     * @param \App\Booking $booking
     * @return void
     */
    public function forceDeleted(Booking $booking)
    {
        $this->activity($booking);

    }
}
