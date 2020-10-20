<script>
    /*38. Write a JavaScript function to move an array element from one position to another.
     Go to the editor
Test Data :
console.log(move([10, 20, 30, 40, 50], 0, 2));
[20, 30, 10, 40, 50]
console.log(move([10, 20, 30, 40, 50], -1, -2));
[10, 20, 30, 50, 40]   */
    function locateItem(arr, old_index, new_index){
        arr.splice(new_index, 0, arr.splice(old_index, 1)[0]);
        //parametr 0 dla splice oznaca ze nie zostanie usuniety zaden eleemnt a
        // dodany kolejny ktory jest 3 par
        return arr;
        //arr.splice(old_index, 1)[0]- zwroci dokladnie eleemnt dodawany
    }
    alert(locateItem([10, 20, 30, 40, 50], 1, 2));
    // 10,20,50,30,40 ,,,,   10,20,30,50,40]10,20,50,30,40
	/* array_name.splice()-  Zmienia zawartość tablicy, dodając nowe elementy podczas usuwania starych elementów.
	
	argumenty :
start
Indeks od którego rozpoczynamy modyfikację tablicy.- wskazuje ktory elemnt ma byc modyfikowany- usniecie lub przesuniecie

deleteCount

Liczba całkowita określająca liczbę starych elementów tablicy do usunięcia. Jeżeli deleteCount wynosi 0, nic nie zostanie usunięte. W tym przypadku należy podać co najmniej jeden nowy element. W przypadku gdy parametr deleteCount nie został podany (druga forma składni podana powyżej, która jest rozszerzeniem SpiderMonkey), wszystkie elementy o indeksach wyższych lub równych index są usuwane.
itemN

Elementy dodawane do tablicy. Jeżeli nie określimy żadnych elementów, splice usunie tylko podaną liczbę elementów.

Składnia*/
	
	
</script>