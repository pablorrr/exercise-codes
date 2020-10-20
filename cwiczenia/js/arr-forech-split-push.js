<script>
    /*. Write a JavaScript program which accept a number as input and insert dashes
    (-) between each two even numbers. For example if you accept 025468 the output
     should be 0-254-6-8. niedokonczone!!!!!!*/
   function splitDash(digit){
    
      var arr  = digit.split('');
	 
	  
        var newArr = new Array(digit.length);
		 
         arr.forEach(function(item, index){
		 if(index-1 % 2 !==0 && item % 2 == 0 )
		 newArr.push(item +'-');
		 else
		  newArr.push(item);
		 });
		
		
		 return newArr.toString().replace( /,/gi, '').slice(0,-1);
		 //zamien wszytskie(czyli globalnie - g) znaki: / , na  spacje
	 	// i -    case insenstive - niewrazliwy na wielkosc znakow
		 //str replace accepts only regular exp
         //example result 0-254-6-8
        
    }
	
//string replace JS INFO https://www.w3schools.com/jsref/jsref_replace.asp
console.log(splitDash('025468'));	
	
 

</script>