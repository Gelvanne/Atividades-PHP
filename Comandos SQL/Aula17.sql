drop database cadastro_usuarios;
create database cadastro_usuario;
create table usuarios;
drop database cadastro_usuario;
create database DB_USUARIOS;
CREATE TABLE TB_USUARIOS;
CREATE TABLE db_usuarios.tb_usuarios(
usuario_id int not null auto_increment,
usuario_name varchar (45) not null,
usuario_email varchar (45) not null,
primary key (usuario_id));
ALTER TABLE `db_usuarios`.`tb_usuarios` 
ADD COLUMN `usuario_senha` VARCHAR(20) NOT NULL AFTER `usuario_email`;
insert into db_usuarios.tb_usuarios (usuario_name,usuario_email,usuario_senha) values ("Gelvanne A R O","gelvanne@yandex.com","123456789");
select usuario_name, usuario_email, Usuario_senha from db_usuarios.tb_usuarios; 
select * from db_usuarios.tb_usuarios;
delete from db_usuarios.tb_usuarios where usuario_id >=4 and usuario_id < 20 ;
update db_usuarios.tb_usuarios set usuario_name = "Gelvanne Assis Ross Oliveira", usuario_email = "gelvanne@msn.com", usuario_senha = "123456" where usuario_id = 2;




