<
script >
/*uncapitalize first letters in every single word in the sentence*/
var uncapitalizerWords = function (mainString) {
    var tableOfWords = mainString.split(" ");//stywoerzenie tablicy
    var readyString = " ";
    tableOfWords.forEach(function (item) {
            readyString += item.charAt(0).toLowerCase() + item.slice(1) + "  ";
        }
    );
    return readyString;
}
alert(uncapitalizerWords("I Love Football"));

//solution from  w3resources
function unCapitalize_Words(str) {
    return str.replace(/\w\S*/g, function (txt) {
            return txt.charAt(0).toLowerCase() + txt.substr(1).toLowerCase();
        }
    );
}

console.log(unCapitalize_Words('Js String Exercises'));
/* string.replace- zamienia znaki sring za pomaca wyr reg ktre okresla wzorzec jakie steringi maja zamieniane(likwidowane), drugi parametr callback w ktrym okreslane sa leementy nowe zastepujace */
</script>