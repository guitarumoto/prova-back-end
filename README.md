# Passo a Passo

1 - Clonar este repositório;

2 - Configurar banco de dados SQL na porta 3306 com uma database de nome "campeonato";

3 - Rodar comando 'php artisan migrate' para criar as tabelas no banco de dados;

4 - Rodar comando 'php artisan serve' para iniciar servidor;

# Endpoints

## /times POST:
O corpo da requisição como o descrito abaixo
```
{
	"nome_time": "botafogo"
}
```
A resposta será
```
{
  "nome_time": "botafogo",
  "updated_at": "2020-10-04T19:34:48.000000Z",
  "created_at": "2020-10-04T19:34:48.000000Z",
  "id": 4
}
```
## /times GET:
A resposta será
```
  {
    "id": 4,
    "nome_time": "botafogo",
    "pontos": 0,
    "created_at": "2020-10-04 19:34:48",
    "updated_at": "2020-10-04 19:34:48"
  }
```
## /partidas POST:
O corpo da requisição como o descrito abaixo
```
{
	"horario_inicio": "19:00:00",
	"horario_termino": "21:00:00",
	"placar": "2x1",
	"cartao_amarelo": 3,
	"cartao_vermelho": 1,
	"time_casa": 3,
	"time_fora": 4
}
```
A resposta será
```
{
  "horario_inicio": "19:00:00",
  "horario_termino": "21:00:00",
  "placar": "2x1",
  "cartao_amarelo": 3,
  "cartao_vermelho": 1,
  "time_casa": 3,
  "time_fora": 4,
  "updated_at": "2020-10-04T19:35:01.000000Z",
  "created_at": "2020-10-04T19:35:01.000000Z",
  "id": 7
}
```
## /partidas GET:
A resposta será
```
  {
    "id": 7,
    "time_casa": 3,
    "time_fora": 4,
    "horario_inicio": "19:00:00",
    "horario_termino": "21:00:00",
    "placar": "2x1",
    "cartao_amarelo": 3,
    "cartao_vermelho": 1,
    "created_at": "2020-10-04T19:35:01.000000Z",
    "updated_at": "2020-10-04T19:35:01.000000Z"
  }
```
## /jogadores POST:
O corpo da requisição como o descrito abaixo
```
{
	"cpf": "0100006130",
	"nome": "Arthur",
	"numero_camiseta": 10,
	"id_time": 1
}
```
A resposta será
```
{
  "cpf": "0100006130",
  "nome": "Arthur",
  "numero_camiseta": 10,
  "id_time": 1,
  "updated_at": "2020-10-04T19:59:19.000000Z",
  "created_at": "2020-10-04T19:59:19.000000Z",
  "id": 1
}
```
## /jogadores GET:
A resposta será
```
  {
    "id": 1,
    "cpf": "0100006130",
    "id_time": 1,
    "nome": "Arthur",
    "numero_camiseta": 10,
    "created_at": "2020-10-04T19:59:19.000000Z",
    "updated_at": "2020-10-04T19:59:19.000000Z"
  }
```