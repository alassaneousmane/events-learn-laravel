<?php

namespace App\Helpers;
use App\Event;
use Carbon\Carbon;

class EventsHelper {

   
        public static function formatPrice(Event $event) {
            if($event->isFree()) {
                return '<strong>GRATUIT</strong>';
            } else {
                return sprintf("%.2f EUR", $event->price);
            }
        }
    
    
    
    
        public static function formatDate(Carbon $date) {
            return $date->format('F, j Y, H:i:s');
        }
    
}