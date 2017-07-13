# TRABALHO INTEGRADO: Viagem Estelar 
<!--**Integração Contínua > Travis-CI:** 
<br>
[![Build Status](https://travis-ci.org/phoenixproject/viagemestelar.png)](https://travis-ci.org/phoenixproject/viagemestelar)
<br><br>
**Integração Contínua > AppVeyor:** 
<br>
[![Build status](https://ci.appveyor.com/api/projects/status/bf7lfjpb7aoo3hxs/branch/master?svg=true)](https://ci.appveyor.com/project/phoenixproject/viagemestelar/branch/master)
<br><br>-->
**Integração Contínua (Code Smells) > Codacy:** 
<br>
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/dbd5d8d8989e464e8ddf5f4b896e7928)](https://www.codacy.com/app/phoenixproject.erp/viagemestelar?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=phoenixproject/viagemestelar&amp;utm_campaign=Badge_Grade)
<br><br>
**Acompanhamento de Issues > Waffle IO:** 
<br>
[![Stories in Ready](https://badge.waffle.io/phoenixproject/viagemestelar.png?label=ready&title=Ready)](http://waffle.io/phoenixproject/viagemestelar)
<br><br>
#Gráfico de rendimento 
<br>
[![Throughput Graph](https://graphs.waffle.io/phoenixproject/viagemestelar/throughput.svg)](https://waffle.io/phoenixproject/viagemestelar/metrics/throughput)
<br><br>

Trabalho desenvolvido durante as disciplinas de:
- Programação Orientada a Objetos 2,
- Projeto de Sistemas


**INTEGRANTES DO GRUPO:** 
- Nome Paulo Vianna <br>

        
# Sumário

# Gerência de Requisitos

## 1 - Motivação e Propósito do Sistema 

[Motivação e Propósito do Sistema - Especificação](https://github.com/phoenixproject/viagemestelar/wiki/Ger%C3%AAncia-de-Requisitos#motivacao_e_proposito)

## 2 - Personas

[Personas - Especificação](https://github.com/phoenixproject/viagemestelar/wiki/Ger%C3%AAncia-de-Requisitos#personas)

## 3 - Mini Mundo

[Mini Mundo - Especificação](https://github.com/phoenixproject/viagemestelar/wiki/Ger%C3%AAncia-de-Requisitos#minimundo)

## 4	Requisitos de Usuários

### 4.1	Requisitos Funcionais (Histórias de Usuário)

[Requisitos Funcionais - especificação](https://github.com/phoenixproject/viagemestelar/wiki/Ger%C3%AAncia-de-Requisitos#requisitos_funcionais)

### 4.2	Requisitos Não Funcionais

[Requisitos Não Funcionais - especificação](https://github.com/phoenixproject/viagemestelar/wiki/Ger%C3%AAncia-de-Requisitos#requisitos_nao_funcionais)

### 4.3	Regras de Negócio

[Regras de Negócio - especificação](https://github.com/phoenixproject/viagemestelar/wiki/Requisitos-de-Usu%C3%A1rios#regras_de_negocio)

# Desenvolvimento do Sistema

## 1.    Análise de Sistemas:

### 1.1  Subsistemas

Arquitetura de subsistemas envolvidos.

Arquitetura de Software (Servidor)

[Projeto Arquitetural Servidor Web](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-Detalhado-(Web)#arquitetura_de_software)

Arquitetura de Software (Cliente)

[Projeto Arquitetural Desktop](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-Detalhado-(Desktop)#arquitetura_de_software)

### 1.2  Modelagem de Casos de uso 

[Decrição e Diagramas de Casos de Uso Cliente/Servidor e Protótipos(Moockups)](https://github.com/phoenixproject/viagemestelar/wiki/Diagrama-de-Casos-de-Uso---Cliente---Servidor#diagramas_de_caso_de_uso)

### 1.3  Modelagem Estrutural (Modelo Conceitual)

[Modelo Conceitual - Cliente - Especificações](https://github.com/phoenixproject/viagemestelar/wiki/Modelo-Estrutural-(Conceitual)#modelo_conceitual_cliente)

[Modelo Conceitual - Servidor/Usuário - Especificações](https://github.com/phoenixproject/viagemestelar/wiki/Modelo-Estrutural-(Conceitual)#modelo_conceitual_usuario_servidor)

[Modelo Conceitual - Servidor/Administrador - Especificações](https://github.com/phoenixproject/viagemestelar/wiki/Modelo-Estrutural-(Conceitual)#modelo_conceitual_administrador_servidor)

### 1.4  Modelagem Comportamental

inserir principais diagramas comportamentais da análise (principalmente, estados)

### 1.5  Dicionário de Dados

[Modelo Físico do banco de dados ](https://github.com/phoenixproject/viagemestelar/wiki/Banco-de-Dados---MySQL-Server#dicionario_de_dados)
    
## 2.    Projeto de Sistemas:
### 2.1  Projeto Arquitetural 

[Projeto Arquitetural Servidor Web](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-Detalhado-(Web)#arquitetura_de_software)

#### 2.1.1   Plataforma de Implementação e Tecnologias

[Plataforma de Implementação e Tecnologias - Especificação](https://github.com/phoenixproject/viagemestelar/wiki/Plataforma-de-Implementa%C3%A7%C3%A3o-e-Tecnologias#plataforma_implementacao_tecnologias)

#### 2.1.2   Atributos de Qualidade e Táticas

[Atributos de Qualidade e Táticas - Especificação](https://github.com/phoenixproject/viagemestelar/wiki/Plataforma-de-Implementa%C3%A7%C3%A3o-e-Tecnologias#atributos_qualidade_taticas)

#### 2.1.3   Arquitetura de Software
<!--apresentar diagrama UML da arquitetura do sistema. justificar as decisões tomadas.-->

Justificativa - Padrão de Lógica de Negócio (Servidor)

[Padrão de Lógica de Negócio Servidor Web](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-Detalhado-(Web)#padrao_de_logica_negocio)

Justificativa - Padrão de Lógica de Negócio (Cliente)

[Padrão de Lógica de Negócio Desktop](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-Detalhado-(Desktop)#padrao_de_logica_negocio)

### 2.2. Projeto Detalhado
OBS: repetir as seções abaixo para cada subsistema

#### 2.2.1.   Projeto da Lógica de Negócio

##### Projeto do Domínio

[Projeto de Domínio - Cliente - Especificações](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-de-L%C3%B3gica-de-Neg%C3%B3cio#projeto_dominio_cliente)

[Projeto de Domínio - Servidor - Especificações](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-de-L%C3%B3gica-de-Neg%C3%B3cio#projeto_dominio_servidor)

##### Projeto da Aplicação

[Projeto de Aplicação - Especificações](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-de-L%C3%B3gica-de-Neg%C3%B3cio#projeto_da_aplicacao)

#### 2.2.2.  Projeto da Interface com Usuário

##### Projeto da Visão

[Projeto de Visão - Especificações](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-de-L%C3%B3gica-de-Neg%C3%B3cio#projeto_da_visao)

##### Projeto da Interação Humana

[Projeto de Interação Humana - Especificações](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-de-L%C3%B3gica-de-Neg%C3%B3cio#projeto_da_interacao_humana)

#### 2.2.3.  Projeto da Persistência de Dados

<!--apresentar classes de acesso ao banco de dados. apresentar diagramas de sequência.-->
[Diagrama de Sequência de Acesso ao Servidor](https://github.com/phoenixproject/viagemestelar/wiki/Projeto-de-L%C3%B3gica-de-Neg%C3%B3cio#diagramas_de_sequencia)

#### 2.4.   Padrões

##### Padrões Arquiteturais

##### Padrões de Projeto

[Decisões em Padrões de Projeto](https://github.com/phoenixproject/viagemestelar/wiki/Padr%C3%B5es-de-Projeto#padroes_de_projeto)

## 3.    Banco de Dados (BD)

[Documentação completa sobre banco de dados)](https://github.com/phoenixproject/viagemestelar/wiki/Banco-de-Dados---MySQL-Server)

### 3.1 Decisões do Projeto 

[Decisões de Projeto](https://github.com/phoenixproject/viagemestelar/wiki/Banco-de-Dados---MySQL-Server#decis%C3%B5es_de_projeto)

### 3.2	Modelo Lógico<br>

[Modelo Lógico de Banco de Dados - Especificações](https://github.com/phoenixproject/viagemestelar/wiki/Banco-de-Dados---MySQL-Server#modelo_logico)

### 3.3	MODELO FÍSICO<br>

[Modelo Físico do banco de dados ](https://github.com/phoenixproject/viagemestelar/wiki/Banco-de-Dados---MySQL-Server#modelo_fisico)

### 3.6	ATUALIZAÇÃO DA DOCUMENTAÇÃO/ SLIDES E ENTREGA FINAL<br>
<br>
    Data de Entrega: (Data a ser definida)
<br>

<!-- ### 3.7	DIFICULDADES ENCONTRADAS PELO GRUPO<br>  

# Gestão de Configuração

## 1.    Metodologia

descrever metodologias e políticas que serão usadas para realizar a gestão de configuração como, por exemplo, Gitflow, rastreabilidade de requisitos e mudanças. É necessário descrever em detalhes os procedimentos.

## 2.    Arquitetura

descrever ferramentas e a integração dessas para a arquitetura. 

## 3.    Integração Contínua e Delivery Contínua

Descrever como será aplicado esses conceitos.

#Gestão de Projetos

## 1.    Project Model Canvas (PMC)

Visão geral do projeto.

## 2.    Cronograma macro de sprints 

datas dos sprints.

## 3.    Backlog de histórias de Usuário 

lista de histórias de usuário categorizadas, priorizadas e com o esforço. A categorização deve utilizar a técnica MoSCoW. 
Acompanhamento do projeto: o grupo deve apresentar histórico, por sprint,  do acompanhamento do projeto da seguinte forma:
- Apresentando o Burndown do projeto.
- Apresentando a velocidade do time.
- Modificações do backlog.

## 4.    Burn down dos sprints -->

#Gráfico de rendimento dos Sprints 
<br>
[![Throughput Graph](https://graphs.waffle.io/phoenixproject/viagemestelar/throughput.svg)](https://waffle.io/phoenixproject/viagemestelar/metrics/throughput)
<br><br>

<!-- ## 5.    Retrospectiva 

Apresentar a retrospectiva da equipe do sprint realizado.

# Gerência de Qualidade

## 1.    Métricas de qualidade 

definir métricas de qualidade para cada artefato do projeto como, por exemplo, quantidade de codesmell, complexidade ciclomática e outras. 

##2.    Classes de equivalência e particionamento de equivalência 

defina as classes de equivalências para as métricas de qualidade. 

## 3.    Medição 

seção que escreve como as métricas estão sendo atingidas. Essa seção deve ser atualizada por sprint. 

## 4.    Testes

Técnicas utilizadas para os testes: apresentar as técnicas utilizadas para o planejamento e execução de testes como, por exemplo, teste funcional sistemático e testes estruturais. 

## 5.    Cenário de Teste

apresentar todos os cenários de teste sucesso e falhas das histórias de usuário.  

## 6.    Histórico  

O grupo deve apresentar a evolução da qualidade dos itens ao longo das entregas, ou seja, em outras palavras, o grupo deve apresentar o histórico de evolução da qualidade dos artefatos de software e discursar o motivo da evolução.

# Diário de Bordo

o grupo deve apresentar semanalmente um relato da atividade do grupo. O relato pode conter qualquer tipo de informação (fotos, vídeos) que possam auxiliar no entendimento das atividades do grupo. 

OBS: organize o diário para que não se misture com a documentação. de preferência, coloque-o em outra página. -->

**FORMATACAO NO GIT:** https://help.github.com/articles/basic-writing-and-formatting-syntax/
