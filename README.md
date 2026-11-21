# Como rodar o projeto
## Usando o laravel sail
`./vendor/bin/sail up -d`

## Usando o Makefile
`make up`

# Rodando os testes
## Usando o laravel sail
`./vendor/bin/sail artisan test --env=testing`

## Usando o Makefile
`make test`

# O que ficou de fora
- O restante do CRUD de users
- Autenticação com Sactum
- Autorização das rotas
