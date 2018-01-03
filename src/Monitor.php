<?php
/**
 * Created by PhpStorm.
 * User: Bennet
 * Date: 1/1/2018
 * Time: 11:24 PM
 */

namespace UptimeRobot;

class Monitor {

    private $id;


    private $friendly_name;
    private $url;
    private $type;
    private $sub_type;
    private $keyword_type;
    private $keyword_value;
    private $http_username;
    private $http_password;
    private $port;
    private $interval;
    private $status;
    private $all_time_uptime_ratio;
    private $custom_uptime_ratios;
    private $custom_uptime_ranges;
    private $average_respone_time;

    const PAUSED = 2;
    const NOT_CHECKED_YET = 1;
    const UP = 2;
    const SEEMS_DOWN = 8;
    const DOWN = 9;

    public function __construct($data) {
        $this->id = $data->id;
        $this->friendly_name = $data->friendly_name;
        $this->url = $data->url;
        $this->type = $data->type;
        $this->sub_type = $data->sub_type;
        $this->keyword_type = $data->keyword_type;
        $this->keyword_value = $data->keyword_value;
        $this->http_username = $data->http_username;
        $this->http_password = $data->http_password;
        $this->port = $data->port;
        $this->interval = $data->interval;
        $this->status = $data->status;
        $this->all_time_uptime_ratio = isset($data->all_time_uptime_ration) ? $data->all_time_uptime_ration : null;
        $this->custom_uptime_ratios = isset($data->custom_uptime_ratios) ? $data->custom_uptime_ratios : null;
        $this->custom_uptime_ranges = isset($data->custom_uptime_ranges) ? $data->custom_uptime_ranges : null;
        $this->average_respone_time = isset($data->average_respone_time) ? $data->average_respone_time : null;
    }

    /**
     * @return mixed
     */
    public function getID() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFriendlyName() {
        return $this->friendly_name;
    }

    /**
     * @return mixed
     */
    public function getURL() {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getSubType() {
        return $this->sub_type;
    }

    /**
     * @return mixed
     */
    public function getKeywordType() {
        return $this->keyword_type;
    }

    /**
     * @return mixed
     */
    public function getKeywordValue() {
        return $this->keyword_value;
    }

    /**
     * @return mixed
     */
    public function getHttpUsername() {
        return $this->http_username;
    }

    /**
     * @return mixed
     */
    public function getHttpPassword() {
        return $this->http_password;
    }

    /**
     * @return mixed
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * @return mixed
     */
    public function getInterval() {
        return $this->interval;
    }

    /**
     * @return mixed
     */
    public function getStatus() {
        $reflect = new \ReflectionClass('\UptimeRobot\Monitor');
        $constants = $reflect->getConstants();

        $constName = null;
        foreach ( $constants as $name => $value )
        {
            if ( $value == $this->status )
            {
                $constName = $name;
                break;
            }
        }

        return $constName;
    }

    /**
     * @return mixed
     */
    public function getAllTimeUptimeRatio() {
        return $this->all_time_uptime_ratio;
    }

    /**
     * @return mixed
     */
    public function getCustomUptimeRatios() {
        return $this->custom_uptime_ratios;
    }

    /**
     * @return mixed
     */
    public function getCustomUptimeRanges() {
        return $this->custom_uptime_ranges;
    }

    /**
     * @return mixed
     */
    public function getAverageResponeTime() {
        return $this->average_respone_time;
    }
}
