<
script >
//merging arr
var arr1 = [2, 3, 4, 5, 6];
var arr2 = [1, 7, 8, 2, 9];
arr2.forEach(function (item) {
    arr1.push(item);
});
var mergedArr = arr2
alert(mergedArr);


//find duplicates
var arrayDupl = [1, 7, 8, 2, 9, 2, 1];
var dupl = [];
for (var i = 0; i < arrayDupl.length; i++) {
    for (var j = i + 1; j < arrayDupl.length; j++) {
        if (arrayDupl[i] === arrayDupl[j])
            dupl.push(arrayDupl[i]);
    }
}
alert(dupl);
alert(DupArr)
< /script>