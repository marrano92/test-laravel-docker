<?php

namespace App\Api;

use App\Api;

class ServiceBApi extends Api {

	/**
	 * @inheritDoc
	 */
	protected function setBaseUrl(): void {
        $this->apiHost = config( 'app.service_b_host' );
	}
}
