# techos-core-RyanKaique

## 1. User Stories (INVEST)

### US01 — Abrir Ordem de Serviço
Como técnico, quero abrir uma Ordem de Serviço para registrar um conserto de equipamento.

**Critérios de aceitação:**
- O sistema deve validar o ID do cliente.
- O status inicial da Ordem de Serviço deve ser `ABERTA`.
- A Ordem de Serviço deve possuir um identificador único.

### US02 — Consultar status
Como cliente, quero visualizar o status do meu equipamento para acompanhar o andamento do conserto.

**Critérios de aceitação:**
- O sistema deve permitir consultar o status da Ordem de Serviço.
- A consulta deve apresentar o identificador da ordem e seu status atual.
- O cliente deve conseguir identificar a ordem relacionada ao seu equipamento.

## 2. Requisitos Não Funcionais (RNF)

### RNF01 — Segurança
O sistema deve validar e sanitizar os dados recebidos para reduzir riscos de ataques como XSS e outras vulnerabilidades.

### RNF02 — Desempenho
O sistema deve responder à criação de uma Ordem de Serviço em menos de 2 segundos, em condições normais de uso.

## 3. Modelagem Orientada a Objetos (POO)

O sistema terá as seguintes classes:

- **Usuario:** classe base abstrata, com ID, nome e e-mail.
- **Cliente:** herda de Usuario e possui telefone.
- **Tecnico:** herda de Usuario e possui especialidade.
- **OrdemServico:** possui ID, cliente e status.

As classes Cliente e Tecnico herdam os atributos e métodos da classe Usuario. A classe OrdemServico se relaciona com Cliente para registrar quem solicitou o serviço.
