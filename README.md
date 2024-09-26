<h2 align="center">
    Queues - Processamento Assíncrono com Laravel Horizon
</h2>

## 🚀 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

- [PHP 8.1](https://php.net)
- [Laravel 10](https://laravel.com)
- [Docker](https://docker.com)
- [Nginx](https://nginx.org/en/)
- [MySQL 5.7](https://mysql.com)
- [Redis](https://redis.io)
- [Invertion Image](https://intervention.io)
- [Mailhog]()


## 📑 Projeto

Esse projeto é uma uma aplicação para por em prática a utilização do Laravel Horizon para o gerenciamento de Filas.  
Pensando em performance, o envio de email e a inserção de marca d'agua em imagems são feitos através de Jobs 
que realizarão processamento assíncrono.  

# Setup Docker Laravel 10 com PHP 8.1

### Passo a passo
Clone Repositório

Crie o Arquivo .env
```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Laravel Horizon"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=horizon
DB_USERNAME=horizon
DB_PASSWORD=horizon

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```

Acesse o container 
```sh
docker exec -it horizon-app-1 bash 
```

Instale as dependências do projeto
```sh
composer install
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)

## 🙋‍♂️ Desenvolvido por
Thiago Luna: [Linkedin!](https://www.linkedin.com/in/thiago-luna/)

## Algumas Skills
![PHP](https://img.shields.io/badge/PHP-fff?style=for-the-badge&logo=php)
![LARAVEL](https://img.shields.io/badge/LARAVEL-000?style=for-the-badge&logo=laravel)
![RABITMQ](https://img.shields.io/badge/rabbitmq-E34F26?style=for-the-badge&logo=rabbitmq&logoColor=white)
![MYSQL](https://img.shields.io/badge/MySQL-fff?style=for-the-badge&logo=mysql)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![NodeJS](https://img.shields.io/badge/node-44883e?style=for-the-badge&logo=node.js&logoColor=black)
![Solidity](https://img.shields.io/badge/solidity-96C9F4?style=for-the-badge&logo=solidity&logoColor=black)
![Bootstrap](https://img.shields.io/badge/bootstrap-000?style=for-the-badge&logo=bootstrap&logoColor=553C7B)
[![Git](https://img.shields.io/badge/Git-000?style=for-the-badge&logo=git&logoColor=E94D5F)](https://git-scm.com/doc)
[![GitHub](https://img.shields.io/badge/GitHub-000?style=for-the-badge&logo=github&logoColor=30A3DC)](https://docs.github.com/)

