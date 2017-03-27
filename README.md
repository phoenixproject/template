# TRABALHO INTEGRADO: Viagem Estelar [![Stories in Ready](https://badge.waffle.io/phoenixproject/template.png?label=ready&title=Ready)](http://waffle.io/phoenixproject/template)

Trabalho desenvolvido durante as disciplinas de:
- Programação Orientada a Objetos 2,
- Projeto de Sistemas


**INTEGRANTES DO GRUPO:** 
- Nome Paulo Vianna <br>

        
# Sumário


#Gerência de Requisitos

## 1	Motivação e Propósito do Sistema 

O projeto Viagem Estelar surgiu a partir da necessidade de se construir um jogo não só com características de um shooter, mas também de estimular o raciocínio para montar quebra cabeças durante a execução do jogo.

## 2	Personas

Os usuários deste sistema de jogo prezam prezam pela ação e interação constante que estimule a adrenalina.

## 3	Minimundo 

Viagem Estelar se trata de um jogo de tiro no estilo nave (shooter) que permite ao usuário percorrer por um trajeo em um ambiente espacial onde outros inimigos poderão ser abatidos para acumular pontos para abrir caminho durante o jogo e ao mesmo tempo montar quebra cabeças.

## 4	Requisitos de Usuários

### 4.1	Requisitos Funcionais (Histórias de Usuário)

| ID | Descrição | Prioridade | Pontos |
| --- | --- | --- | --- |
| RF01 | O usuário terá uma tela de menu inicial em que poderá escolher o nível de díficuldade ou iniciar o jogo. | Essencial | 2 |
| RF02 | Ao escolher o modo para iniciar o jogo o usuário iniciará a partida do jogo. | Essencial | 3 |

### 4.2	Requisitos Não Funcionais

| ID | Descrição | Prioridade | Categoria | Escopo |
| --- | --- | --- | --- | --- |
| RNF01 | Ao escolher o modo para iniciar o jogo o usuário deverá aguardar no máximo 5 segundos até que o jogo se inicie  | Desejável | 3 | Eficiência de Tempo | RF03 | 

### 4.3	Regras de Negócio

| ID | Descrição | Prioridade | 
| --- | --- | --- |
| RN01 | O tamanho da cadeia de caracteres do nome do usuário é de no máximo 15. | Essencial |

#Desenvolvimento do Sistema
##1.    Análise de Sistemas:
###1.1  Subsistemas
inserir diagrama dos subsistemas UML
###1.2  Modelagem de Casos de uso 
inserir diagramas dos Casos de Uso (UML) e descrever brevemente.

###1.3  Modelagem Estrutural (Modelo Conceitual)
** ATENÇO: USAR Notação Entidade-Relacionamentos se estiver fazendo BD2 e o diagrama de classes se estiver fazendo Projeto de Sistemas**
![Alt text](https://github.com/discipbd2/topicos-trabalho/blob/master/sample_MC.png?raw=true "Modelo Conceitual")
###1.4  Modelagem Comportamental
inserir principais diagramas comportamentais da análise (principalmente, estados)
###1.5  Dicionário de Dados
[classe/entidade]: [descrição da classe]
    
    EXEMPLO:
    CLIENTE: classe/entidade que representa as informações relativas ao cliente<br>
    CPF: atributo que representa o número de Cadastro de Pessoa Física para cada cliente da empresa.<br>
    
##2.    Projeto de Sistemas:
###2.1  Projeto Arquitetural 
####2.1.1   Plataforma de Implementação e Tecnologias
descrever tecnologias usadas no sistema, justificando cada uma delas com base no contexto

####2.1.2   Atributos de Qualidade e Táticas
 CATEGORIAS | RNF'S | TÁTICAS | 
| --- | --- | --- |
| Facilidade de Operação | RNF03, RNF08| Prover ao usuário a capacidade de entrar com comandos que permitam operar o sistema de modo mais eficiente. Para tal, as interfaces do sistema devem permitir, sempre que possível, a entrada por meio de seleção ou leitura de código de barras ao invés da digitação de campos. | 


####2.1.3   Arquitetura de Software
apresentar diagrama UML da arquitetura do sistema. justificar as decisões tomadas.

###2.2. Projeto Detalhado
OBS: repetir as seções abaixo para cada subsistema
####2.2.1.   Projeto da Lógica de Negócio
#####Projeto do Domínio
apresentar diagrama de classes do domínio
#####Projeto da Aplicação
apresentar diagramas de sequência e mapeamento dos casos de uso para classes
####2.2.2.  Projeto da Interface com Usuário
#####Projeto da Visão
apresentar protótipos de telas e diagramas de classes UML (caso realizado)
OBS: Essa visão não tem nada a ver com Views de Banco de Dados

__OBS DE BD2__: neste ponto a codificação não e necessária, somente as ideias de telas devem ser criadas, o princípio aqui é pensar na criação da interface para identificar possíveis informações a serem armazenadas ou descartadas <br>

Sugestão: https://balsamiq.com/products/mockups/<br>

![Alt text](https://github.com/discipbd2/topicos-trabalho/blob/master/balsamiq.png?raw=true "Title")
#####Projeto da Interação Humana
apresentar diagrama de classes da IU com controladores e diagrama de sequências. Apresentar diagrama com estados de navegação.
####2.2.3.  Projeto da Persistência de Dados
apresentar classes de acesso ao banco de dados. apresentar diagramas de sequência.

####2.4.   Padrões
#####Padrões Arquiteturais
#####Padrões de Projeto

No diagrama abaixo é destacado o padrão de projeto método fábrica que foi utilizado para melhorar a coesão e diminiuir o acoplamento entre as clases do sistema. O pode-se notar a classe FabricaDeFormatos cria os objetos FormatoPng, FormatoJpeg e FormatoGif tirando a dependencia entre a classes Main e essas classes. Vale ressaltar que o padrão utiliza um Interface Formato para diminiuir o acoplamento entre as classes.

![Alt text](https://github.com/felipefo/poo2/blob/master/Padroes_de_Projeto/Cria%C3%A7%C3%A3o/metodo_fabrica/ImagemMetodoFabrica/padrao_metodo_fabrica_conversao_imagem.png)


O padrão foi utilizado para resolver o problema de .....

O padrão foi utilizado para resolver o problema de .....


##3.    Banco de Dados (BD)


###3.1 Decisões do Projeto 
    [atributo]: [descrição da decisão]
    
    EXEMPLO:
    a) Campo endereço: em nosso projeto optamos por um campo multivalorado e composto, pois a empresa 
    pode possuir para cada departamento mais de uma localização... 
    b) justifique!


###3.2	Modelo Lógico<br>
###3.3	MODELO FÍSICO<br>
###3.4	INSERT APLICADO NAS TABELAS DO BANCO DE DADOS<br>
####3.4.1 DETALHAMENTO DAS INFORMAÇÕES
        Detalhamento sobre as informações e processo de obtenção ou geração dos dados.
        Informar/referenciar todas as fontes usadas para:
        a) obtenção dos dados
        b) obtenção de códigos reutilizados (caso tenha feito uso destes)
        c) fontes de estudo para desenvolvimento do projeto
        
####3.4.2 INCLUSÃO DO SCRIPT PARA CRIAÇÃO DE TABELAS E INSERÇÃO DOS DADOS (ARQUIVO ÚNICO COM):
        a) inclusão das instruções para criação das tabelas e estruturas de amazenamento do BD
        b) inclusão das instruções de inserção dos dados nas referidas tabelas
        c) inclusão das instruções para execução de outros procedimentos necessários

###3.5	TABELAS E PRINCIPAIS CONSULTAS<br>
####3.5.1	GERACAO DE DADOS (MÍNIMO DE 1,5 MILHÃO DE REGISTROS PARA PRINCIPAL RELAÇAO)<br>
    Data de Entrega: (Data a ser definida)
<br>
OBS: Incluir para os tópicos 3.5.2 e 3.5.3 as instruções SQL + imagens (print da tela) mostrando os resultados.<br>

####3.5.2	SELECT DAS TABELAS COM PRIMEIROS 10 REGISTROS INSERIDOS<br> 
    Data de Entrega: (Data a ser definida)
<br>
####3.5.3	SELECT DAS VISÕES COM PRIMEIROS 10 REGISTROS<br>
        a) Descrição da view sobre que grupos de usuários (operacional/estratégico) <br>
        e necessidade ela contempla.
        b) Descrição das permissões de acesso e usuários correlacionados (após definição <br>
        destas características)
    Data de Entrega: (Data a ser definida)
<br>
####3.5.4	LISTA DE CODIGOS DAS FUNÇÕES, ASSERÇOES E TRIGGERS<br>
        Detalhamento sobre funcionalidade de cada código.
        a) Objetivo
        b) Código do objeto (função/trigger/asserção)
        c) exemplo de dados para aplicação
        d) resultados em forma de tabela/imagem
<br>
####3.5.5	Administração do banco de dados<br>
        Descrição detalhada sobre como serão executadas no banco de dados as <br>
        seguintes atividades.
        a) Segurança e autorização de acesso:
        b) Estimativas de aquisição de recursos para armazenamento e processamento da informação
        c) Planejamento de rotinas de manutenção e monitoramento do banco
        d) Plano com frequencia de análises visando otimização de performance
<br>
####3.5.6	Backup do Banco de Dados<br>
        Detalhamento do backup.
        a) Tempo
        b) Tamanho
        c) Teste de restauração (backup)
        d) Tempo para restauração
        e) Teste de restauração (script sql)
        f) Tempo para restauração (script sql)
<br>

####3.5.7	APLICAÇAO DE ÍNDICES E TESTES DE PERFORMANCE<br>
    a) Lista de índices, tipos de índices com explicação de porque foram implementados
    b) Performance esperada VS Resultados obtidos
    c) Tabela de resultados comparando velocidades antes e depois da aplicação dos índices.
<br>
    Data de Entrega: (Data a ser definida)
<br>   
####3.5.8	ANÁLISE DOS DADOS COM ORANGE<br>    
    a) aplicação de algoritmos e interpretação dos resultados
<br>
    Data de Entrega: (Data a ser definida)
<br>
###3.6	ATUALIZAÇÃO DA DOCUMENTAÇÃO/ SLIDES E ENTREGA FINAL<br>
<br>
    Data de Entrega: (Data a ser definida)
<br>
###3.7	DIFICULDADES ENCONTRADAS PELO GRUPO<br>  




#Gestão de Configuração
##1.    Metodologia
descrever metodologias e políticas que serão usadas para realizar a gestão de configuração como, por exemplo, Gitflow, rastreabilidade de requisitos e mudanças. É necessário descrever em detalhes os procedimentos.
##2.    Arquitetura
descrever ferramentas e a integração dessas para a arquitetura. 
##3.    Integração Contínua e Delivery Contínua
Descrever como será aplicado esses conceitos.

#Gestão de Projetos
##1.    Project Model Canvas (PMC)
Visão geral do projeto.
##2.    Cronograma macro de sprints 
datas dos sprints.
##3.    Backlog de histórias de Usuário 
lista de histórias de usuário categorizadas, priorizadas e com o esforço. A categorização deve utilizar a técnica MoSCoW. 
Acompanhamento do projeto: o grupo deve apresentar histórico, por sprint,  do acompanhamento do projeto da seguinte forma:
- Apresentando o Burndown do projeto.
- Apresentando a velocidade do time.
- Modificações do backlog.
##4.    Burn down dos sprints
acompanhamento dos sprints. Cada Sprint deve ter uma seção descrevendo o que foi realizado e o planejado (por meio do  o gráfico e Burndown do Sprint).
##5.    Retrospectiva 
Apresentar a retrospectiva da equipe do sprint realizado.

#Gerência de Qualidade
##1.    Métricas de qualidade 
definir métricas de qualidade para cada artefato do projeto como, por exemplo, quantidade de codesmell, complexidade ciclomática e outras. 
##2.    Classes de equivalência e particionamento de equivalência 
defina as classes de equivalências para as métricas de qualidade. 

##3.    Medição 
seção que escreve como as métricas estão sendo atingidas. Essa seção deve ser atualizada por sprint. 
##4.    Testes
Técnicas utilizadas para os testes: apresentar as técnicas utilizadas para o planejamento e execução de testes como, por exemplo, teste funcional sistemático e testes estruturais. 
##5.    Cenário de Teste
apresentar todos os cenários de teste sucesso e falhas das histórias de usuário.  
##6.    Histórico  
O grupo deve apresentar a evolução da qualidade dos itens ao longo das entregas, ou seja, em outras palavras, o grupo deve apresentar o histórico de evolução da qualidade dos artefatos de software e discursar o motivo da evolução.

#Diário de Bordo

o grupo deve apresentar semanalmente um relato da atividade do grupo. O relato pode conter qualquer tipo de informação (fotos, vídeos) que possam auxiliar no entendimento das atividades do grupo. 

OBS: organize o diário para que não se misture com a documentação. de preferência, coloque-o em outra página.

**FORMATACAO NO GIT:** https://help.github.com/articles/basic-writing-and-formatting-syntax/
