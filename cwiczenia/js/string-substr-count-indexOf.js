<script>
/* policz ile razy powtarzja sie te same wyrazenia */

    var searcher= function(string, searchItem){
        var counter=0;
        //var indexItem =0;
        if (string.indexOf(searchItem)!=-1){//jesli dane wyraznie znajduje sie w tablicy lub w stringu
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
        var count = string.match(regSearch).length;
        return count;
    }
    alert(stuckoverSearch("I like fox fox fox","f") );
	/* lastindexOf - pobiera ostani index w tablicy 
	match - porownuje watyosc z e wzrocem reg exp , zwraca odpowiednio tru  lub false*/
</script>