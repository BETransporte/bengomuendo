use agendarv1;
create table agendamentos(
id int auto_increment primary key,
nome_clienteadminagendamentos varchar(100) not null,
passeio varchar(100) not null,
data_agendada date,
hora time,
status varchar(20) default
'pretendente'
);