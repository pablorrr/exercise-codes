<script>
    /* finding sub text in text by reg exp with search method
    (no indexOf or substring), function must be case insensitive , notice:"i" para,eter within regexp*/
     */
    var searcher = function(mainString, stringToFind){
        var result = mainString.search(new RegExp(stringToFind, "i"));
        //i  oznaza case insensitive
        if (result > 0 )
            alert(mainString+ " contains " + stringToFind +" and its matched");
        else 
            alert(mainString+ " DOESNT contain " + stringToFind +" and its NOT matched");
    }
    searcher("I love football", "basketball");
	
	/* same to do but with includes built in JS  */
	
	function includesBuiltInJS (string, strToCheck){
		
		return string.includes(strToCheck);//return true or false
		//includes can accept second parameter to specify starting position to search
	}
	
	console.log(includesBuiltInJS ("I love football", "love"));
	
	/* same to do but with match method JS with REG EXP*/
	
	function matchJS(string, regExp){
		
		return string.match(new RegExp(regExp,"i"));//"i" arg means that pattern is case insensitive
	}
	console.log( matchJS ("I love football", "love"));
	/*string_name.search(new RegExp(string_to_find_name,'i'))  */

//serach() info https://www.w3schools.com/jsref/jsref_search.asp
//search vs match search obsluguje wyr reg jak i zwykle stringi  match tylko reg exp ,
//search zwraca pozycje odnalezionego eleemntu oraz -1 jesli go nie ma
//match true lub flase w zaleznoci czy eleemnt wystepuje w lancuchu czy tez nie

</script>