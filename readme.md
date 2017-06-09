# TRABALHO INTEGRADO: Viagem Estelar 
**Integração Contínua > Travis-CI:** 
<br>
[![Build Status](https://travis-ci.org/phoenixproject/viagemestelar.png)](https://travis-ci.org/phoenixproject/viagemestelar)
<br><br>
**Integração Contínua (Code Smells) > Codacy:** 
<br>
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/dbd5d8d8989e464e8ddf5f4b896e7928)](https://www.codacy.com/app/phoenixproject.erp/viagemestelar?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=phoenixproject/viagemestelar&amp;utm_campaign=Badge_Grade)
<br><br>
**Integração Contínua > AppVeyor:** 
<br>
[![Build status](https://ci.appveyor.com/api/projects/status/bf7lfjpb7aoo3hxs/branch/master?svg=true)](https://ci.appveyor.com/project/phoenixproject/viagemestelar/branch/master)
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

## 1	Motivação e Propósito do Sistema 

O projeto Viagem Estelar surgiu a partir da necessidade de se construir um jogo não só com características de um shooter, mas também, desejavelmente, de estimular o raciocínio para montar quebra cabeças durante a execução do jogo. 


## 2	Personas

Os usuários deste sistema de jogo prezam prezam pela ação e interação constante que estimule a adrenalina.

## 3	Minimundo 

Viagem Estelar se trata de um jogo de tiro no estilo nave (shooter) que permite ao usuário percorrer por um trajeto em um ambiente espacial onde outros inimigos poderão ser abatidos para acumular pontos para abrir caminho durante o jogo e desejavelmente, ao mesmo tempo montar um quebra cabeças, fazer combinações entre tipos de armas e naves distintas, armazenando as pontuções no servidor, bem como os tipos de atividades que estão acontecendo (login, ganhou, perdeu, etc).
O jogo exibe uma nave que percorre o Universo lançado seus tiros em asteróides e naves inimigas com o intuito de ganhar pontuação para serem posteriormente armazenadas em um servidor na internet. Este servidor possui uma área para gerenciamento de dados pessoais que o usuário poderá acessar e que os administradores do sistema poderão retirar relatórios de atividades ou gerenciar atividades do usuário.

## 4	Requisitos de Usuários

### 4.1	Requisitos Funcionais (Histórias de Usuário)

| ID | Descrição | Prioridade | Pontos |
| --- | --- | --- | --- |
| RF01 | Sendo eu um usuário gostaria de na tela inicial escolher o nível de dificuldade do jogo. | Essencial | 2 |
| RF02 | Como um usuário, quero escolher iniciar o jogo imediatamente a partir da tela principal. | Essencial | 3 |
| RF03 | Sendo eu um usuário, ao entrar no menu de opções do game quero personalizar o máximo que consigo em relação a quantidade de vidas e continue. | Importante | 2 |
| RF04 | Como um usuário eu posso movimento a nave com as teclas que compõe o direcional do teclado. | Essencial | 1 |
| RF05 | Sendo eu um usuário quero pressionar um botão que "solta" tiros em outros inimigos e asteróides. | Essencial | 1 |
| RF06 | Como um usuário, quero no final do jogo poder ver meu ranking junto com o dos outros usuários. | Importante | 2 |
| RF07 | Para acessar as minhas informações usando o navegador, como um usuário gostaria de apenas digitar meu email e senha. | Importante | 2 |
| RF08 | Sendo eu um usuário quero ter acesso a todas as informações referentes ao que fiz no jogo, minhas conquistas e pontuações. | Importante | 2 |
| RF09 | Como um usuário administrador quero ter acesso a todas as informações referentes feitas no jogo a partir de relatórios num navegador na internet. | Importante | 2 |
| RF10 | Como um usuário quero poder jogar tanto no celular quanto no desktop e te acesso ao mesmo tipo de informação. | Importante | 2 |
| RF11 | Sendo eu um usuário quero poder compartilhar o meu hanking nas redes socias. | Importante | 1 |

### 4.2	Requisitos Não Funcionais

| ID | Descrição | Prioridade | Categoria | Escopo |
| --- | --- | --- | --- | --- |
| RNF01 | Ao escolher o modo para iniciar o jogo o usuário deverá aguardar no máximo 5 segundos até que o jogo se inicie  | Desejável | 3 | Eficiência | RF03 | 
| RNF02 | Ao acessar o endereço na web utilizando o navegador o usuário poderá acessar página de login do sistema que armazena os hankings de todos os usuários.  | Desejável | 3 | Portabilidade | RF07 | 
| RNF03 | Ao testar o acesso a internet utilizando o cliente (jogo), o mesmo não poderá transmitir nenhum erro não tratado ao usuário, delimitando-se apenas a uma mensagem informando que a conexão no existe.  | Desejável | 3 | Disponibilidade | RF07 | 
| RNF04 | A tela de abertura do jogo deverá ter menus de fácil acesso se concentrando em no máximo três e que não se expandam em submenus.  | Desejável | 3 | Usabilidade | RF07 | 
| RNF05 | O jogo será tanto portado para desktop quanto para dispositivos mobile e permitindo o usuário o mesmo nível de interação nas duas plataformas.  | Desejável | 3 | Portabilidade | RF10 | 
| RNF06 | O admnistrador terá facilidade para gerar relatórios devido ao tipo de linguagem utilizada para criação do software no servidor.  | Desejável | 2 | Manutenbilidade | RF09 | 
| RNF07 | O jogo terá um controle simplificado de operações no intuito de facilitar a experiência do usuário.  | Desejável | 3 | Usabilidade | RF01 | 


### 4.3	Regras de Negócio

| ID | Descrição | Prioridade | 
| --- | --- | --- |
| RN01 | O tamanho da cadeia de caracteres do nome do usuário é de no máximo 40. | Essencial |
| RN02 | O tamanho da cadeia de caracteres da senha do usuário é de no máximo 20. | Essencial |
| RN03 | O usuário não terá seu nome no hanking se não tiver criado seu cadastro. | Essencial |
| RN04 | A cada 100 pontos o usuário ganha uma prêmiação de mais um nível. | Essencial |
| RN05 | O jogador poderá combinar a cada fase um tipo de nave e arma diferentes. | Desejável |

#Desenvolvimento do Sistema
## 1.    Análise de Sistemas:

### 1.1  Subsistemas

inserir diagrama dos subsistemas UML

### 1.2  Modelagem de Casos de uso 

Inserir diagramas dos Casos de Uso (UML) e descrever brevemente.

### 1.3  Modelagem Estrutural (Modelo Conceitual)

![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_MEDIA/diagrama_modelo_conceitual.png?raw=true "Modelo Conceitual")

### 1.4  Modelagem Comportamental

inserir principais diagramas comportamentais da análise (principalmente, estados)

### 1.5  Dicionário de Dados

[classe/entidade]: [descrição da classe]
    
    EXEMPLO:
    CLIENTE: classe/entidade que representa as informações relativas ao cliente<br>
    CPF: atributo que representa o número de Cadastro de Pessoa Física para cada cliente da empresa.<br>
    
## 2.    Projeto de Sistemas:
### 2.1  Projeto Arquitetural 
#### 2.1.1   Plataforma de Implementação e Tecnologias

As tecnologias utilizadas no sistema envolvem a engine Unity 5 com linguagem C Sharp no cliente e linguagem PHP 7 com o framework Bootstrap 3 no servidor.

Cliente - Justifica-se o uso da engine Unity 5 por conta de sua produtividade e possibilidade de integração com a linguagem C Sharp. Esta linguagem se destaca por conta de ser orientada a objetos e ter uma gama extensa de bibliotecas que a tornam fácil de se trabalhar, especialmente por conter biblioteca que permite manipular o protocolo JSON e utilizá-lo entre comunicação de cliente e servidor.

Servidor - A linguagem PHP 7 foi escolhida por sua performance, facilidade de escrita e de hospedagem e por trabalhar com vários tipos de tecnologia web e de comunicação com servidores ou clientes remotos. O framework Bootstrap foi esocolhido por conta de sua fácil adequação a qualquer tipo de layout e seu fácil manuseio diante de uma simples leitura do manual de sua biblioteca.

Acerca das tecnologias envolvidas:

AppVeyor - Ferramenta/Serviço utilizada para integração contínua e análise de consistência de código durante merge de branchs em pull requests.

Codacy - Ferramenta/Serviço utilizada para análise de erros de código em tempo real.

Waffle - Ferramenta/Serviço utilizado para gerenciamento de Issues no Github.

Astah Community - Programa utilizado para a elaboração de diagramas na documentação do sistema.

SQL Developer - Ferramenta da Oracle utilizada para criação de modelo lógico de banco de dados.

Composer - Gerenciador de Dependências do PHP.

Netbeans - IDE utilizada para desenvolver o projeto de servidor PHP 7.

Nginx - Proxy reverso utilizado para servir as requisições via FAST CGI do PHP-FPM.

Bootstrap - Framework CSS que permite desenho de telas em html de modo responsivo.

MySQL - Banco de dados da Oracle, free para projetos open source.

C# (c sharp) - Linguagem orientada a objetos da Microsoft de alto nível, altamente tipada e utilizada para comunicação com servidor e interação com o game.

PHP 7 - Linguagem orientada a objetos de alto nível, fracamente tipada e utilizada para receber requisições de clientes e gerenciar informações em banco de dados MySQL.

Visual Studio 2017 Community - IDE responsável pelo desenvolvimento de software cliente em C# e Unity 5.

Unity 5 - Game Engine responsável para fazer a intermediação/interação entre a linguagem C# (utilizada como script na Unity) e bitmaps do jogo.

#### 2.1.2   Atributos de Qualidade e Táticas

CATEGORIAS | RNF'S | TÁTICAS | 
| --- | --- | --- |
| Eficácia do Tempo | RNF01| Oferece a capacidade de trabalhar com a eficiência do tempo para o usuário pelo fato de conter apenas 3 a 4 telas no sistema, consumindo assim menos processamento. | 
| Portabilidade | RNF02| Dá a opção de usuário acessar parte do sistema também de outra plataforma para poder acompanhar de forma gerencial o seu ranking e pontuação. | 
| Disponibilidade | RNF03| Mesmo que ocorram erros de conexão o sistema cliente continuará ativo, pois o jogo acontece somente no cliente sem depender do servidor durante o jogo. O servidor apenas armazena informações sobre pontuação e ranking. | 
| Usabilidade | RNF04| Propõe ao usuário uma forma simples e descomplida de navegação pelos menus por conta de a quantidade de menus ser reduzida. | 
| Portabilidade | RNF05| O usuário terá opções de poder jogar em plataforma mobile e desktop sem alterações das informações por conta da opção de exportar o jogo na engine. | 
| Manutenbilidade | RNF06| A escolha da linguagem e PHP e o framework front end Bootstrap visa facilitar a manutenção do código de relatórios e do sistema. | 
| Usabilidade | RNF07 | O jogo terá apenas o direcional do teclado e um botão de tiro para manuseá-lo. | 


#### 2.1.3   Arquitetura de Software
apresentar diagrama UML da arquitetura do sistema. justificar as decisões tomadas.

![Alt text](https://github.com/phoenixproject/viagemestelar/blob/developement-cliente/_MEDIA/diagrama_arquitetura_software.png?raw=true "Tela de Login - Cliente")

### 2.2. Projeto Detalhado
OBS: repetir as seções abaixo para cada subsistema
#### 2.2.1.   Projeto da Lógica de Negócio
##### Projeto do Domínio
apresentar diagrama de classes do domínio

![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_MEDIA/diagrama_dominio_problema_cliente.png?raw=true "Modelo Domínio Cliente")

![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_MEDIA/diagrama_dominio_problema_servidor.png?raw=true "Modelo de Domínio Servidor")

##### Projeto da Aplicação
apresentar diagramas de sequência e mapeamento dos casos de uso para classes
#### 2.2.2.  Projeto da Interface com Usuário
##### Projeto da Visão
apresentar protótipos de telas e diagramas de classes UML (caso realizado)
OBS: Essa visão não tem nada a ver com Views de Banco de Dados

__OBS DE BD2__: neste ponto a codificação não e necessária, somente as ideias de telas devem ser criadas, o princípio aqui é pensar na criação da interface para identificar possíveis informações a serem armazenadas ou descartadas <br>

Sugestão: https://balsamiq.com/products/mockups/<br>

![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_PROTOTIPO/01_tela_login_cliente.png?raw=true "Tela de Login - Cliente")
![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_PROTOTIPO/02_tela_jogo_cliente.png?raw=true "Tela principal do Jogo - Cliente")
![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_PROTOTIPO/03_fim_jogo_cliente.png?raw=true "Tela final do Jogo - Cliente")
![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_PROTOTIPO/04_tela_login_servidor.png?raw=true "Tela Login - Servidor")
![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_PROTOTIPO/05_dados_servidor.png?raw=true "Tela Dados - Servidor")

##### Projeto da Interação Humana

<!--apresentar diagrama de classes da IU com controladores e diagrama de sequências. Apresentar diagrama com estados de navegação.-->

![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_MEDIA/diagrama_de_estado_modo_admin.png?raw=true "Diagrama de Estado - Modo Admin")
<br>
![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_MEDIA/diagrama_de_estado_modo_usuario.png?raw=true "Diagrama de Estado - Modo Usuário")
<br>
![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_MEDIA/diagrama_interface_usuario_servidor.png?raw=true "Diagrama de Interface com o Usuário - Servidor")
<br>

#### 2.2.3.  Projeto da Persistência de Dados

apresentar classes de acesso ao banco de dados. apresentar diagramas de sequência.

#### 2.4.   Padrões

##### Padrões Arquiteturais

##### Padrões de Projeto

No diagrama abaixo é destacado o padrão de projeto método fábrica que foi utilizado para melhorar a coesão e diminiuir o acoplamento entre as clases do sistema. O pode-se notar a classe FabricaDeFormatos cria os objetos FormatoPng, FormatoJpeg e FormatoGif tirando a dependencia entre a classes Main e essas classes. Vale ressaltar que o padrão utiliza um Interface Formato para diminiuir o acoplamento entre as classes.

![Alt text](https://github.com/felipefo/poo2/blob/master/Padroes_de_Projeto/Cria%C3%A7%C3%A3o/metodo_fabrica/ImagemMetodoFabrica/padrao_metodo_fabrica_conversao_imagem.png)

O padrão foi utilizado para resolver o problema de .....

O padrão foi utilizado para resolver o problema de .....

## 3.    Banco de Dados (BD)

### 3.1 Decisões do Projeto 
    [atributo]: [descrição da decisão]
    
    EXEMPLO:
    a) Campo endereço: em nosso projeto optamos por um campo multivalorado e composto, pois a empresa 
    pode possuir para cada departamento mais de uma localização... 
    b) justifique!


### 3.2	Modelo Lógico<br>

![Alt text](https://github.com/phoenixproject/viagemestelar/blob/master/_MEDIA/diagrama_modelo_logico_sql_developer.png?raw=true "Diagrama de Modelo Lógico")

### 3.3	MODELO FÍSICO<br>
### 3.4	INSERT APLICADO NAS TABELAS DO BANCO DE DADOS<br>
#### 3.4.1 DETALHAMENTO DAS INFORMAÇÕES
        Detalhamento sobre as informações e processo de obtenção ou geração dos dados.
        Informar/referenciar todas as fontes usadas para:
        a) obtenção dos dados
        b) obtenção de códigos reutilizados (caso tenha feito uso destes)
        c) fontes de estudo para desenvolvimento do projeto
        
#### 3.4.2 INCLUSÃO DO SCRIPT PARA CRIAÇÃO DE TABELAS E INSERÇÃO DOS DADOS (ARQUIVO ÚNICO COM):
        a) inclusão das instruções para criação das tabelas e estruturas de amazenamento do BD
        b) inclusão das instruções de inserção dos dados nas referidas tabelas
        c) inclusão das instruções para execução de outros procedimentos necessários

### 3.5	TABELAS E PRINCIPAIS CONSULTAS<br>
#### 3.5.1	GERACAO DE DADOS (MÍNIMO DE 1,5 MILHÃO DE REGISTROS PARA PRINCIPAL RELAÇAO)<br>
    Data de Entrega: (Data a ser definida)
<br>
OBS: Incluir para os tópicos 3.5.2 e 3.5.3 as instruções SQL + imagens (print da tela) mostrando os resultados.<br>

#### 3.5.2	SELECT DAS TABELAS COM PRIMEIROS 10 REGISTROS INSERIDOS<br> 

    Data de Entrega: (Data a ser definida)
<br>

#### 3.5.3	SELECT DAS VISÕES COM PRIMEIROS 10 REGISTROS

<br>
        a) Descrição da view sobre que grupos de usuários (operacional/estratégico) <br>
        e necessidade ela contempla.
        b) Descrição das permissões de acesso e usuários correlacionados (após definição <br>
        destas características)
    Data de Entrega: (Data a ser definida)
<br>

#### 3.5.4	LISTA DE CODIGOS DAS FUNÇÕES, ASSERÇOES E TRIGGERS<br>
        Detalhamento sobre funcionalidade de cada código.
        a) Objetivo
        b) Código do objeto (função/trigger/asserção)
        c) exemplo de dados para aplicação
        d) resultados em forma de tabela/imagem
<br>
#### 3.5.5	Administração do banco de dados<br>
        Descrição detalhada sobre como serão executadas no banco de dados as <br>
        seguintes atividades.
        a) Segurança e autorização de acesso:
        b) Estimativas de aquisição de recursos para armazenamento e processamento da informação
        c) Planejamento de rotinas de manutenção e monitoramento do banco
        d) Plano com frequencia de análises visando otimização de performance
<br>
#### 3.5.6	Backup do Banco de Dados<br>
        Detalhamento do backup.
        a) Tempo
        b) Tamanho
        c) Teste de restauração (backup)
        d) Tempo para restauração
        e) Teste de restauração (script sql)
        f) Tempo para restauração (script sql)
<br>

#### 3.5.7	APLICAÇAO DE ÍNDICES E TESTES DE PERFORMANCE<br>
    a) Lista de índices, tipos de índices com explicação de porque foram implementados
    b) Performance esperada VS Resultados obtidos
    c) Tabela de resultados comparando velocidades antes e depois da aplicação dos índices.
<br>
    Data de Entrega: (Data a ser definida)
<br>   
#### 3.5.8	ANÁLISE DOS DADOS COM ORANGE<br>    
    a) aplicação de algoritmos e interpretação dos resultados
<br>
    Data de Entrega: (Data a ser definida)
<br>
### 3.6	ATUALIZAÇÃO DA DOCUMENTAÇÃO/ SLIDES E ENTREGA FINAL<br>
<br>
    Data de Entrega: (Data a ser definida)
<br>
### 3.7	DIFICULDADES ENCONTRADAS PELO GRUPO<br>  

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

## 4.    Burn down dos sprints

#Gráfico de rendimento dos Sprints 
<br>
[![Throughput Graph](https://graphs.waffle.io/phoenixproject/viagemestelar/throughput.svg)](https://waffle.io/phoenixproject/viagemestelar/metrics/throughput)
<br><br>

## 5.    Retrospectiva 

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

OBS: organize o diário para que não se misture com a documentação. de preferência, coloque-o em outra página.

**FORMATACAO NO GIT:** https://help.github.com/articles/basic-writing-and-formatting-syntax/
