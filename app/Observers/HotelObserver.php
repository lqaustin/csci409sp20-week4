<?php

namespace App\Observers;

use App\Models\Hotel;

class HotelObserver
{
    /**
     * Handle the hotel "created" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function created(Hotel $hotel)
    {
        //
    }

    public function creating(Hotel $hotel)
    {
        $api_key = '0cbe3a50a144babb29b57386287f6de2';
        $url = 'http://api.positionstack.com/v1/forward?';
        $hotel_address = array(
            'location' => $hotel->address_1,
            'city' => $hotel->city,
            'state' => $hotel->state,
            'zip' => $hotel->zip
        );
        $params = array(
            'access_key' => $api_key,
            'query' => '$hotel_address->location'.' $hotel_address->city'.' $hotel_address->state'.' $hotel_address->zip',
            'output' => 'json',
            'limit' => 1
        );
        $url_params = http_build_query($params);
        $response = file_get_contents($url.$url_params);
        $coordinates = json_decode($response, true);
        print_r($coordinates);
        foreach ($coordinates as $geo) {
            $hotel->lat = $geo[0]['latitude'];
            $hotel->lon = $geo[0]['longitude'];
            echo "Lat: ". $hotel->lat = $geo[0]['latitude'] . ", Lon: ".$hotel->lon = $geo[0]['longitude'];
        }
    }

    /**
     * Handle the hotel "updated" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function updated(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function deleted(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "restored" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function restored(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "force deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function forceDeleted(Hotel $hotel)
    {
        //
    }
}
