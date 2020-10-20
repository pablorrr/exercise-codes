--subqueries in context limited to one table
select nextcol, salary from newtable where salary > (select salary from newtable where the_job_id = 104);
--subqueries in context of two tables
select name, surname from countries where id in(select id from duplicate_countries where name = 'jason');
