--inner join
/*do polaczenia dwoch table w jedna najlepeiej posluzyc sie przykladem gdzie istnieje  table z imnonami i nazwiskami oraz tablea zamowiionych towarow, musza byc wspolanepola kolumny najlepeiej id z tymi samymi powtrzalanymy wartosciami,te same wartosci id bda przypsowywyac wartosci z obydwu tabel do inona i nazwiska towar o tych saych id */

/*pi join wystepuje zawsze nazwa tablicy z prawj strony - druga tablica*/
--inner join polaczy tylko te wybrane pola-kolumny w ktorych id maja te same wartosci
select countries.name, zamowienie.towar  from countries inner join zamowienie on zamowienie.id = countries.id;


/*szablon:
select nazwa_tab_lewa_str.nazwa_kol , nazwa_tab_prawa_str.nazwa_kol from nazwa_tab_lewa_str inner join nazwa_tab_prawa_str on nazwa_tab_prawa_str.id = nazwa_tab_lewa_str.id (kolejnos nazw tablic przy prownananiach id bojonetna)
*/


--left join polaczy wszytskie dopasowane i te ktore nie maja tych samych wspolnych wartosci w id z lewej tablicy
select countries.name, zamowienie.towar  from countries left join zamowienie on zamowienie.id = countries.id;
-- right join wszytskie dopasowania w poplach id (identyczne wartosci w obydwu polach) oraz nie dopasowane wartosci z prawej drugiej tabeli (brak wspolnych wartosci w id)
select countries.name, zamowienie.towar from countries right join zamowienie on zamowienie.id = countries.id;
-- full join laczenie wszytskiego: dopasowane wartosci oraz niedpoasawone z obydwu tabel-njprwd moaja wersja db nie -obsluguje tego polecenia
select countries.name , zamowienie.towar from countries full join zamowienie on zamowienie.id = countries.id;
--self join polaczenie tej samej pojedynczej tabeli gdzie sa takie same dopasowania. tutaj: polacz mieszkancow tych --samych miast
/*SELECT A.CustomerName AS CustomerName1, B.CustomerName AS CustomerName2, A.City
FROM Customers A, Customers B
WHERE A.CustomerID <> B.CustomerID
AND A.City = B.City 
ORDER BY A.City;*/
select  a.name as name1 , b.name as name2,  a.city from countries a, countries b where a.id = b.id and a.city = b.city order by a.city;

/*The UNION operator is used to combine the result-set of two or more SELECT statements.

Each SELECT statement within UNION must have the same number of columns
The columns must also have similar data types
The columns in each SELECT statement must also be in the same order*/

--union

/*SELECT City FROM Customers
UNION
SELECT City FROM Suppliers
ORDER BY City;*/
select id from countries union select id from duplicate_countries;



