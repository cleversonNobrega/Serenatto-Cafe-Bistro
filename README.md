# ☕ Serenatto Café & Bistrô

Sistema web para uma cafeteria, desenvolvido com PHP e MySQL, com foco na exibição e no gerenciamento de produtos do cardápio.

O projeto utiliza PHP com orientação a objetos e PDO para a comunicação com o banco de dados, buscando organizar o código e separar as responsabilidades da aplicação.

## 📌 Sobre o projeto

O **Serenatto Café & Bistrô** é um projeto prático de desenvolvimento web que simula parte das operações de uma cafeteria.

A aplicação permite trabalhar com produtos organizados por categorias, incluindo informações como nome, descrição, preço e imagem. Também conta com funcionalidades para gerenciamento dos produtos cadastrados.

O projeto tem como objetivo aplicar conceitos de desenvolvimento back-end, manipulação de dados, conexão com banco de dados e organização de código PHP.

## 🚀 Funcionalidades

- 📋 Listagem de produtos cadastrados.
- ☕ Organização dos produtos por tipo ou categoria.
- ➕ Cadastro de novos produtos.
- 🗑️ Exclusão de produtos.
- 🖼️ Associação de imagens aos produtos.
- 💰 Exibição de preços.
- 🗄️ Integração com banco de dados MySQL.
- 🔌 Acesso ao banco de dados utilizando PDO.
- 🧱 Organização do código com classes e orientação a objetos.

> Observação: as funcionalidades descritas devem corresponder à versão efetivamente implementada no repositório.

## 🛠️ Tecnologias utilizadas

| Tecnologia | Finalidade                                        |
| ---------- | ------------------------------------------------- |
| PHP        | Desenvolvimento da aplicação back-end             |
| MySQL      | Armazenamento dos dados                           |
| PDO        | Conexão e execução de consultas ao banco de dados |
| HTML5      | Estrutura das páginas                             |
| CSS3       | Estilização das páginas                           |
| Git        | Controle de versão                                |
| GitHub     | Hospedagem do código-fonte                        |

## 📂 Estrutura do projeto

A estrutura abaixo ilustra a organização dos principais arquivos e diretórios da aplicação. Os caminhos podem variar conforme a versão atual do repositório.

```text
Serenatto-Cafe-Bistro/
│
├── index.php
├── cadastrar-produto.php
├── excluir-produto.php
│
├── src/
│   ├── conexao-db.php
│   │
│   ├── Modelo/
│   │   └── produto.php
│   │
│   └── Repositorio/
│       └── produtoRepositorio.php
│
├── README.md
└── .gitignore
```

### Organização do código

- **`index.php`**: página principal da aplicação.
- **`cadastrar-produto.php`**: responsável pelo fluxo de cadastro de produtos.
- **`excluir-produto.php`**: responsável pelo fluxo de exclusão de produtos.
- **`src/conexao-db.php`**: configuração da conexão com o banco de dados.
- **`src/Modelo/produto.php`**: classe que representa um produto e seus atributos.
- **`src/Repositorio/produtoRepositorio.php`**: concentra operações de acesso e manipulação dos produtos no banco de dados.

A separação entre modelo e repositório ajuda a manter o código organizado e facilita sua manutenção.

## ⚙️ Como executar o projeto

### 1. Pré-requisitos

Antes de começar, instale e configure:

- PHP compatível com o projeto.
- MySQL Server.
- Git.
- Um navegador web.
- Um editor de código, como o Visual Studio Code.

### 2. Clone o repositório

Abra o terminal e execute:

```bash
git clone https://github.com/cleversonNobrega/Serenatto-Cafe-Bistro.git
```

Entre na pasta do projeto:

```bash
cd Serenatto-Cafe-Bistro
```

### 3. Configure o banco de dados

Inicie o servidor MySQL e crie o banco de dados utilizado pela aplicação.

Exemplo:

```sql
CREATE DATABASE serenatto
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
```

**Importante:** a criação do banco de dados não cria automaticamente as tabelas necessárias. Utilize o script SQL do projeto, caso exista, ou crie as tabelas conforme a estrutura esperada pelo código.

Verifique também se o nome do banco corresponde ao configurado na conexão PDO.

### 4. Configure a conexão

Abra o arquivo responsável pela conexão com o banco de dados:

```text
src/conexao-db.php
```

Configure os parâmetros de conexão de acordo com o seu ambiente:

- Host do MySQL.
- Nome do banco de dados.
- Usuário do banco.
- Senha do banco.

Não publique senhas ou outras credenciais no GitHub. Em um ambiente de desenvolvimento, prefira utilizar variáveis de ambiente e mantenha os arquivos com informações privadas fora do controle de versão.

### 5. Inicie o servidor PHP

Na raiz do projeto, execute:

```bash
php -S localhost:8000
```

Acesse no navegador:

```text
http://localhost:8000
```

Esse comando inicia o servidor de desenvolvimento integrado do PHP. Ele não inicia o MySQL nem cria as tabelas necessárias.

### 6. Teste a aplicação

Depois de configurar o banco de dados:

1. Acesse a página inicial.
2. Verifique se os produtos são carregados corretamente.
3. Teste o cadastro de um produto.
4. Confira se as informações foram persistidas no banco.
5. Teste a exclusão de um produto.
6. Verifique se as imagens e os preços são exibidos corretamente.

## 🧠 Conceitos aplicados

Durante o desenvolvimento, são trabalhados conceitos importantes para a formação de um desenvolvedor PHP:

- Programação orientada a objetos (POO).
- Classes, propriedades e métodos.
- Encapsulamento.
- Tipagem de propriedades e parâmetros.
- Construtores.
- Separação entre modelo e repositório.
- Conexão com banco de dados utilizando PDO.
- Consultas SQL.
- Operações de cadastro, consulta e exclusão.
- Organização de arquivos e responsabilidades.
- Controle de versão com Git.

## 🔒 Segurança

Algumas boas práticas importantes para a aplicação:

- Utilizar consultas preparadas com PDO.
- Validar os dados recebidos dos formulários.
- Escapar valores exibidos no HTML para evitar problemas de segurança.
- Não armazenar credenciais diretamente no repositório.
- Validar identificadores antes de executar operações de exclusão.
- Tratar erros de conexão e consultas ao banco de dados.
- Validar arquivos enviados como imagens.

## 📚 Objetivo educacional

Este projeto faz parte da minha jornada de aprendizado em desenvolvimento de software, com foco em PHP e desenvolvimento back-end.

O objetivo é consolidar conhecimentos por meio de uma aplicação prática, evoluindo gradualmente a organização do código, a integração com banco de dados e a implementação de funcionalidades.
