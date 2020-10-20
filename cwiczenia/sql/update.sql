update newtable set nextcol = 'new job';

update newtable set nextcol = 'well done', last_col = 'also well done' where the_job_id = 100;

create table if not exists  managers (

internal_id int not null auto_increment primary key,
functionality  varchar(45) default 'uknown',
manager_id int not null
);

insert into managers values (100, 'manager', 200);
insert into managers (manager_id) values (201);

update newtable set nextcol = 'creation', last_col ='newave' where manager_id = (select manager_id from managers where functionality ='manager');


update newtable set last_col ='new value' where nextcol = 'new job' and manager_id = 205;

alter table newtable add column salary int not null default 300;

update newtable set salary = case the_job_id 
								when  101 then salary + (salary *.20)
								when  102 then salary + (salary *.30)
								else salary
							end
							
							where  the_job_id in (100,101,102,103);
							
							
alter table managers  add column salary int not null default 500;

update newtable, managers set newtable.salary = newtable.salary + 300,
							   managers.salary = managers.salary + 200
						
						
where newtable.manager_id = 200 and managers.manager_id = 200;

							
							
							
