<?php
/**
 * Created by PhpStorm.
 * User: Bennet
 * Date: 1/1/2018
 * Time: 11:24 PM
 */

namespace UptimeRobot;

class UptimeRobot {

    private $apik;
    private $format;

    const JSON = 'json';
    const XML = 'xml';

    public function __construct($apikey) {
        $this->apik = $apikey;
    }

    public function request($query) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.uptimerobot.com/v2/$query",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "api_key=$this->apik&format=$this->format",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
    public function setFormat($newFormat) {
        $this->format = $newFormat;
    }
}
