# Busca e listagem

As páginas de listagem leem o parâmetro `search` da query string. Um script da página também envia a busca ao pressionar Enter ou ao acionar o botão, navegando para a mesma página com `?search=...`.

- **Contatos:** a consulta procura correspondência em nome, sobrenome, telefones, tipos de telefone e email; sem `search`, ordena por `id DESC`.
- **Agenda:** o bloco PHP prepara uma consulta em título, datas, horários e local; sem `search`, ordena por `id DESC`. Apesar de a interface exibir um seletor de tipo e “Convidado”, o script de busca usa apenas o texto digitado e não lê o seletor.

O código não implementa paginação. A composição do SQL inclui diretamente o texto recebido na URL; consulte [[08 - Pendencias/Pontos de Atencao|Pontos de atenção]].

## Referências

- [agendamentos/paginas/listar_contatos.php](../../../agendamentos/paginas/listar_contatos.php)
- [agendamentos/paginas/listar_agenda.php](../../../agendamentos/paginas/listar_agenda.php)

Relaciona-se aos módulos [[02 - Modulos/Agenda|Agenda]] e [[02 - Modulos/Contatos|Contatos]].

[[03 - Fluxos/Indice|Índice de Fluxos]]
