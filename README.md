# Sistema de Clínica Hospitalar

Sistema web para uma clínica hospitalar desenvolvido com HTML, CSS e PHP, utilizando banco de dados MySQL.  
O projeto é executado em ambiente local por meio do XAMPP e possui áreas separadas para pacientes e administração.

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
- Cadastro e autenticação de pacientes
- Agendamento de consultas
- Visualização da data, horário e médico da consulta

### Área Administrativa
- Cadastro de especialidades médicas
- Cadastro de médicos vinculados a uma especialidade
- Visualização das consultas agendadas
- Cancelamento de consultas com registro do motivo
- Gerenciamento geral do sistema

---

## Fluxo Inicial Recomendado

Para utilizar corretamente o sistema pela primeira vez, recomenda-se seguir o fluxo abaixo:

1. Acessar a área administrativa
2. Cadastrar as especialidades médicas
3. Cadastrar os médicos, vinculando-os às especialidades
4. Acessar a área do paciente para realizar os agendamentos de consultas

Esse fluxo garante que o sistema possua os dados necessários para funcionar corretamente.

---

## Como acessar o sistema (XAMPP)

Este projeto foi desenvolvido para ser executado localmente utilizando o XAMPP.

Após iniciar o **Apache** e o **MySQL**, o acesso ao sistema deve ser feito da seguinte forma:

### Área do Paciente
localhost/clinica

### Área Administrativa
A área administrativa não é acessível pela interface do paciente.

Para acessá-la, digite diretamente no navegador:
localhost/clinica/admin

---

## Acesso Administrativo (Teste)

Credenciais disponíveis apenas para fins de teste:

- Usuário: admin
- Senha: 1234

🔐 As senhas são armazenadas de forma criptografada no banco de dados.

---

## Banco de Dados

O sistema utiliza banco de dados MySQL com as seguintes tabelas:

- paciente
- funcionario
- especialidade
- medico
- consulta

O banco de dados utiliza chaves estrangeiras para manter a integridade dos dados e evitar conflitos de horário entre médicos e pacientes.

### Como importar o banco de dados
1. Inicie o Apache e o MySQL no XAMPP
2. Acesse o phpMyAdmin
3. Crie um banco de dados com o nome `clinica`
4. Importe o arquivo `clinica.sql` disponível no repositório

---

## Observações de Segurança

Este projeto tem fins educacionais e de demonstração.  
Em um ambiente real, seriam aplicadas camadas adicionais de segurança, como controle de acesso avançado e criptografia mais robusta.

---

## Autor
Euller Santiago
