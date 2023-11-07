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

insert into cidade value  ( null, 'santo andre'); 	
insert into cidade value ( null, 'maua'); 		
insert into cidade value ( null, 'sao caetano do sul'); 		
insert into cidade value ( null, 'sao bernardo do campo'); 		
insert into cidade value( null, 'diadema');	
insert into cidade value( null, 'ribeirao pires'); 	
insert into cidade value( null, 'rio grande da serra');		
insert into cidade value( null, 'sao paulo'); 	
insert into cidade value( null, 'baixada santista'); 


insert into sexo value (null, 'feminino'); 
insert into sexo value (null, 'masculino'); 
insert into sexo value (null, 'não informado'); 


insert into orientacao value( null, 'Heterosexual');
insert into orientacao value( null, 'Homosexual'); 
insert into orientacao value( null, 'Bisexual'); 
insert into orientacao value( null, 'Assexual'); 
insert into orientacao value( null, 'Pansexual'); 


insert into estado_civil value ( null, 'Casado'); 
insert into estado_civil value ( null, 'Uniao Estavel'); 
insert into estado_civil value ( null, 'Viuvo'); 
insert into estado_civil value ( null, 'Solteiro');
insert into estado_civil value ( null, 'Divorsiado'); 


insert into convenio value( null, 'SULAMERICA'); 
insert into convenio value( null, 'BRADESCO'); 
insert into convenio value( null, 'MEDISERVISE'); 
insert into convenio value( null, 'CABESP'); 
insert into convenio value( null, 'ITAU'); 
insert into convenio value( null, 'AMAFRESP'); 
insert into convenio value( null, 'ECONOMUS'); 
insert into convenio value( null, 'CAIXA'); 
insert into convenio value( null, 'AMIL'); 
insert into convenio value( null, 'NOTRE DAME'); 
insert into convenio value( null, 'PARTICULAR'); 

insert into especialidades value( null, 'psicologia'); 
insert into especialidades value( null, 'psiquiatria'); 
insert into especialidades value( null, 'NENHUM SELECIONADO'); 

insert into abordagem value (null,'TCC'); 		
insert into abordagem value (null,'PSICANALISTICA'); 	
insert into abordagem value( null,'PSICODINAMICA');		
insert into abordagem value( null,'SISTEMICA');	
insert into abordagem value( null,'POSITIVA'); 		
insert into abordagem value( null,'FROIDIANA'); 		
insert into abordagem value( null,'BREVE');		
insert into abordagem value( null,'ALCOO E DROGAS'); 	
insert into abordagem value( null,'ORIENTAÇAO YUNGIANA'); 
insert into abordagem value( null,'QUALQUER'); 

insert into conselho_classe value( null, 'CRM'); 
insert into conselho_classe value( null, 'CRP');


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
