# docker-lemp-premiro
Docker Lemp Stack For Premiro Using PHP 5.6

How to use
- Clone this project
- Go into directory which have docker-compose.yml
- Run:
  docker-compose up -d

- To see active ports:
  docker ps
  
- To stop docker container:
  docker-compose stop

- To delete or re create container:
  docker-compose rm
  or
  docker-compose rm --all

- To run composer from docker
  docker-compose run composer install 