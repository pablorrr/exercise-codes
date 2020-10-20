--select columns as alias
SELECT name 'NAME', surname 'SURNAME'FROM COUNTRIES;
--select unique  unrepeatable value in column
select distinct job_title from jobs;
--selelct with order , default is asc(increasingly)- od najmniejszego do najwiekszego
select property from managers order by salary;
--select with arth meth 
select salary * 2 from managers;
-- order by desc
select property from managers order by salary desc;
--select with math sql functions also usage  min(columnname), max(colname) etc.
select sum(salary) from managers;
--select limit
select salary from manegers  limit 1;