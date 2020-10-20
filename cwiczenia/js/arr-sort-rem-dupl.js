<script>
    /*Write a JavaScript function to find the unique elements from two arrays. Go to the editor

Test Data :
console.log(difference([1, 2, 3], [100, 2, 1, 10]));
["1", "2", "3", "10", "100"]
console.log(difference([1, 2, 3, 4, 5], [1, [2], [3, [[4]]],[5,6]])); 
["1", "2", "3", "4", "5", "6"]
console.log(difference([1, 2, 3], [100, 2, 1, 10])); 
["1", "2", "3", "10", "100"]*/ 
    
 var arr1 = [1, 2, 3] ;
 var arr2 =  [100, 2, 1, 10];   
    
  arr1.forEach(function(item){
        if(!arr2.includes(item))//wpisz tylke te eleementy ktore sie nie powtwrzaja
           arr2.push(item);
    });
var array = arr2;
    array.sort(function (a, b) {//sortuj rosnaco(asc)
     return a - b;//return b-a; zwrociłby malejaco(desc)
});
    alert(array);
    /* includes - JS - przyjmuje wyszukiwana wartosc w tablicy, zwraca false jesli jej nie znajdzie
	   foreEach - przyjmuje callaback ktory przyjmuje -eleemnt,index,array  , przetwarza kazdy leemnt tablicy patrz	url:https://developer.mozilla.org/pl/docs/Web/JavaScript/Referencje/Obiekty/Array/forEach
	   zwraca cala tablice przetworzona
	   push - wstawia eleemnt na koniec tablicy*/
</script>