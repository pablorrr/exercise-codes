<script>
    /*check if the given word is at beginnng of the sentence*/
    var checkFirstWord = function(mainString,stringToCompare){
        var splitMainString = mainString.split(" ");
        var lowerCaseSplit = splitMainString[0].toLowerCase();
        //case insesivity
        var lowerCaseStoCompare =  stringToCompare.toLowerCase();
        //case insensivity
        if(lowerCaseSplit === lowerCaseStoCompare)
            alert (lowerCaseStoCompare+" is first word in "+ mainString );
        else
            alert (lowerCaseStoCompare+" is NOT first word in "+ mainString );
    }
    checkFirstWord("The best of the bests","the" );
	
    //solution  from the  w3resources
    function startsWith(input, string) {
        return input.indexOf(string) === 0;//return true if searching index  equal to null
    }
    console.log(startsWith('js string exercises', 'js'));
	
	
	// solution with nuilt infunction in JS
	function startsWithBuitlJS(string,strToCheck){
		
		return string.startsWith(strToCheck);
		
	}
	 console.log(startsWithBuitlJS('js string exercises', 'js'));
	
	
</script>