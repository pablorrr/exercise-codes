<script>
/* policz ile razy powtarzja sie te same wyrazenia */

    var searcher= function(string, searchItem){
        var counter=0;
        //var indexItem =0;
        if (string.indexOf(searchItem)!=-1){//jesli dane wyraznie znajduje sie
            // w tablicy lub w stringu
            var posItem = 0;
            while(posItem < string.lastIndexOf(searchItem)){
                posItem+=string.indexOf(searchItem,posItem);
                counter++;
            }
            return counter;
        }
    }
    alert(searcher("I like fox fox fox","like"));
	
    //another  solution of same problem from stuckoverflow    
    var stuckoverSearch    = function(string, searchItem){
        var regSearch =  new RegExp(searchItem,"g");//g njprwd oznacza wyszukiwanie globalne
        //oznacza ot ze  wyszukuje w calym wyrazeniu nawet jesli spotka
        // po raz pierwszy dopasowane wyr nie zatrzymuje sie
        var count = string.match(regSearch).length;
        return count;
    }
    alert(stuckoverSearch("I like fox fox fox","f") );
	/* lastindexOf - pobiera ostani index w tablicy
	https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_lastindexof
	w przypadku gdy  wyszukiwane  stringi sie powtarzaja przy zwyklym uzyciu
	indexOf zwracany jest pierwszy dopasowaqny przy kast index of  ostatni dopasowany

	match - porownuje watyosc z e wzrocem reg exp , zwraca odpowiednio tru  lub false*/
</script>