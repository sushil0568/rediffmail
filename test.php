<!--
9
8 9 
7 8 9
6 7 8 9
5 6 7 8 9 
4 5 6 7 8 9
3 4 5 6 7 8 9
2 3 4 5 6 7 8 9
1 2 3 4 5 6 7 8 9-->

<?php
//echo $x = 9; echo"<br/>";
for($i=9;$i>=1;$i--)
{
    echo $i;
    
    for($j=$i;$j<9;$j++)
    {
        echo $j+1;
    }
    echo "<br/>";
}
$w ="hello";
echo "$w, hello world";
?>
<script type="text/javascript">
//if (navigator.cookieEnabled)
//   alert("ON");
//else
//   alert("OFF");

if (typeof jQuery != 'undefined') {  
    // jQuery is loaded => print the version
    alert(jQuery.fn.jquery);
}

var data = '[{"a":1,"b":2,"c":3},{"a":4,"b":5,"c":6},{"a":7,"b":8,"c":9}]';

function add(d) {
  console.log(JSON.parse(d));
}

add(data);

</script>