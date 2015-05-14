create database IF NOT EXISTS acthouse_pg_shortclass;
use acthouse_pg_shortclass;
 
create table IF NOT EXISTS pure_chats (
    id int not null auto_increment primary key,
    name varchar(255),
    message text,
    created datetime
);