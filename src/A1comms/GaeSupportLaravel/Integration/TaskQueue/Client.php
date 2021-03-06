<?php

namespace A1comms\GaeSupportLaravel\Integration\TaskQueue;

use Illuminate\Support\Facades\Log;
use Google\Cloud\Core\Compute\Metadata;
use Google\Cloud\Tasks\V2beta3\CloudTasksClient;

class Client
{
    private $client;
    private $project;
    private $location;

    private static $myInstance = null;

    public static function instance() {
        if (is_null(self::$myInstance)) {
            self::$myInstance = new Client();
        }

        return self::$myInstance;
    }

    public function __construct() {
        $this->client = new CloudTasksClient();
        $this->project = gae_project();
        $this->location = $this->fetchLocation();
    }

    public function getClient() {
        return $this->client;
    }

    public function getQueueName($queue) {
        return $this->client->queueName($this->project, $this->location, $queue);
    }

    public function getLocation() {
        return $this->location;
    }

    private function fetchLocation() {
        $metadata = new Metadata();
        $zone = $metadata->get('instance/zone');
        //Log::info($zone);
        $zone = explode("/", $zone);
        //Log::info($zone);
        $zone = array_pop($zone);
        //Log::info($zone);

        switch ($zone) {
            case "eu2":
                return "europe-west1";
                break;
            default:
                throw new Exception("Unknown Region");
                break;
        }
    }
}