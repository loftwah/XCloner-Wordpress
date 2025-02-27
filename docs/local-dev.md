# Local Development

## Install For Development

- `git clone git@github.com:watchfulli/XCloner-Wordpress.git`
- `npm install`
- `npm run start`
    - Start command starts development server.
    - `npm run build-prod` will build for production.
    - `npm run build` does not do anything. 
- `composer install`


## Local Development Environment
A [docker-compose](https://docs.docker.com/samples/wordpress/)-based local development environment is provided.

- Start server
    - `docker-compose up -d`
    - If you get errors about port already being allocated, you can either:
        - Kill all containers and try again: `docker kill $(docker ps -q) && docker-compose up -d`
        - Change the port in docker-compose.yml.
- Access Site
    - [http://localhost:6123](http://localhost:6123)
- Run WP CLI command:
    - `docker-compose run wpcli wp user create admin admin@example.com --role=admin user_pass=pass`

## WordPress Tests

There is a special phpunit container for running WordPress tests, with WordPress and MySQL configured.

- Enter container
    - `docker-compose run phpunit`
- Composer install
    - `composer install`
- Test
    - `composer test:wordpress`
