<?php
namespace Braspag\API;

/**
 * Class Environment
 * @package Braspag\API
 */
class Environment
{
    /** @var string $api */
    private $api;

    /** @var string $api */
    private $apiQuery;

    /**
     * Environment constructor.
     * @param $api
     * @param $apiQuery
     */
    private function __construct($api, $apiQuery)
    {
        $this->api = $api;
        $this->apiQuery = $apiQuery;
    }

    /**
     * @return Environment with sandbox url
     */
    public static function sandbox()
    {
        $api = 'https://apisandbox.braspag.com.br/';
        $apiQuery = 'https://apiquerysandbox.braspag.com.br/';

        return new Environment($api, $apiQuery);
    }

    /**
     * @return Environment with homolog url
     */
    public static function homolog()
    {
        $api = 'https://apihomolog.braspag.com.br/';
        $apiQuery = 'https://apiqueryhomolog.braspag.com.br/';

        return new Environment($api, $apiQuery);
    }

    /**
     * @return Environment with production url
     */
    public static function production()
    {
        $api = 'https://api.braspag.com.br/';
        $apiQuery = 'https://apiquery.braspag.com.br/';

        return new Environment($api, $apiQuery);
    }

    /**
     * Gets the environment's Api URL
     *
     * @return mixed the Api URL
     */
    public function getApiUrl()
    {
        return $this->api;
    }

    /**
     * Gets the environment's Api Query URL
     *
     * @return mixed the Api Query URL
     */
    public function getApiQueryURL()
    {
        return $this->apiQuery;
    }
}
