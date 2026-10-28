# Ambiente e execução

## Pré-requisitos identificados

- Servidor capaz de executar PHP e extensão MySQLi.
- Banco compatível com a conexão `mysqli_connect`, contendo tabelas e campos esperados pelo código.
- Navegador com acesso aos CDNs para os estilos e scripts carregados externamente.

Versões de PHP, sistema de banco, servidor HTTP e schema não estão declarados no repositório.

## Configuração da conexão

`agendamentos/paginas/config.php` define variáveis para host, usuário, senha e nome do banco e cria `$conexao`. Os valores do arquivo não são reproduzidos. O projeto não oferece exemplo sem credenciais, `.env`, documentação de provisionamento, esquema SQL ou mecanismo de migração. Antes de executar, configure a conexão de forma segura no ambiente local e confirme que o schema esperado existe.

## Comandos

Não há scripts de execução no projeto, `composer.json`, Dockerfile ou configuração de servidor web. **Comando do projeto:** nenhum foi identificado. Como opção genérica (não definida nem verificada pelo repositório), o servidor embutido do PHP poderia servir o diretório `agendamentos/` com `php -S 127.0.0.1:8000 -t agendamentos`, desde que PHP e banco estejam configurados; não foi possível validar essa opção neste ambiente.

As URLs absolutas `localhost/trabalho_tai/paginas/...` embutidas nas páginas podem requerer ajuste/configuração do host virtual para navegação consistente. A documentação não altera essas URLs.

[[06 - Desenvolvimento/Testes e Build|Testes e build]]

[[06 - Desenvolvimento/Indice|Índice de Desenvolvimento]]
