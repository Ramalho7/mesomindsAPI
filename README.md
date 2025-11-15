# Mesominds API

Mesominds API é uma aplicação desenvolvida em Laravel para gerenciar conteúdos, usuários e outras funcionalidades relacionadas ao sistema.

## Tecnologias Utilizadas

- **PHP** 8.3
- **Laravel** 12.x
- **MySQL** (ou SQLite para testes)
- **Passport** para autenticação via API
- **PHPUnit** para testes automatizados

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/Ramalho7/mesomindsAPI.git
   ```

2. Acesse o diretório do projeto:
   ```bash
   cd mesomindsAPI
   ```

3. Instale as dependências do Composer:
   ```bash
   composer install
   ```

4. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente:
   ```bash
   cp .env.example .env
   ```

5. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

6. Execute as migrações do banco de dados:
   ```bash
   php artisan migrate
   ```

7. Instale o Passport:
   ```bash
   php artisan passport:install
   ```

## Executando a Aplicação

Inicie o servidor de desenvolvimento:
```bash
php artisan serve
```

A aplicação estará disponível em [http://localhost:8000](http://localhost:8000).

## Testes

Para rodar os testes automatizados, execute:
```bash
php artisan test
```

Ou, se estiver usando PHPUnit diretamente:
```bash
./vendor/bin/phpunit
```
