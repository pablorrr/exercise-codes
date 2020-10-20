<script >
//sorting arrays in js
var arr1 = [3, 8, 7, 6, 5, -4, 3, 2, 1];

/*  function sorterASC(a,b){
//this function sorts in natural order asc , you can use sort() without it - same result
return a-b;
}*/
function sorterDESC(a, b) {
    //sorting natural oreder DESC(MALEJACO-OD NAJWIEKSZEGO DO NAJMNIEJSZEGO)
    return b - a;//return a-b - rosdnoca ASC(od najmniejszefo do najwieskzego)
}

alert(arr1.sort(sorterDESC));
//posiible to use callback to custom sort array
// Write a JavaScript program to find the most frequent item of an array
// .SOLUTION FROM w3resotces
var arr1 = [3, 'a', 'a', 'a', 2, 3, 'a', 3, 'a', 2, 4, 9, 3];
var mf = 1;
var m = 0;
var item;
for (var i = 0; i < arr1.length; i++) {
    for (var j = i; j < arr1.length; j++) {
        if (arr1[i] == arr1[j])
            m++;
        if (mf < m) {
            mf = m;
            item = arr1[i];
        }
    }
    m = 0;
}
console.log(item + " ( " + mf + " times ) ");


//indexOf INFO:https://www.w3schools.com/jsref/jsref_indexof.asp
//METODA PRACUJE NA STRINGACH JAK I ARRAYS
// wyszukuje podany eleement i i zwraca pozycje pierwszego znaku tego elementu
// PARAAMETRY  WYSZUKIWANY ELEEMNT  , POZYCJA STARTOWA DO WYSZUKIWANIA
// zwraca - 1 jesli dany element nie wystepuje
// pododbna fynckjca last IndexOF ORAZ FIRST iNDEX oF

//napisz funkcje ktor a zamaineia maale na duze i na odwtroit  w podanych stringach
var str = 'The Quick Brown Fox';
var UPPER = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var LOWER = 'abcdefghijklmnopqrstuvwxyz';
var result = [];
for (var x = 0; x < str.length; x++) {
    //zauwaz natychmiastowa konwersje  stringow na tablice - (str[x])
    if (UPPER.indexOf(str[x]) !== -1) {
        result.push(str[x].toLowerCase());
    } else if (LOWER.indexOf(str[x]) !== -1) {
        result.push(str[x].toUpperCase());
    } else {
        result.push(str[x]);
    }
}
console.log(result.join(''));//join aby polaczyc eleemntytablicy  przez  space i
// przekkonwertowac w  string


//my solution
//charAt info - zwraca wartosc znbaku w stringu po indexie
//https://www.w3schools.com/jsref/jsref_charat.asp
var str = 'The Quick Brown Fox';
var newArr = str.split(" ");//tworzenie tablicy

// alert( newArr[0]);
var array = [];
newArr.forEach(function (item) {
        array.push(item.charAt(0).toLowerCase() + item.slice(1, item.length).toUpperCase());
    }
);
alert(array.join(' '));

// printing  a sample 2-D array in ES 6 standard
//two dimensional arrays  contains  5 rows and  4 columns
var a = [[1, 2, 1, 24], [8, 11, 9, 4], [7, 0, 7, 27], [7, 4, 28, 14], [3, 10, 26, 7]];
for (var i in a) {//to samo co (var i=0; i<a.length; i++)
    console.log("row " + i);
    for (var j in a[i]) {//to samo co (var j= 0; j<a[i].length; j++)
        console.log(" " + a[i][j]);
    }
}

//sum square
function sum_square(array) {
    var sum = 0, i = array.length;
    while (i--)
        sum += Math.pow(array[i], 2);
    return sum;
}

console.log(sum_square([1, 2, 3, 4, 5]));
//array sum and prooduct - product array means result of multiply
// each other arrsay elemeents
//w3res solution
var array = [1, 2, 3, 4, 5, 6],
    s = 0,
    p = 1,
    i;
for (var i in array) {// ES6
    s += array[i];
    p *= array[i];
}
console.log('Sum : ' + s + ' Product :  ' + p);

/* array_name.slice(indexstart, indexend) - usuwa wybrane fragmenty tablicy , indexstart - odejmuje dany fragment z tym indexem i tym co jest przed nim(required), index_end- optional odejmuje ten fragemnt ktorry jzaczyna sie od sdtego inexu i t c jest za nim*/
</script>