

---

# Back-End do Sistema de Controle de Pacientes - Ana Penha Barros

Este repositório contém o back-end em desenvolvimento para o sistema de controle de pacientes e terapeutas da terapeuta Ana Penha Barros, que atua em Colatina, ES, Brasil. O sistema foi inicialmente desenvolvido em **PHP**, mas atualmente estamos considerando uma migração para **Node.js** para melhor performance e escalabilidade.

## Sobre o Projeto

O back-end é responsável por gerenciar todos os dados relacionados ao sistema, incluindo cadastros de pacientes e terapeutas, além da gestão de pacotes de sessões. Este projeto está sendo desenvolvido com o intuito de oferecer uma base sólida para o front-end, garantindo segurança e eficiência no controle de dados sensíveis.

### Estrutura Inicial em PHP:

Atualmente, a aplicação está sendo construída em **PHP** com foco em orientação a objetos e boas práticas de programação. O código utiliza classes como `Paciente`, `Terapeuta`, `Pacote`, e `Sessao` para organizar as funcionalidades de forma modular. O sistema também integra com uma **classe de conexão ao banco de dados** para gerenciar as transações de forma segura.

**Classes Implementadas:**
- `Paciente`: Gerencia os dados dos pacientes, como nome, sobrenome, CPF, e histórico de avaliação.
- `Terapeuta`: Responsável pelo cadastro dos terapeutas, incluindo formação e dados administrativos.
- `Pacote`: Relaciona os pacotes contratados pelos pacientes.
- `Sessao`: Controle das sessões realizadas dentro de cada pacote.

### Estudo para Migração para Node.js

Estamos atualmente explorando a possibilidade de migrar o projeto para **Node.js**. Isso traria os seguintes benefícios:
- Melhor suporte para **operações assíncronas**, especialmente em sistemas que demandam muitas consultas simultâneas ao banco de dados.
- Integração mais simples com **APIs RESTful** e **microserviços**.
- Mais flexibilidade e escalabilidade para futuras expansões do sistema.

A decisão final sobre a migração será tomada após uma avaliação completa dos requisitos técnicos e da viabilidade do projeto em Node.js.

## Tecnologias Utilizadas (Atual):

- **PHP 8+**: Utilizado atualmente para o desenvolvimento do back-end.
- **MySQL**: Banco de dados para armazenar informações de pacientes, terapeutas, pacotes e sessões.
- **Composer**: Gerenciador de dependências PHP.

### Futuras Tecnologias (Estudo):
- **Node.js** com **Express**: Para um back-end mais moderno e escalável.
- **MongoDB** ou **PostgreSQL**: Possíveis opções de banco de dados NoSQL/SQL.
  
## Como Contribuir

Estamos em processo de refatoração e análise da melhor abordagem para o back-end. Se você deseja contribuir com sugestões, seja no desenvolvimento em PHP ou no estudo da migração para Node.js, suas contribuições serão muito bem-vindas.

---
