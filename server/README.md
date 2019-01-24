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
# As a GraphQL server


## Server URL:

http://drupal.docker.localhost:8000/graphql


## Example query that should work out of the box:

```
query newsQuery {
	nodeQuery(filter:{conditions:{field: "type", value: "news", operator: EQUAL}}){
    entities {
      ... on NodeNews {
        nid
        title
        fieldText
      }
    }
	}
}

```

the response of which would be something like this:

```
{
  "data": {
    "nodeQuery": {
      "entities": [
        {
          "nid": 1,
          "title": "University apologizes for 430 mistaken acceptance emails",
          "fieldText": "A Florida university said \"human error\" was to blame for about 430 acceptance emails being mistakenly sent out to applicants."
        },
        {
          "nid": 2,
          "title": "Essay contest offers $1.7 million mansion as the prize",
          "fieldText": "The owner of a $1.7 million mansion in Alberta is offering the home for a steeply discounted price -- $25 and an essay."
        },
        {
          "nid": 3,
          "title": "Forgotten tortillas lead Oregon man to $175,000 lottery jackpot",
          "fieldText": "An Oregon man said he won a $175,000 lottery jackpot thanks to making a return trip to the grocery store for some forgotten tortillas."
        }
      ]
    }
  }
}
```

## The graphiql interface, where you could test your queries logged in to drupal is:
(first loggin to Drupal http://drupal.docker.localhost:8000/user/login)

http://drupal.docker.localhost:8000/graphql/explorer

And voyager for a full view.
http://drupal.docker.localhost:8000/graphql/voyager

