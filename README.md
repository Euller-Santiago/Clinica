# Sistema de Clínica Hospitalar

Projeto escolar de um sistema web para uma clínica hospitalar, desenvolvido com HTML, CSS e PHP, utilizando banco de dados MySQL.

O sistema é executado em ambiente local por meio do XAMPP e possui duas áreas distintas: área do paciente e área administrativa.

---

## Tecnologias Utilizadas
- HTML
- CSS
- PHP
- MySQL

## Ambiente de Desenvolvimento
- XAMPP (Apache e MySQL)
- phpMyAdmin

---

## Funcionalidades

### Área do Paciente
- Cadastro e login de pacientes
- Agendamento de consultas
- Visualização da data, horário e médico da consulta

### Área Administrativa
- Cadastro de especialidades médicas
- Cadastro de médicos vinculados a uma especialidade
- Visualização das consultas agendadas
- Cancelamento de consultas com motivo
- Gerenciamento geral do sistema

---

## Ordem de Cadastro no Sistema

Para o funcionamento correto do sistema, é necessário seguir a seguinte ordem de cadastro na área administrativa:

1. Cadastrar as especialidades médicas
2. Cadastrar os médicos, associando cada médico à sua especialidade
3. Realizar o agendamento das consultas

Essa ordem é necessária devido ao relacionamento entre as tabelas do banco de dados.

---

## Como acessar o sistema (XAMPP)

Este projeto foi desenvolvido para rodar localmente utilizando o XAMPP.

Após iniciar o **Apache** e o **MySQL**, o acesso deve ser feito da seguinte forma no navegador:

### Área do Paciente
localhost/clinica

### Área Administrativa
A área administrativa não é acessível pela área do paciente.

Para acessá-la, é necessário digitar diretamente no navegador:
localhost/clinica/admin

---

## Acesso Administrativo (Teste)

Credenciais disponíveis apenas para fins de teste e avaliação do projeto escolar:

- Usuário: admin
- Senha: 1234

Credenciais apenas para demonstração acadêmica.  
As senhas são armazenadas de forma criptografada no banco de dados.

---

## Banco de Dados

O banco de dados utilizado é MySQL e contém as seguintes tabelas:
- paciente
- funcionario
- especialidade
- medico
- consulta

O sistema utiliza chaves estrangeiras para manter a integridade dos dados e evitar conflitos de horário entre médicos e pacientes.

### Como importar o banco de dados
1. Inicie o Apache e o MySQL no XAMPP
2. Acesse o phpMyAdmin
3. Crie um banco de dados chamado `clinica`
4. Importe o arquivo `clinica.sql` disponível no repositório

---

## Fluxo recomendado para testes

Para uma melhor experiência de teste do sistema, recomenda-se seguir a seguinte ordem:

1. Acessar primeiro a **área administrativa**
2. Cadastrar as **especialidades médicas**
3. Cadastrar os **médicos**, vinculando-os às especialidades
4. Acessar a **área do paciente** para realizar os agendamentos de consultas

Isso garante que o sistema possua os dados necessários para o funcionamento correto.

---

## Objetivo do Projeto
Projeto desenvolvido com fins educacionais, com o objetivo de praticar desenvolvimento web, lógica de sistemas, uso de PHP e integração com banco de dados.

---

## Autor
Euller Santiago
