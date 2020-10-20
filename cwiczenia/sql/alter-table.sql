--rename existing table
alter table managers rename new_managers;
--add colunn as first
alter table managers add column ID int not null  first
-- after column
alter table managers  add column new_column varchar(26) after ID;
--mysql difference beeween 0 and NULL , 0 as mathematical value of column , NULL no valaue at all

--change data type in specify column
alter table managers modify functionality text;
--remove columns from table
alter table managers drop ID;
--change name  of the column
alter table managers change functionality property varchar(25);
--add primary key, primary key can be only one if exists before must be remove
--uwaga problemy nie dziala z istniejacymi tabelami njprwd istnijacer primary key i autoincrement trudno ususnac i /*powodije to kolizje, do cwiczen najkepeiej stworzyc nowa table nbez autoincrement lub primary za pomoca interfejsu my php admin*/
ALTER TABLE the_newest add primary key (first);
--przeniesinie primary z jednej kolumny na inna
ALTER TABLE  the_newest DROP PRIMARY KEY ADD PRIMARY KEY (second);
--create foreign(klucz zewnetrzny tabeli laczacy z primary z innej tabeli)
alter table the_newest add foreign key (outerID) REFERENCES newtable(the_job_id);