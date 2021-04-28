# symfony-desa

Restfull API
Use Framework Symfony 5.2 + OAS3


# Step to Open And Use

*check your file .env make sure it's correct configuration

1. Make Migration

`php bin/console make:migration`

2. Update Your Database

`php bin/console doctrine:migrations:migrate`

- check you API on
 
http://127.0.0.1:8000/api

*notes
Entity with API 

`php bin/console make:entity --api-resource`
