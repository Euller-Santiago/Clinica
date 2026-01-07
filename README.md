# Sistema de Clínica Hospitalar

Projeto escolar de um sistema web para uma clínica hospitalar, desenvolvido com HTML, CSS e PHP, utilizando banco de dados MySQL.

O sistema possui uma área para pacientes realizarem o agendamento de consultas e uma área administrativa restrita para gerenciamento do sistema.

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
- Cancelamento de consultas
- Gerenciamento de médicos e consultas

---

## Ordem de Cadastro no Sistema

Para o correto funcionamento do sistema, é necessário seguir a seguinte ordem na área administrativa:

1. **Cadastrar as especialidades médicas**
2. **Cadastrar os médicos**, associando cada um à sua especialidade
3. Realizar o agendamento das consultas

Essa ordem garante o relacionamento correto entre as tabelas do banco de dados.

---

## Acesso à Área Administrativa (Teste)

Para fins de teste e avaliação do projeto escolar, a área administrativa pode ser acessada com as seguintes credenciais:

- Usuário: admin
- Senha: 1234

Credenciais apenas para demonstração acadêmica.

As senhas são armazenadas de forma criptografada no banco de dados.

---

## Banco de Dados

O banco de dados é composto pelas seguintes tabelas:
- **paciente**
- **funcionario**
- **especialidade**
- **medico**
- **consulta**

O sistema utiliza relacionamentos entre as tabelas para garantir a integridade dos dados, evitando conflitos de horário entre médicos e pacientes.

### Como importar o banco de dados
1. Inicie o Apache e o MySQL no XAMPP
2. Acesse o phpMyAdmin
3. Crie um banco de dados chamado `clinica`
4. Importe o arquivo `clinica.sql` disponível no repositório

---

## Objetivo do Projeto
Projeto desenvolvido com fins educacionais, com o objetivo de praticar desenvolvimento web, lógica de sistemas e integração com banco de dados.

---

## Autor
Euller Santiago
