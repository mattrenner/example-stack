# example-stack
An example stack using the wave framework

To get this going

`git clone git@github.com:mattrenner/example-stack.git`

`cd example-stack`

Install Wave dependencies
`composer install`

Spin up database, php-nginx containers
`docker-compose up -d`

Generate routes, models, views as necessary
`cd api`

`./vendor/bin/wave generate/routes`

`./vendor/bin/wave generate/models`

`./vendor/bin/wave generate/views`



