create table if not exists countries (
id int,
name varchar(155),
surname varchar(255)
);

desc countries;
--default
create table if not exists duplicate_countries like countries;

desc duplicate_countries;

create table if not exists countriess(
name_id int not null,
name varchar(34) not null,
salary int not null
check(salary<=250)
);

desc countriess

CREATE TABLE IF NOT EXISTS countries ( 
COUNTRY_ID varchar(2) NOT NULL UNIQUE PRIMARY KEY,
COUNTRY_NAME varchar(40) NOT NULL,
REGION_ID decimal(10,0) NOT NULL
);
--inserting first way
insert into countries values ('ui','opiopi',12234);

SELECT * FROM countries;

--duplicate in first way
CREATE TABLE IF NOT EXISTS countries ( 
COUNTRY_ID varchar(2) NOT NULL UNIQUE PRIMARY KEY,
COUNTRY_NAME varchar(40) NOT NULL
);


--inserting second way
insert into countries (country_id,country_name) values (89,'ui');
SELECT * FROM countries;

--insert 3 rows in one insert statement
INSERT INTO countries VALUES('C0001','India',1001),
('C0002','USA',1007),('C0003','UK',1003);
SELECT * FROM countries;

--duplicate in second way
CREATE TABLE IF NOT EXISTS countries ( 
COUNTRY_ID varchar(2) NOT NULL UNIQUE PRIMARY KEY,
COUNTRY_NAME varchar(40) NOT NULL
);

CREATE TABLE IF NOT EXISTS country_new
AS SELECT * FROM countries;

SHOW COLUMNS FROM country_new;

SELECT * FROM country_new;


/* Write a SQL statement to insert one row in jobs table to ensure that no duplicate value will be entered in the job_id column */

CREATE TABLE IF NOT EXISTS jobs ( 
JOB_ID integer NOT NULL UNIQUE , --no possibilities to enter same value second time
JOB_TITLE varchar(35) NOT NULL, 
MIN_SALARY decimal(6,0)
);
INSERT INTO jobs VALUES(1001,'OFFICER',8000);
INSERT INTO jobs VALUES(1001,'OFFICER',8000);

/* creating table with autoincrementing primary key and default value if is not given in second column and insert values to this table*/

create table if not exists newtable(

the_job_id integer not null auto_increment  primary key,
nextcol varchar(60) not null default 'uknown',
last_col varchar(40) not null
);

insert into newtable values (100,'city', 'string_name');
insert into newtable (last_col) values ('the string');

select * from newtable;
show columns from newtable;






