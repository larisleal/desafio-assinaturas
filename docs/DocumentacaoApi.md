
---

# Assinaturas Collection

**ID do Postman:** 236ea063-62ab-46a1-ac79-372010089910

**Nome:** Assinaturas Collection

**Schema:** [JSON Collection v2.1.0](https://schema.getpostman.com/json/collection/v2.1.0/collection.json)

## Cadastro

### Listar Cadastros

- **Descrição**: Este endpoint retorna uma lista de todos os cadastros existentes.
- **Método**: `GET`
- **Rota**: `/api/cadastros`
- **Parâmetros**: Nenhum
- **Resposta**: Retorna uma lista de objetos contendo informações de cada cadastro.

### Criar Cadastro

- **Descrição**: Este endpoint cria um novo cadastro com os dados fornecidos.
- **Método**: `POST`
- **Rota**: `/api/cadastros`
- **Parâmetros**:
  - `codigo`: Código identificador do cadastro.
  - `nome`: Nome do cadastro.
  - `email`: Email do cadastro (deve ser único).
  - `telefone`: Número de telefone do cadastro (opcional).
  - `endereco`: Endereço do cadastro (opcional).
  - `cidade`: Cidade do cadastro (opcional).
  - `estado`: Estado do cadastro (opcional).
  - `pais`: País do cadastro (opcional).
- **Resposta**: Retorna o objeto do cadastro criado com um código de status `201`.

### Atualizar Cadastro

- **Descrição**: Este endpoint atualiza um cadastro existente com os dados fornecidos.
- **Método**: `PUT`
- **Rota**: `/api/cadastros/{id}`
- **Parâmetros**:
  - `id`: Identificador único do cadastro a ser atualizado.
  - Outros campos opcionais.
- **Resposta**: Retorna o objeto do cadastro atualizado com um código de status `200`.

### Deletar Cadastro

- **Descrição**: Este endpoint exclui um cadastro existente com base no ID fornecido.
- **Método**: `DELETE`
- **Rota**: `/api/cadastros/{id}`
- **Parâmetros**:
  - `id`: Identificador único do cadastro a ser excluído.
- **Resposta**: Retorna uma mensagem de sucesso com um código de status `204` se a exclusão for bem-sucedida.

## Assinatura

### Listar Assinaturas

- **Descrição**: Este endpoint retorna uma lista de todas as assinaturas existentes.
- **Método**: `GET`
- **Rota**: `/api/assinaturas`
- **Parâmetros**: Nenhum
- **Resposta**: Retorna uma lista de objetos contendo informações de cada assinatura.

### Criar Assinatura

- **Descrição**: Este endpoint cria uma nova assinatura com os dados fornecidos.
- **Método**: `POST`
- **Rota**: `/api/assinaturas`
- **Parâmetros**:
  - `cadastro_id`: ID do cadastro associado à assinatura.
  - `descricao`: Descrição da assinatura.
  - `valor`: Valor da assinatura.
  - `vencimento`: Data de vencimento da assinatura.
  - `inicio`: Data de início da assinatura.
  - `fim`: Data de término da assinatura (opcional).
- **Resposta**: Retorna o objeto da assinatura criada com um código de status `201`.

### Atualizar Assinatura

- **Descrição**: Este endpoint atualiza uma assinatura existente com os dados fornecidos.
- **Método**: `PUT`
- **Rota**: `/api/assinaturas/{id}`
- **Parâmetros**:
  - `id`: Identificador único da assinatura a ser atualizada.
  - Outros campos opcionais.
- **Resposta**: Retorna o objeto da assinatura atualizada com um código de status `200`.

### Deletar Assinatura

- **Descrição**: Este endpoint exclui uma assinatura existente com base no ID fornecido.
- **Método**: `DELETE`
- **Rota**: `/api/assinaturas/{id}`
- **Parâmetros**:
  - `id`: Identificador único da assinatura a ser excluída.
- **Resposta**: Retorna uma mensagem de sucesso com um código de status `204` se a exclusão for bem-sucedida.

## Fatura

### Listar Faturas

- **Descrição**: Este endpoint retorna uma lista de todas as faturas existentes.
- **Método**: `GET`
- **Rota**: `/api/faturas`
- **Parâmetros**: Nenhum
- **Resposta**: Retorna uma lista de objetos contendo informações de cada fatura.

### Criar Fatura

- **Descrição**: Este endpoint cria uma nova fatura com os dados fornecidos.
- **Método**: `POST`
- **Rota**: `/api/faturas`
- **Parâmetros**:
  - `cadastro_id`: ID do cadastro associado à fatura.
  - `assinatura_id`: ID da assinatura associada à fatura.
  - `descricao`: Descrição da fatura.
  - `vencimento`: Data de vencimento da fatura.
  - `valor`: Valor da fatura.
  - `pago`: Indicador de pagamento da fatura (booleano).
- **Resposta**: Retorna o objeto da fatura criada com um código de status `201`.

### Atualizar Fatura

- **Descrição**: Este endpoint atualiza uma fatura existente com os dados fornecidos.
- **Método**: `PUT`
- **Rota**: `/api/faturas/{id}`
- **Parâmetros**:
  - `id`: Identificador único da fatura a ser atualizada.
  - Outros campos opcionais.
- **Resposta**: Retorna o objeto da fatura atualizada com um código de status `200`.

### Deletar Fatura

- **Descrição**: Este endpoint exclui uma fatura existente com base no ID fornecido.
- **Método**: `DELETE`
- **Rota**: `/api/faturas/{id}`
- **Parâmetros**:
  - `id`: Identificador único da fatura a ser excluída.
- **Resposta**: Retorna uma mensagem de sucesso com um código de status `204` se a exclusão for bem-sucedida.

---