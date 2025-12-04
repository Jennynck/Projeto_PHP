# Sistema de Gerenciamento de Músicas - PHP | Projeto Acadêmico

Este projeto consiste em um sistema simples de gerenciamento de músicas, desenvolvido em **PHP** e executado em ambiente local utilizando **XAMPP**.  
A aplicação permite realizar operações essenciais de backend, como **cadastrar**, **listar** e **excluir músicas**, servindo como prática de conceitos fundamentais de desenvolvimento web.

---

## Funcionalidades

- **Cadastro de músicas** através de formulário
- **Listagem das músicas cadastradas**
- **Exclusão de músicas** por identificador
- **Validação básica** de dados no frontend (JavaScript)

---

## Tecnologias Utilizadas

- **PHP 8+**
- **HTML5**
- **CSS3**
- **JavaScript**
- **XAMPP (Apache + PHP)**

---

## Estrutura do Projeto

```
Projeto_PHP/
│
├── musicas.php           # Página principal com a listagem das músicas
├── salvar_musica.php     # Manipula o envio e salvamento de novas músicas
├── exc_musica.php        # Responsável pela exclusão de músicas
├── validar.js            # Script de validação dos formulários
├── musicas.zip           # Arquivo com dados para testes
│
└── README.md
```

---

## Como Executar o Projeto no XAMPP

1. **Clone ou faça o download** deste repositório:
   ```bash
   git clone https://github.com/Jennynck/Projeto_PHP.git
   ```

2. Mova a pasta do projeto para o diretório do servidor Apache:
   ```
   C:/xampp/htdocs/Projeto_PHP
   ```

3. Abra o **XAMPP Control Panel** e inicie o módulo:
   - Apache

4. No navegador, acesse:
   ```
   http://localhost/Projeto_PHP/musicas.php
   ```

---

## Como Utilizar

1. Preencha o formulário de cadastro com os dados da música.  
2. Clique em **Salvar** para registrar a música.  
3. Acesse a **listagem** para visualizar todas as músicas cadastradas.  
4. Utilize o botão **Excluir** para remover uma música da lista.  

---

## Objetivo do Projeto

Este projeto foi desenvolvido com foco educacional, abordando:

- Estruturação de páginas dinâmicas com PHP  
- Manipulação inicial de dados sem banco de dados  
- Comunicação entre arquivos por métodos HTTP  
- Utilização do XAMPP para ambiente local  
- Organização de um pequeno backend acadêmico  

---

## Autora

**Jhennifer Nicole (Jenny)**  
Estudante de TI em desenvolvimento, com foco em aprendizado contínuo e prática em projetos backend e frontend.

GitHub: https://github.com/Jennynck