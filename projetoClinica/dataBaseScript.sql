create database sistema_clinica;


use sistema_clinica;


--tabela auxiliar--

create table sexo
(codsexo integer not null auto_increment,
sexo varchar(80)not null unique,
primary key (codsexo))engine=innodb;


create table orientacao
(codorientacao integer not null auto_increment,
orientacao varchar(80)not null unique,
primary key (codorientacao))engine=innodb;


create table estado_civil
(cod_estado_civil integer not null auto_increment,
estado_civil varchar(80)not null unique,
primary key (cod_estado_civil))engine=innodb;


create table cidade
(codcidade integer not null auto_increment,
estado varchar(80)not null unique,
primary key (codcidade))engine=innodb;


create table convenio
(codconvenio integer not null auto_increment,
convenio varchar(80)not null unique,
primary key (codconvenio))engine=innodb;


create table especialidades
(codespecialidades integer not null auto_increment,
especialidades varchar(80)not null unique,
primary key (codespecialidades))engine=innodb;


create table Abordagem
(codabordagem integer not null auto_increment,
Abordagem varchar(80)not null unique,
primary key (codabordagem))engine=innodb;


create table conselho_classe
(codconselho integer not null auto_increment,
conselho varchar(80)not null unique,
primary key (codconselho))engine=innodb;


--tabelas auxiliares--

insert into cidade value  ( null, 'santo andre'); 1		
insert into cidade value ( null, 'maua'); 2		
insert into cidade value ( null, 'sao caetano do sul'); 3		
insert into cidade value ( null, 'sao bernardo do campo'); 4		
insert into cidade value( null, 'diadema');	5	
insert into cidade value( null, 'ribeirao pires'); 6		
insert into cidade value( null, 'rio grande da serra');	7	
insert into cidade value( null, 'sao paulo'); 8		
insert into cidade value( null, 'baixada santista'); 9	


insert into sexo value (null, 'feminino'); 1 
insert into sexo value (null, 'masculino'); 2 
insert into sexo value (null, 'não informado'); 3 


insert into orientacao value( null, 'Heterosexual'); 1
insert into orientacao value( null, 'Homosexual'); 2
insert into orientacao value( null, 'Bisexual'); 3
insert into orientacao value( null, 'Assexual'); 4
insert into orientacao value( null, 'Pansexual'); 5


insert into estado_civil value ( null, 'Casado'); 1	
insert into estado_civil value ( null, 'Uniao Estavel'); 2	
insert into estado_civil value ( null, 'Viuvo'); 3	
insert into estado_civil value ( null, 'Solteiro');	4
insert into estado_civil value ( null, 'Divorsiado'); 5	


insert into convenio value( null, 'SULAMERICA'); 1
insert into convenio value( null, 'BRADESCO'); 2
insert into convenio value( null, 'MEDISERVISE'); 3
insert into convenio value( null, 'CABESP'); 4
insert into convenio value( null, 'ITAU'); 5
insert into convenio value( null, 'AMAFRESP'); 6
insert into convenio value( null, 'ECONOMUS'); 7
insert into convenio value( null, 'CAIXA'); 8
insert into convenio value( null, 'AMIL'); 9
insert into convenio value( null, 'NOTRE DAME'); 10
insert into convenio value( null, 'PARTICULAR'); 11

insert into especialidades value( null, 'psicologia'); 1
insert into especialidades value( null, 'psiquiatria'); 2
insert into especialidades value( null, 'NENHUM SELECIONADO'); 3

insert into abordagem value (null,'TCC'); 1 			
insert into abordagem value (null,'PSICANALISTICA'); 2			
insert into abordagem value( null,'PSICODINAMICA');	3 		
insert into abordagem value( null,'SISTEMICA');	4		
insert into abordagem value( null,'POSITIVA'); 5			
insert into abordagem value( null,'FROIDIANA'); 6			
insert into abordagem value( null,'BREVE');	7		
insert into abordagem value( null,'ALCOO E DROGAS'); 8			
insert into abordagem value( null,'ORIENTAÇAO YUNGIANA'); 9	
insert into abordagem value( null,'QUALQUER'); 10	

insert into conselho_classe value( null, 'CRM'); 1	
insert into conselho_classe value( null, 'CRP'); 2


--PACIENTES

create table pacientes( 
cod_paciente integer not null auto_increment, 
nome_paciente bigint not null unique, 
cidade_paciente integer not null, 
tel_paciente integer not null, 
sexo_paciente integer not null, 
orientacao_paciente integer not null, 
estado_civil_paciente integer not null, 
convenio_paciente integer not null, 
carterinha integer not null unique, 
abordagem_paciente integer not null, 
data_cadastro date not null, 
data_saida date, 
FOREIGN KEY (cidade_paciente) references cidade (codcidade), 
FOREIGN KEY (sexo_paciente) references sexo (codsexo), 
FOREIGN KEY (orientacao_paciente) references orientacao (codorientacao), 
FOREIGN KEY (estado_civil_paciente) references estado_civil (cod_estado_civil), 
FOREIGN KEY (convenio_paciente) references convenio (codconvenio), 
FOREIGN KEY (Abordagem_paciente) references abordagem (codabordagem), 
primary key (cod_paciente)) engine = innodb; 

 
nome/cid/tel/sexo/orientaçao/est civil/convenio/carteirinha/abordagem/data ent/null
insert into pacientes ( null,'wolf piszezman',1,'995358901',2,1,4,1,'958159753151',10,'2020-05-13',null)

--MÉDICOS 

create table prof(
codprof integer not null auto_increment,
nomeprof varchar(100) not null unique,
cidadeprof integer not null,
telprof integer not null,
sexoprof integer not null,
orientacaoprof integer not null,
estado_civilprof integer not null,
especialidade_prof integer not null,
abordagem integer not null,
conselho_classeprof integer not null,
num_conselho varchar(100) not null,
dataentprof date not null,
datasaidaprof date,
FOREIGN KEY (cidadeprof) references cidade (codcidade),
FOREIGN KEY (sexoprof) references sexo (codsexo),
FOREIGN KEY (orientacaoprof) references orientacao (codorientacao),
FOREIGN KEY (estado_civilprof) references estado_civil (cod_estado_civil),
FOREIGN KEY (especialidade_prof) references especialidades (codespecialidades),
FOREIGN KEY (Abordagem) references abordagem (codabordagem),
FOREIGN KEY (conselho_classeprof) references conselho_classe (codconselho),
primary key (codprof)) engine = innodb;
