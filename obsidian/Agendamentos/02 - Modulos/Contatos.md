# Módulo Contatos

## Responsabilidade e campos

As telas permitem listar, pesquisar, cadastrar, editar e solicitar exclusão de contatos da tabela `contatos`. Os campos usados são `id`, `nome`, `sobre_nome`, `telefone1`, `tipo_telefone1`, `telefone2`, `tipo_telefone2` e `email`.

Os tipos de telefone apresentados pelos formulários são opções HTML fixas: Celular, Casa, Comercial e Principal. Não foi identificada uma tabela separada de tipos.

## Arquivos e operações

- `listar_contatos.php`: pesquisa e lista os contatos; disponibiliza acesso aos formulários de edição e exclusão.
- `form_contatos.php`: formulário de criação enviado por POST a `conectionc.php`.
- `conectionc.php`: INSERT de contato e redirecionamento para a listagem.
- `edit_contato.php`: lê o identificador por GET e carrega os dados para edição.
- `save_contatos.php`: UPDATE quando recebe o campo `update`; redireciona à listagem.
- `delete_contato.php`: seleciona pelo identificador, exclui o registro encontrado e redireciona.

O nome `conectionc.php` está escrito dessa forma no projeto e é o destino do formulário de criação. Não foi corrigido nem renomeado pela documentação.

## Jornada relacionada

Veja [[03 - Fluxos/Ciclo de Contatos|Ciclo de Contatos]], [[03 - Fluxos/Busca e Listagem|Busca e listagem]] e [[04 - Dados/Modelo de Dados|Modelo de dados observado]].

## Referências

- [agendamentos/paginas/listar_contatos.php](../../../agendamentos/paginas/listar_contatos.php)
- [agendamentos/paginas/form_contatos.php](../../../agendamentos/paginas/form_contatos.php)
- [agendamentos/paginas/conectionc.php](../../../agendamentos/paginas/conectionc.php)
- [agendamentos/paginas/edit_contato.php](../../../agendamentos/paginas/edit_contato.php)
- [agendamentos/paginas/save_contatos.php](../../../agendamentos/paginas/save_contatos.php)
- [agendamentos/paginas/delete_contato.php](../../../agendamentos/paginas/delete_contato.php)

[[02 - Modulos/Indice|Índice de Módulos]]
