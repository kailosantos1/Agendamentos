# Tecnologias e estrutura

## Tecnologias observadas

| Tecnologia | Evidência | Observação |
|---|---|---|
| PHP | Arquivos `.php` combinam código de servidor e HTML | Versão mínima/máxima não declarada. |
| MySQLi | `mysqli_connect`, `mysqli_query`, `$conexao->query` e `mysqli_fetch_assoc` | Confirma uso da extensão MySQLi; engine e versão do servidor não confirmadas. |
| HTML/CSS | Marcação e estilos embutidos nas páginas | Não foi encontrado pipeline de assets. |
| Bootstrap 4.1.3 | CSS e JavaScript referenciados por CDN | Versão indicada nas URLs das páginas. |
| jQuery 3.3.1 slim e Popper 1.14.3 | Scripts CDN nas telas | Não há cópias locais identificadas. |
| Font Awesome | Kit externo carregado nas páginas | Nenhum pacote local identificado. |

Não foram encontrados `composer.json`, arquivos de lock, framework, `package.json`, ferramenta de build, testes automatizados ou manifesto de infraestrutura. A ausência descreve o inventário atual, não uma garantia de que o ambiente externo não tenha dependências.

## Estrutura do repositório

```text
README.md
agendamentos/
├── Google_Contacts_logo.png
├── kisspng-google-calendar-g-suite-google-docs-computer-icons-5afa8d85a112a6.0568071715263696696598.png
└── paginas/
    ├── index.php
    ├── config.php
    ├── formularios, listagens e handlers PHP
    └── ...
```

O diretório `paginas/` concentra a aplicação PHP. As duas imagens na raiz de `agendamentos/` são usadas pelo painel inicial. As referências de navegação do HTML apontam para caminhos absolutos de `localhost/trabalho_tai/paginas/`, portanto a instalação esperada pelo código não é configurada de forma independente do caminho.

## Conexão

`config.php` cria `$conexao` chamando `mysqli_connect` com variáveis de configuração. Não reproduzimos os valores dessas variáveis. A nota [[06 - Desenvolvimento/Ambiente e Execucao|Ambiente e execução]] descreve a configuração sem revelar credenciais.

[[01 - Arquitetura/Indice|Índice de Arquitetura]]
