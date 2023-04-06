Laravel Microservices Project
=============================

This project is a Laravel-based microservices application that allows users to perform various actions through different microservices.

Prerequisites
-------------

Before running this project, you will need to have the following installed on your local machine:

-   [Docker](https://www.docker.com/products/docker-desktop) V23.0 or later
-   [Docker Compose](https://docs.docker.com/compose/install/) V1.2 or later
-   [composer](https://getcomposer.org/) V2.0 or later

Running the Microservices with Sail Command
-------------------------------------------

1.  Follow these steps to run locally the application:
-   `git clone https://github.com/marrano92/test-laravel-docker`
-  Navigate to the service_a directory:
- `composer install`
- `./vendor/bin/sail up -d`
-  Navigate to the service_b directory:
- `composer install`
- `./vendor/bin/sail up -d`

2.  Access the application in your web browser at <http://localhost:81/api/validation/start> to start the validation.

