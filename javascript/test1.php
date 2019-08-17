<html>
    <head>
        <title>TODO supply a title</title>
    </head>
<body>
    <script>


function letTest() {
  let y = 1;
  if (true) {
    let y = 2;  // different variable
    console.log(y);  // 2
  }
  console.log(y);  // 1
}

let y = 'global';
console.log(this.y); // undefined
 </script>

</body>   
</html>
