<script>
   
    /* Write a JavaScript function to find an array contains a specific element.
     Go to the editor
Test data :
arr = [2, 5, 9, 6];
console.log(contains(arr, 5));
[True]*/
    
    function finder (arr, elToFind){
        return arr.includes(elToFind) ? alert(elToFind + " is in array")
            : alert(elToFind + " is not in array");
    }
    //inlcudes info https://www.w3schools.com/jsref/jsref_includes.asp
  // incxludes zwraca true lub flase w zaleznosci czy podany element w tablicy lub stringu
//sie znajduje lub nie
    //finder(noDupl(arr,arra) ,123);
    
    
    //find the highest value
    var newArr = [30,123,7,8];
   //reduce usage ver 
var Arr  = newArr.reduce(function(a,b){
    
    return a > b? a :b;
    });
    
    alert(Arr);
   //sort usage ver 
 var Arr  =   newArr.sort(function(a,b){return b-a;})[0];
 //zero index to specify first index as result,
// because this sortable whole array method and result must be //single
    
    alert(Arr);  
    
</script>