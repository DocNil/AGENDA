# Meu Projeto de Agenda Telefônica

Este é um projeto simples de agenda telefônica usando HTML, PHP e Neon Console para PostgreSQL.

## Configuração

### Requisitos

- Servidor Web com PHP (ex: Apache)
- Extensão PDO do PHP
- Conta no Neon Console

### Passos para Configurar

1. Clone este repositório:
    ```bash
    git clone https://github.com/seu-usuario/meu-projeto.git
    ```

2. Configure o banco de dados no Neon Console:
    - Crie um banco de dados e obtenha as credenciais de conexão.
    - Crie a tabela `contacts` usando o seguinte script SQL:
      ```sql
      CREATE TABLE contacts (
          id SERIAL PRIMARY KEY,
          name VARCHAR(30) NOT NULL,
          phone VARCHAR(30) NOT NULL
      );
      ```

3. Configure o arquivo `config.php` com as credenciais do banco de dados Neon.

4. Suba os arquivos para o servidor web.

5. Acesse `index.html` no seu navegador:
    ```
    http://localhost/meu-projeto/index.html
    ```

## Uso

- Preencha o formulário para adicionar novos contatos.
- Veja a lista de contatos e delete contatos indesejados.