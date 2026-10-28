# Formulários HTTP, banco e recursos externos

## Interface HTTP interna

As páginas recebem `id` e `search` por GET; formulários enviam dados por POST. Ações retornam por redirecionamentos `Location` para páginas de listagem. Não foi encontrada API REST/JSON ou contrato de integração separado.

| Tela/ação | Destino identificado |
|---|---|
| Criar agenda | `form_agenda.php` → POST `connection.php` |
| Criar contato | `form_contatos.php` → POST `conectionc.php` |
| Atualizar agenda | `edit_agenda.php` → POST `save_agenda.php` |
| Atualizar contato | `edit_contato.php` → POST `save_contatos.php` |
| Excluir | `listar_*.php` → GET `delete_*.php?id=...` |

## Banco

`config.php` chama `mysqli_connect` e define `$conexao`, compartilhada pelas páginas. O uso de MySQLi indica conexão ao protocolo/servidor MySQL; não há evidência suficiente para determinar se o ambiente usa MySQL ou MariaDB, nem seus detalhes de configuração. Nenhum valor de credencial é reproduzido aqui.

## Recursos externos de interface

As páginas referenciam Bootstrap 4.1.3, jQuery slim 3.3.1, Popper 1.14.3 e Font Awesome via CDNs. Algumas tags incluem `integrity`/`crossorigin`. A interface depende de rede para obter esses recursos, salvo cache do navegador; não há cópias locais desses assets identificadas.

## Referências

- [agendamentos/paginas/config.php](../../../agendamentos/paginas/config.php)
- [agendamentos/paginas/form_agenda.php](../../../agendamentos/paginas/form_agenda.php)
- [agendamentos/paginas/form_contatos.php](../../../agendamentos/paginas/form_contatos.php)
- [agendamentos/paginas/index.php](../../../agendamentos/paginas/index.php)

[[05 - Interfaces e Integracoes/Indice|Índice de Interfaces e Integrações]]
