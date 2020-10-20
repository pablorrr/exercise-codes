--not between, and
select nextcol, last_col from newtable where salary not between 400 and 600;
--in, order by, desc/asc
select salary, nextcol from newtable where manager_id in(200,205) order by the_job_id desc;
--like, %tring, %trin%, strin%
select * from newtable where nextcol like 'u%';
select * from newtable where nextcol like '%n';
select * from newtable where nextcol like '%kn%';
--in not in at one example usage
select * from newtable where the_job_id in(100,101,102, 103 ,104,105) and manager_id not in (205,206);
--Write a query to display the last name of employees whose name have exactly 8 characters.
select nextcol from newtable where nextcol like '________';
--Write a query to display the last name of employees having 'o' as the fourth character.
select nextcol from newtable where nextcol like '___o%';
--having count, group by- wybierz te wartosci kolumny last_col ktrych te same wartosci powtarzaja sie wiwecej niz --dwa razy,having zawsze wystepeuje w parze group by 
SELECT last_col FROM newtable GROUP BY last_col HAVING COUNT( the_job_id ) > 2 
--count without having, UWAGA NAWIAS MUSI SIE STYKAC Z FUNKCJA NACZEJ SYNTAX ERROR
select count(the_job_id), last_col from newtable;
--HAVING MAX 
select nextcol,salary from newtable group by nextcol having max(salary)>300 order by the_job_id desc;

/*stosowanie having ma sens tylko wtedy gdy wartosci z conajmniej jednej kolumny sa identyczne powtarzaajce sie duplikuja sie, wtedy z tej walsnie grupy warosci mozna wybrac max min sum avg i inne i przyrownac je z iinymi wartosciami poprzez =><>= itd */

--max bez having
select max(salary) as maxsal , nextcol from newtable where the_job_id >=104;

