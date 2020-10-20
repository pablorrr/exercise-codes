<script>
    //flattening arrays solutions from https://www.jstips.co/en/javascript/flattening-multidimensional-arrays-in-javascript/
    var myArray = [[1, 2],[3, 4, 5], [6, 7, 8, 9],4,7,8];
    // var newArr =  multiArr.reduce(function(prev, current){
    // return prev.concat(current) ;
    // });
    //  alert(newArr);
    ///////////////////////
    var myNewArray = myArray.reduce(function(prev, curr) {
        return prev.concat(curr);
    }
                                   );
    alert(myNewArray);
    // [1, 2, 3, 4, 5, 6, 7, 8, 9]
    var myNewArray3 = [];
    for (var i = 0; i < myArray.length; ++i) {
        for (var j = 0; j < myArray[i].length; ++j)
            myNewArray3.push(myArray[i][j]);
    }
    console.log(myNewArray3);
    // [1, 2, 3, 4, 5, 6, 7, 8, 9]
    //solution from w3resorces    
    var flatten = function(a, shallow,r){
        if(!r){
            r = []}
        if (shallow) {
            return r.concat.apply(r,a);
        }
        for(var i=0; i<a.length; i++){
            if(a[i].constructor == Array){
                flatten(a[i],shallow,r);
            }
            else{
                r.push(a[i]);
            }
        }
        return r;
    }
    console.log(flatten([1, [2], [3, [[4]]],[5,6]]));
    console.log(flatten([1, [2], [3, [[4]]],[5,6]], true));
	
	/* aaray.reduce()- dokonuje obliczen  na kazdym elemenrcie tablicyi zwraca zawsze ostatni wynik */
	url: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/Reduce
	parameters :
	callback
Function to execute on each element in the array, taking four arguments:
accumulator
The accumulator accumulates the callback's return values; it is the accumulated value previously returned in the last invocation of the callback, or initialValue, if supplied (see below).
currentValue
The current element being processed in the array.
currentIndex Optional
The index of the current element being processed in the array. Starts at index 0, if an initialValue is provided, and at index 1 otherwise.
array Optional
The array reduce() was called upon.
initialValue Optional
Value to use as the first argument to the first call of the callback. If no initial value is supplied, the first element in the array will be used. Calling reduce() on an empty array without an initial value is an error.
</script>