# drupal-graphql-vuejs-example

This project was used to demonstrate a decoupled setup to the audience of the Berlin Drupal User Group in february 2019.

The repository consits of a presentation (which is also available on dug1902.trummer.co.in), a vue js excample client and a drupal docker container.

If you have questions you can refer to:
- Nikolay (https://github.com/flesheater)
- Lucas (https://github.com/trummerfeld)

## Drupal Setup

Set up Drupal
```
cd server
```

Initiate the docker container and install dependencies
```
docker-compose up -d
docker exec -it graphql_vuejs_drupal_server_php bash ./scripts/drupal_instance_install.sh
```

Drupal should be available via http://drupal.docker.localhost:8000/
(You can see GraphiQL via http://drupal.docker.localhost:8000/graphql/explorer and Voyger via http://drupal.docker.localhost:8000/graphql/voyager)


## Client Setup

Go to client dir
```
cd client/vue-apollo
```

Install dependencies and start client
```
npm install
npm run dev
```

The client should be available via http://localhost:8080