# Eventos Goodyear

![Eventos Goodyear](link_para_a_imagem_do_site)

## Descrição

O **Eventos Goodyear** é um portal onde usuários podem criar e visualizar eventos. Ele facilita a criação de eventos por parte dos organizadores e permite que os participantes encontrem eventos de seu interesse de forma simples e intuitiva.

## Funcionalidades

- Criação de eventos por usuários
- Visualização de eventos disponíveis
- Participação em eventos
- Integração com banco de dados Oracle para gestão eficiente de dados

## Requisitos

- PHP versão 8.0 ou superior
- Composer
- Oracle Database
- `laravel/framework` versão 9.52 ou superior

## Instalação

Siga os passos abaixo para instalar e configurar o projeto localmente:

1. Clone o repositório:
    ```sh
    git clone https://github.com/seu_usuario/eventos_goodyear.git
    ```
2. Navegue até o diretório do projeto:
    ```sh
    cd eventos_goodyear
    ```
3. Instale as dependências do Composer:
    ```sh
    composer install
    ```
4. Configure o arquivo `.env`:
    - Copie o arquivo `.env.example` e renomeie para `.env`
    - Configure suas variáveis de ambiente no arquivo `.env` conforme necessário, incluindo as configurações de conexão com o banco de dados Oracle

5. Gere a chave da aplicação:
    ```sh
    php artisan key:generate
    ```

6. Execute as migrações do banco de dados:
    ```sh
    php artisan migrate
    ```

7. Inicie o servidor local:
    ```sh
    php artisan serve
    ```

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e enviar pull requests.

## Licença

Este projeto foi criado para meu portfólio pessoal e não possui uma licença específica.

## Contato

Para mais informações, você pode entrar em contato através do meu [GitHub](https://github.com/seu_usuario).

---

Coloque aqui uma imagem do seu site para dar uma prévia visual do projeto:
![Imagem do Site](link_para_a_imagem_do_site)
