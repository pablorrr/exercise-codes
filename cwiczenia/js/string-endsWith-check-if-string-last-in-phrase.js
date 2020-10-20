<script>
    /*check if the given word is at end of the sentence*/
    var checkLastWord = function(mainString,stringToCompare){
        var splitMainString = mainString.split(" ");//zamiana string na tablice
		//konwersja ostatniego elemntu na male litery
        var lowerCaseSplit = splitMainString[splitMainString.length-1].toLowerCase();
        //case insesivity
        var lowerCaseStoCompare =  stringToCompare.toLowerCase();
        //case insensivity
        if(lowerCaseSplit === lowerCaseStoCompare)
            alert (lowerCaseStoCompare+" is last word in "+ mainString );
        else
            alert (lowerCaseStoCompare+" is NOT last word in "+ mainString );
    }
    checkLastWord("The best of the bests","bests" );
	
	
    //solution  from the  w3resources
    function endsWith(input, string) {
		//drugi paramter nie moze miec wiecej znakow niz pioerwszy
		//oblicznie od ktoregi oindexu ma sie zaczac wyszukiwanie, jest to ostani index
        var index = input.length - string.length;
        //to find value of the index at the end(of sentence)
        return index >= 0 && input.indexOf(string, index) > -1;//drugi par to index od ktorego ma sie //zacac wyszikiwanie
        /*return boleou true or false , index must be greater or equal to zero becaouse length of the given word cant be greater than sentence, if result of searching greater than -1 , means thers is desired string in phrase, second parameter as index is neede to start to serach string at the end of sentence*/
    }
    console.log(endsWith('JS string exercises', 'exercises'));
	
	//example with endsWith function, endsWith is case sensitve , can accept second parameter which is length of the string to check 
    function endsWithBuiltInJS(string,strToCheck){
        return string.endsWith(strToCheck);
    }
    console.log(endsWithBuiltInJS("I love basketball", "basketball"));
	
	/* parametry indexOf:
searchElement

Element do znalezienia w tablicy.
fromIndex

Indeks od którego ma zacząć się wyszukiwanie. Domyślnie 0 - przeszukana zostanie cała tablica. Jeżeli indeks będzie większy lub równy ilości elementów tablica nie zostanie przeszukana - funkcja zwróci -1. Jeżeli podana zostanie liczba ujemna zostanie dodany do niej rozmiar tablicy (np. podanie -5 oznacza przeszukiwanie od 5 elementu od końca). Jeżeli tak obliczony indeks jest mniejszy od zera przeszukana zostanie cała tablica. Uwaga, wyszukiwanie dalej będzie się odbywać w kierunku rosnących indeksów.	*/
	
</script>