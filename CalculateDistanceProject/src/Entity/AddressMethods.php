<?php
namespace App\Entity;
class AddressMethods {
    public function getDataFromIpAddress($api_key, $api_url) {
        $url = "{$api_url}?apiKey={$api_key}";
        $url_content = file_get_contents($url);
        $jsonArray = json_decode($url_content, true);
        $ip = $jsonArray["ip"];
        $latitude = $jsonArray["location"]["lat"];
        $longitude = $jsonArray["location"]["lng"];
        $country = $jsonArray["location"]["country"];
        $region = $jsonArray["location"]["region"];
        $city = $jsonArray["location"]["city"];
        $postalCode = $jsonArray["location"]["postalCode"];
        $ipPostalAddress = array('ip' => $ip, 'country' => $country, 'region' => $region, 'city' => $city, 'postalCode' => $postalCode);
        return [$latitude, $longitude, $ipPostalAddress];
    }
    public function getDataFromPostalAddress($api_url, $street, $zipcode, $city, $country) {
        $adder = urlencode($street . ' ' . $zipcode . ' ' . $city . ' ' . $country);
        $url = "$api_url.$adder&format=json&limit=1";
        $url_content = file_get_contents($url);
        $jsonArray = json_decode($url_content, true);
        $longitude = $jsonArray["results"][0]["locations"][0]["latLng"]["lng"];
        $latitude = $jsonArray["results"][0]["locations"][0]["latLng"]["lat"];
        return [$latitude, $longitude];
    }
    public function getDistanceBetweenToAddresses($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000) {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);
        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;
        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        $kmDistance = ($angle * $earthRadius) / 1000;
        return $kmDistance;
    }
}
?>