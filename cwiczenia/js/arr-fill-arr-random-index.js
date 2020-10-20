<script>
    //35 get random index from array
//math floor Zwraca największą liczbę całkowitą mniejszą od lub równą danej.
// Zwraca największą liczbę całkowitą mniejszą od lub równą danej.
//eg Math.floor(3.56); result 3
    var  arr = [1,2,3,4,5,6,7,8,9,0];
    function randomizeIndex (array){
        return array[Math.floor(Math.random()*array.length)];
    }
    alert(randomizeIndex(arr)) ;
    /*36. Write a JavaScript function to create a specified number of elements with pre-filled numeric value array. Go to the editor
Test Data :
console.log(array_filled(6, 0)); 
[0, 0, 0, 0, 0, 0]
console.log(array_filled(4, 11));
[11, 11, 11, 11]*/ 
    function createArray (elCount, elVal){
        var array = new Array(elCount);
        return array.fill(elVal);
    }
    alert(createArray(3,"value"));
</script>