
//Array.from(); - crate array from string and digits when its looke like array

var myArrS = Array.from("ABCDEFG");
console.log(myArrS);

//taken from https://developer.mozilla.org/pl/docs/Web/JavaScript/Referencje/Obiekty/Array/from
function f() {
  return Array.from(arguments);//tworzy ablice z ciagow tabliciopodobnych
}console.log(f(1, 2, 3));

// Using an arrow function as the map function to
// manipulate the elements
console.log(Array.from([1, 2, 3], x => x + x));      
// [2, 4, 6]
/***********************************************/


//every()-check every single val(by callback test) of arr ,
// when current el its false, method its stopped and return false
//every return bolleau do not change original array

var arr1=[10,12,14];

var res =arr1.every(function(el, index, arr){
	return el >= 10;
});

console.log(res);//true

var arr1=[1,2,3,10,12,14];

var res =arr1.every(function(el, index, arr){
	return el >= 10;
});

console.log(res);//false
/***************************************************/

//fill() fill up old array with new single reapetable  value

var array = [1,2,3,4,5,6,7];//array must be defined before

console.log(array.fill(1));//fill array with 1
console.log(array.fill(1,3));//fill array with 1 starts from 3-rd eleemnt
console.log(array.fill(1,3,5));//fill arr with 1 starts from 3-rd till 5-th el

/*******************************************************************/

//find()- return FIRST element which matches test within callback function

var array = [1,2,3,4,5,6,7];

var foundedEl = array.find(function(el){
	
	return el < 3;
	
});

console.log(foundedEl);//retunrs 1

/*********************************************************************************/
//findIndex() returns first index when element matches test within callback function

var array = [1,2,3,4,5,6,7];

var foundedIndex = array.findIndex(function(el){
	
	return el > 6;
	
});
console.log(foundedIndex);//returns 6

/**********************************************************************************/
//keys() resturns object ierator of arra keys works only with iterator functions for e.g next()

var array = [1,2,3,4,5,6,7];
var iterator = array.keys()
console.log(iterator.next());//returns index 0
console.log(iterator.next());//returns index 1

/*****************************************************************************************/

//map()- transform every single el from arr within callback function and return new arr with new val of el

var array = [1,2,3,4,5,6,7];

var mapResult = array.map(function(el){
	
	return el * 2;//every single el will be multiply by 2
});

console.log(mapResult);

//wyciaganie pierwiastka
var array = [1,4,9];

console.log(array.map(Math.sqrt));

//podniesienie do kwadratu
var array = [1,4,9];
var poww = array.map( function(el){
	
	return Math.pow(el,2);
	
	});
	
console.log(poww);

/**********************************/

//pop() remove last element from array , returns this removed el

var array = [1,2,3,4,5,6,7];

var lastEl = array.pop();

console.log(array);
console.log(lastEl);

/************************************************/
//some() check eleemnts in arr within callback ,
// return true when occurs matches of test, false when all el are
// not matched ,
// some() is opposite to every(), some accept callback with following par el, index, arr

var array = [1,2,3,4,5,6,7];


var resultSome = array.some(function(el){
	
	
	return el > 3;
});

console.log(resultSome);

/*************************************************/
//toLocaleString() conver date object and other values to locale string

var myDate = new Date;

console.log(myDate.toLocaleString());
console.log(myDate);

/************************************************************/

//toString() - converts arr to string
var array = [1,2,3,4,5,6,7];

console.log(array.toString());
var array2 = ['one','two','three'];

console.log(array2.toString());


/*************************************************/

//values()-oposite to keys, returns object iterator with values of arr,
//  works only with iterator method next()
var a = ['w', 'y', 'k', 'o', 'p']; 
var iterator = a.values();

console.log(iterator.next().value); // w 
console.log(iterator.next().value); // y 
console.log(iterator.next().value); // k 
console.log(iterator.next().value); // o 
console.log(iterator.next().value); // p





 