<script >
/* Write a JavaScript function to merge two arrays
and removes all duplicates elements. Go to the editor
 */
function noDupl(array1, array2) {
    array2.forEach(function (item) {
            array1.push(item);
        }
    );
    var arrMerged = array1;

    var noDuplArr = [];
    arrMerged.forEach(function (item) {
            if (!noDuplArr.includes(item))
                noDuplArr.push(item);
        }
    );
    return noDuplArr;
}
var arr = [1, 2, 3];
var arra = [2, 30, 1];
console.log(noDupl(arr, arra));
</script>