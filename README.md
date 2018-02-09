# ZendProject
This project was built from the Pluralsight course: Building PHP Applications with Zend Framework 2 to learn how to use 
the Zend Framework for a work project. 
  
# Setup
- Run `composer install`
- Run `docker-compose build`
- Run `docker-compose up`
- Access php container via `docker exec -i -t [docker id] /bin/bash`
- Run `./vendor/bin/doctrine-module migrations:migrate`