![image](https://github.com/GabrielReinertB/DesafioKhanbanFlow/assets/12136092/88c46c7a-8c3f-4f29-ad07-4c379cc4472f)
![image](https://github.com/GabrielReinertB/DesafioKhanbanFlow/assets/12136092/60f3ff15-5357-403c-9483-a17cd526d084)


# DesafioKhanbanFlow
Disponibilizado para entrega de um desafio... ainda não está totalmente pronto.

# KhanbanFlow

O KhanbanFlow é um aplicativo de gerenciamento de projetos e acompanhamento de tarefas construído com o Laravel.

## Como Executar no Seu Computador

Siga estas etapas para configurar e executar o projeto em seu computador:

Clone o projeto usando o seguinte comando:

```shell
git clone https://github.com/GabrielReinertB/KhanbanFlow.git
```

No diretório raiz do projeto, execute o seguinte comando para instalar as dependências do PHP:
```shell
composer install
```

Crie um novo banco de dados PostgreSQL usando sua ferramenta de gerenciamento de banco de dados preferida (por exemplo, pgAdmin).

Faça uma cópia do arquivo .env.example e renomeie-o para .env. Abra o arquivo .env e insira suas credenciais de banco de dados.

Execute o seguinte comando para criar as tabelas do banco de dados e preenchê-las com dados de exemplo:
```shell
php artisan migrate --seed
```

Inicie o servidor de desenvolvimento do Laravel com o seguinte comando:
```shell
php artisan serve
```

O servidor estará em execução e você poderá acessar o projeto em http://localhost:8000 (ou na porta que você configurou).

Na página de login do aplicativo, use o seguinte email e senha para fazer login como administrador:
```shell
Email: admin@admin.com
Senha: admin (Essas credenciais de login foram adicionadas durante o processo de inserção de dados no passo 5)
```

Como Desenvolver
Para desenvolver o projeto e compilar automaticamente os ativos sempre que houver alterações, siga estas etapas:

Em um terminal separado, execute o seguinte comando para monitorar e compilar automaticamente os ativos sempre que houver alterações no diretório /resources. O Laravel Mix irá compilar os ativos para o diretório /public:
```shell
npm run watch
```

Isso permitirá que você edite os ativos do projeto e veja as atualizações em tempo real conforme faz alterações.

Licença
Este projeto está licenciado sob a Licença MIT - consulte o arquivo LICENSE para obter detalhes.

Você pode adicionar este conteúdo ao seu arquivo README.md no GitHub. Certifique-se de incluir os pré-requisitos necessários para a instalação e desenvolvimento do projeto.
