# Pontos de atenção e dúvidas

## Confirmado no código

- Consultas SQL são construídas por interpolação de parâmetros recebidos do navegador, inclusive `search`, `id` e valores de formulários. Não foi observada parametrização nessas operações. Isso deve ser revisado antes de exposição a usuários ou dados não confiáveis.
- Valores de registros são montados em HTML por concatenação nas listagens, sem escape visível. O tratamento seguro de saída não pode ser confirmado.
- A exclusão é acionada por GET e não há proteção/confirmador visível no fluxo.
- Navegação contém URLs absolutas locais, em vez de um caminho configurável.
- Opções de convidado são estáticas e não gravadas junto ao compromisso.
- O formulário de busca mostra seletor de campo, mas o script observado envia apenas o texto da busca.

Esses são registros documentais do comportamento estático observado, não uma auditoria dinâmica nem afirmação de impacto comprovado em produção. Verifique a implementação antes de decidir correções.

## Precisa de confirmação

1. Qual versão de PHP/MySQLi e qual servidor HTTP são usados?
2. Qual é o schema real (tipos, constraints, índices, nulabilidade e encoding) das tabelas `agendaa` e `contatos`?
3. Qual configuração de host virtual corresponde às rotas locais codificadas nas páginas?
4. O campo “Convidado” deveria referenciar um contato? Qual é a regra de negócio desejada?
5. Há requisitos externos de autenticação, permissões, retenção ou backup não representados no repositório?

## Não verificado

Não houve execução funcional, conexão ao banco, avaliação visual em navegador ou verificação de deploy. Detalhes em [[06 - Desenvolvimento/Testes e Build|Testes e build]].

[[08 - Pendencias/Indice|Índice de Pendências]]
