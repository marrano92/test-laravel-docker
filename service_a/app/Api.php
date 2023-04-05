<?php

namespace App;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

abstract class Api {

    protected string $apiHost;

    /**
     * Headers
     *
     * @var array
     */
    protected array $headers = [];

    /**
     * Constructor
     *
     */
    public function __construct() {
        $this->setBaseUrl();

        return $this;
    }

    /**
     * @return void
     */
    abstract protected function setBaseUrl(): void;

    public function request( $endpoint, $queryParams = [] ): Response {
        $url     = "{$this->apiHost}/api/{$endpoint}";

        return Http::get( $url, $queryParams );
    }
}
