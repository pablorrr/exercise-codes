<script>
    // poniższe przykłady zwrócą true
    //  alert(Array.isArray([]));
    Array.isArray([1]);
    Array.isArray(new Array());
    // Mało znany fakt: Array.prototype sam w sobie jest tablicą:
    Array.isArray(Array.prototype);

    //in case when Array.isArray id not acessable  taken from MDN  
    if (!Array.isArray) {
        Array.isArray = function(arg) {
            return Object.prototype.toString.call(arg) === '[object Array]';
        };
    }
    // alert(Array.isArray(new Array()));
    //SOLUTION FROM  w3rsources
    var is_array = function(input) {
        if (toString.call(input) === "[object Array]")
            return true;
        return false;
    };
    //  alert(is_array('w3resource'));
    // alert(is_array([1, 2, 4, 0]));
    //my solution
    var checkArr =  function (arr){
        return Array.isArray(arr);
    }
    //  alert (checkArr(90));
	
	
	
    //save all off eleements of array till index number - rest remove with elemnt index
    var myCar = ["one", "two", "cherry condition", "purchased 1997"];
    var retriveFirEls = function (arr, nIndex){
        if(nIndex <= arr.length)
            return arr.slice(0,nIndex);
        else {
            alert("wrong n number index");
            return false;
        }
    }

    // alert(retriveFirEls(myCar,5));- error
    // ES6 VERSION
    var retriveFirEls =  (arr, nIndex) => {
        if(nIndex <= arr.length)
        return arr.slice(0,nIndex);
        else {
        alert("wrong n number index");
        return false;
    }

    }
    //  alert(retriveFirEls(myCar,5));
    //arr join ,create string from arr
    var stringCreate = function (arr){
        return arr.join();
        //posibilities of usage toString().
    }
    var myCar = ["one", "two", "cherry condition", "purchased 1997"];
    // alert(stringCreate(myCar));
	
	
    if (typeof(stringCreate(myCar))==="string")
        // alert("ists ok");
	
	
        //ES6 version
        var stringCreate = arr => arr.join();
    var myCar = ["one", "two", "cherry condition", "purchased 1997"];
    if(typeof(stringCreate(myCar))==="string")
        alert(stringCreate(myCar));
</script>