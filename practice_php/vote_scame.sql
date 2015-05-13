create database acthouse_pg_shortclass;
use acthouse_pg_shortclass
 
create table vote_yuru (
    id int not null auto_increment primary key,
    name varchar(255),
    created datetime
);