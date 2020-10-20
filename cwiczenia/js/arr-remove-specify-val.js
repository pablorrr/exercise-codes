<script>
/*
Removing specify values from array

Write a JavaScript function to remove. 'null', '0', '""', 'false', 'undefined' and 'NaN' values from an array. Go to the editor
Sample array : [ 0, 15, false, -22, '',undefined, 47, null]
Expected result : [15, -22, 47]*/
//splice  info : Zmienia zawartość tablicy,
// dodając nowe elementy podczas usuwania starych elementów.

//slice- splice glowne rozniece: slice tylko tnie arr i string  splice tnie i zastepuje
//https://developer.mozilla.org/pl/docs/Web/JavaScript/Referencje/Obiekty/Array/splice
/*

start
Indeks od którego rozpoczynamy modyfikację tablicy.
deleteCount
Liczba całkowita określająca liczbę starych elementów tablicy do usunięcia. Jeżeli deleteCount wynosi 0, nic nie zostanie usunięte. W tym przypadku należy podać co najmniej jeden nowy element. W przypadku gdy parametr deleteCount nie został podany (druga forma składni podana powyżej, która jest rozszerzeniem SpiderMonkey), wszystkie elementy o indeksach wyższych lub równych index są usuwane.
itemN
Elementy dodawane do tablicy. Jeżeli nie określimy żadnych elementów, splice usunie tylko podaną liczbę elementów.

 */


var arr = [0, 15, false, -22, '', undefined, 47, null];
arr.forEach(function (item) {
        if (item == null || isNaN(item) || item == 0 || item == ''
            || item == false || item == undefined)
            arr.splice(arr.indexOf(item), 1);
    }
);
alert(arr);
</script>