<script>
    /*check given index represent lowercase letter*/
    var checkLowerCase = function(mainString,index){
        return mainString.charAt(index).toLowerCase() === mainString.charAt(index);
    }
    alert(checkLowerCase("Is that true ?", 2));
	/* string.charAt(index)- pracuje na lancuchach - przyjmuje dany index w lancuchy i zwraca znak char przy tym indexie */
</script>