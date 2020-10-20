<script>
    /* string comparison in JS*/
    var comparison = function(firstString, secondString){
        firstString = firstString.toLowerCase();
        secondString =  secondString.toLowerCase();
        if(firstString.localeCompare(secondString)==0)//jesli znaki sa takie same
            //alert("these strings are equal "+firstString+ " and "+secondString);
            return true;
        else 
            //alert("these strings are NOT equal "+firstString+ " and "+secondString);
            return false;
    }
    console.log(comparison("abDC","Abdc"));
    //solution from w3resources
    function compare_strings(str1, str2)
    {
        var areEqual = str1.toUpperCase() === str2.toUpperCase();
        return areEqual;
    }
    console.log(compare_strings('abcd', 'AbcD'));
    console.log(compare_strings('ABCD', 'Abce'));
	
	/* localcompare porownuje kolejnosc wystepowania pierwszego znaku w alfabecie w dowoch poroiwnywanych lancuchach
zwraca liczby - 0 : jesli znaki sa taskie ssaame
				 1: lub inne dodatnie jesli string w aargumencie wystepuje przed tym co jest [o lewej stronie
				 
				 -1: lub inna ujemna */
	//localeCompare info https://www.w3schools.com/jsref/jsref_localecompare.asp
</script>