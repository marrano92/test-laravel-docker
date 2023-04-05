<?php

namespace App;

class Proxy {
    /**
     * @var Api
     */
    protected Api $api;

    /**
     * @var array
     */
    protected array $filters = [];

    /**
     * Proxy constructor.
     *
     * @param Api $api
     */
    public function __construct( Api $api ) {
        $this->api = $api;

        if ( ! empty( $_REQUEST ) ) {
            $this->setFilters( $_REQUEST );
        }
    }

    /**
     * @param array $filters
     *
     * @return void
     */
    private function setFilters( array $filters = [] ): void {
        $this->filters = $filters;
    }

    /**
     * Empty filters
     *
     * @return Proxy
     */
    public function resetFilters(): self {
        $this->filters = [];

        return $this;
    }

    /**
     * @param array $inputs
     *
     * @return array
     */
    public function validateInputs( array $inputs = [] ): array {
        foreach ( $inputs as $input ) {
            $response = $this->api->request( 'validate', [ 'input' => $input ] );

            $results[] = (object) [
                'status'  => $response->status(),
                'message' => $response->body()
            ];
        }

        return $results ?? [];
    }

    /**
     * @param array $inputs
     *
     * @return array
     */
    public function check_health(): array {
        $this->api->request( '_health' );

        return $this->api->request( '_health' );
    }
}
