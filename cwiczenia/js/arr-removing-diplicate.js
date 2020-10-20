<script >
//removing duplicates , w3res solution
function removeDuplicates(num) {
    var x,
        len = num.length,
        out = [],
        obj = {};
    for (x = 0; x < len; x++) {
        obj[num[x]] = 0;
    }
    for (x in obj) {
        out.push(x);
    }
    return out;
}
var Mynum = [1, 2, 2, 4, 5, 4, 7, 8, 7, 3, 6];
result = removeDuplicates(Mynum);
console.log(Mynum);
console.log(result);


//solution from comments section
var arr1 = [3, 'a', 'a', 'a', 2, 3, 'a', 3, 'a', 2, 4, 9, 3];
console.log(arr1);
var uniqueArray = arr1.filter(function (elem, i, rep) {
        //rep jako alias dla tasblicy arr1
        return i == rep.indexOf(elem);
    }
)
alert(uniqueArray);


//removing duplicates from aarray my solution
var array = ["one", "two", "three", "four", "five", "six", "one", "five", "two"];
var newArr = [];
array.forEach(function (item) {
        if (!newArr.includes(item)) {
            newArr.push(item);
        }
    }
);
array = newArr;
alert(array);

/*array_name.filter(function(elem,index,array) - zwraca tablice w ktrej eleemnty przejda pozytywnie test  funkcji callback*/
//adds info roznice pomiedzy  affra filter array map
//https://medium.com/@c.mansour/the-difference-between-the-filter-and-map-array-methods-in-javascript-f8164f65fa5e
// map porzetworza kazdy element za pomaca dnego callback i zwroci nowa tablice
// filter nie przetwarza leemntu tylko go testuje za pomaca oeratorow ==, ===, <, >, !
//jesli dany element  przejdzie test jest dodoawany do nowej tablicy

</script>