# Módulo Agenda

## Responsabilidade e campos

As telas permitem listar, pesquisar, cadastrar, editar e solicitar exclusão de registros da tabela `agendaa`. Os campos usados nas consultas/formulários são `id`, `titulo`, `data_inicio`, `hora_inicio`, `data_fim`, `hora_fim`, `local_1` e `descricao`.

A interface também exibe “Convidado”, mas o formulário oferece as opções fixas Marta e Jackson e as consultas de gravação não persistem esse valor. A listagem escreve o texto literal `convidado` em cada linha. Não há associação com a tabela de contatos demonstrada no código.

## Arquivos e operações

- `listar_agenda.php`: consulta (com pesquisa opcional) e apresentação de registros; links para editar e excluir.
- `form_agenda.php`: formulário de criação enviado por POST a `connection.php`.
- `connection.php`: INSERT de agenda e redirecionamento para a listagem.
- `edit_agenda.php`: lê o identificador por GET e carrega os dados para o formulário.
- `save_agenda.php`: UPDATE quando recebe o campo `update`; redireciona à listagem.
- `delete_agenda.php`: seleciona pelo identificador, exclui o registro encontrado e redireciona.

O handler de atualização chama-se `save_agenda.php`, apesar do nome genérico “save”; sua consulta observada é um UPDATE, não o INSERT de criação.

## Jornada relacionada

Veja [[03 - Fluxos/Ciclo de Agenda|Ciclo de Agenda]], [[03 - Fluxos/Busca e Listagem|Busca e listagem]] e [[04 - Dados/Modelo de Dados|Modelo de dados observado]].

## Referências

- [agendamentos/paginas/listar_agenda.php](../../../agendamentos/paginas/listar_agenda.php)
- [agendamentos/paginas/form_agenda.php](../../../agendamentos/paginas/form_agenda.php)
- [agendamentos/paginas/connection.php](../../../agendamentos/paginas/connection.php)
- [agendamentos/paginas/edit_agenda.php](../../../agendamentos/paginas/edit_agenda.php)
- [agendamentos/paginas/save_agenda.php](../../../agendamentos/paginas/save_agenda.php)
- [agendamentos/paginas/delete_agenda.php](../../../agendamentos/paginas/delete_agenda.php)

[[02 - Modulos/Indice|Índice de Módulos]]
