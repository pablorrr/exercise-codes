<script>
    /*Write a JavaScript function to filter false, null, 0 and blank values from an array. Go to the editor
Test Data :
console.log(filter_array_values([58, '', 'abcd', true, null, false, 0]));
[58, "abcd", true]*/
    //filter info https://developer.mozilla.org/pl/docs/Web/JavaScript/Referencje/Obiekty/Array/filter
    //filter tworzy nowa tablicd  nie modif starej, przerabia kazdy elemnt z osoban callabckiem
    //map przetwarza elementy starej orig tablicy
    function filter_array_values(arr){
        return arr.filter(function(item){
            if( item !=0 && item != false && item!= null && item != '  ')
                return item;
        }
                         );
    }
    alert( filter_array_values([58, '', 'abcd', true, null, false, 0]));
    /*40. Write a JavaScript function to generate an array
     of specified length, filled with integer numbers,
      increase by one from starting position. Go to the editor
     */
     */
Test Data :
console.log(array_range(1, 4)); 
[1, 2, 3, 4]
console.log(array_range(-6, 4));
[-6, -5, -4, -3]*/
    function createArr (start,len) {
        var array = [];
        for (var i= 0; i<len-1 ; i++ ){
            array.unshift(start);//xdodoaje el na poczarek push na koniec
            //you can use array.push
            // array[i]= start;
            start = start+1;
        }
        return array.reverse();
        //because array.shift usage
    }
    alert(createArr(-6,7));
    /*41. Write a JavaScript function to generate an array between two integers of 1 step length. Go to the editor
Test Data :
console.log(rangeBetwee(4, 7)); 
[4, 5, 6, 7]
console.log(rangeBetwee(-4, 7));
[-4, -3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7]
Click me to see the solution*/
    //my wrong solution
    function createAr (start,end) {
        var array = [];
        if(start>0){
            for (var i= 0; i<=end+1-start+1 ; i++ ){
                array[i]= start;
                start = start+1;
            }
            return array;
        }
        else{
            //abs z ujemnych robi dodatnie
            start =Math.abs(start);
            alert(start);
            for (var i= 0; i<start+1+end+1 ; i++ ){
                array[i]= start;
                start = start+1;
            }
            return array;
        }
    }
    alert(createAr(-6,7));
    //w3resurce solution
    function rangeBetwee(start, end) 
    {
        if (start > end) {
            var arr = new Array(start - end + 1);
            for (var i = 0; i < arr.length; i++, start--) {
                resarrult[i] = start;
            }
            return arr;
        }
        else 
        {
            var arro = new Array(end-start+1);
            for (var j = 0; j < arro.length; j++, start++) 
            {
                arro[j] = start;
            }
            return arro;
        }
    }
    console.log(rangeBetwee(4, 7));
    console.log(rangeBetwee(-4, 7));
</script>