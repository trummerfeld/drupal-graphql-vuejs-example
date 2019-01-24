# Creating the server part.

## In the /server folder

```
docker-compose up -d
```

## To install Drupal.

```
docker exec -it graphql_vuejs_drupal_server_php bash ./scripts/drupal_instance_install.sh
```


## To update composer install + config import + drush updb
```
docker exec -it graphql_vuejs_drupal_server_php bash ./scripts/drupal_instance_update.sh
```
