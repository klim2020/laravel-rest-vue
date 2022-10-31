# Small Laravel+Vuejs Starter kit

Client - Server with API 

### Back-end url

```https://my-portfolio2022-klim.herokuapp.com/```

### Front-End url

```https://klim2020.github.io/```

### Run sail container
```sh sl up -d```
```docker exec -it laravel-rest-vue-laravel.test-1 bash```

### Deploy Frontend

!!!dont forget to commit all changes!!!

```cd resources/render/apivue/```
```npm run deploy```   - problems with deploy 

### Deploy Backend

```heroku login```

```git push heroku master:main```

### TODO

    - cannot provide a link to  a portfolie, or different language 

*Example [language](https://klim2020.github.io/#/en) or [portfolio](https://klim2020.github.io/#/cv/pl)*

    -[fixed]cannot start dev/server/postgres locally

    -[front] Move CF To Component


### Test Server

    ```cp .env.example .env```

    ```sh sl up -d```-run back

    ```docker exec -it laravel-rest-vue-laravel.test-1 bash``` - enter enviropment
