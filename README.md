# Atividade

Construir um aplicativo para cadastro de alunos e cursos em um Instituto Federal.

## Requisitos

O aplicativo deve:

- Usar o SGBD MySQL
- Atualizar e Cadastrar os dados dos alunos
- Atualizar e Cadastrar os dados dos cursos
- Atualizar e Cadastrar as matriculas de cada aluno em cada curso
- Usar chaves primárias e estrangeiras para interligar as tabelas
- A matricula do aluno deve ser feita usando *stored procedure*
- Deve ter um contador que informa a quantidade de cursos que cada aluno esta matriculado.
  - O contador deve ser atualizado automaticamente quando um aluno for matriculado (ou desmatriculado) usando *triggers* no DB.
