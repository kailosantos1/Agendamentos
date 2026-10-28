# Sis Agenda — documentação

Este vault documenta o projeto PHP **Agendamentos**, uma aplicação web simples para registrar e consultar compromissos e contatos. A documentação descreve o que foi encontrado nos arquivos do repositório, sem pressupor que telas ou operações funcionem em um ambiente não disponível para validação.

## Comece por aqui

- [[00 - Inicio/Mapa|Mapa do vault]]
- [[01 - Arquitetura/Visao Geral|Visão geral da arquitetura]]
- [[02 - Modulos/Indice|Módulos]]
- [[03 - Fluxos/Indice|Fluxos da aplicação]]
- [[04 - Dados/Modelo de Dados|Modelo de dados observado]]
- [[05 - Interfaces e Integracoes/Dependencias Externas e HTTP|Interfaces e integrações]]
- [[06 - Desenvolvimento/Indice|Desenvolvimento]]
- [[08 - Pendencias/Indice|Pendências e cobertura da análise]]

## Evidências e limites

O README identifica o projeto como o primeiro projeto PHP do autor, datado de 10/03/2022. A implementação observada é PHP procedural com páginas HTML, chamadas `mysqli` e recursos de interface carregados de CDNs. Não foram encontrados testes automatizados, manifesto de dependências PHP, definição SQL do banco, nem configuração de deploy.

Os campos e operações descritos vêm das consultas e formulários. A estrutura real das tabelas, a versão do PHP, as credenciais (deliberadamente não reproduzidas), a disponibilidade do banco e o comportamento em execução precisam de confirmação no ambiente que hospeda o sistema.

[README.md](../../../README.md)
