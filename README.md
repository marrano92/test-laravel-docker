Laravel Microservices Project
=============================

This project is a Laravel-based microservices application that allows users to perform various actions through different microservices.

Prerequisites
-------------

Before running this project, you will need to have the following installed on your local machine:

-   [Docker](https://www.docker.com/products/docker-desktop)
-   [Docker Compose](https://docs.docker.com/compose/install/)

Running the Microservices with Sail Command
-------------------------------------------

1.  Clone the repository to your local machine:

    bash

-   `git clone https://github.com/marrano92/test-laravel-docker`

    -   Navigate to the project directory:

    bash

    -   `cd laravel-microservices`

1.  `./vendor/bin/sail up`

    The first time you run this command, it will take a few minutes to download and build the Docker images.

2.  Access the application in your web browser at <http://localhost:81/api/validation/start>.
# test-laravel-docker
