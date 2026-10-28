# Painel inicial e navegação

`index.php` é a tela inicial “Sis Agenda”. Apresenta cartões para **Meus Contatos** e **Minha Agenda**, com imagens locais, texto e botões que levam às respectivas listagens.

A navegação aparece novamente nas demais telas. Os links e botões usam URLs absolutas locais, por exemplo `http://localhost/trabalho_tai/paginas/...`; isso está confirmado no HTML, mas não garante que corresponda ao diretório virtual de outra instalação.

O layout usa Bootstrap por CDN e CSS embutido. Os arquivos de imagem referenciados estão em `agendamentos/`, um nível acima de `paginas/`.

## Referências

- [agendamentos/paginas/index.php](../../../agendamentos/paginas/index.php)
- [agendamentos/Google_Contacts_logo.png](../../../agendamentos/Google_Contacts_logo.png)
- [agendamentos/kisspng-google-calendar-g-suite-google-docs-computer-icons-5afa8d85a112a6.0568071715263696696598.png](../../../agendamentos/kisspng-google-calendar-g-suite-google-docs-computer-icons-5afa8d85a112a6.0568071715263696696598.png)

Relaciona-se aos módulos [[02 - Modulos/Agenda|Agenda]] e [[02 - Modulos/Contatos|Contatos]].

[[02 - Modulos/Indice|Índice de Módulos]]
