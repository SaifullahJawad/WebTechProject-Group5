<?php  

?>
<html>
<head>
<style>
table, td {
  border: 1px solid black;
}
</style>
</head>
<body>
  <form>

<p>Click the button to remove the first row in the table.</p>

<table id="myTable">
  <tr>
        <td>
          <img src="img4.jpg" alt="" height="100px" width="100px"><br>
       <a href="Cauliflower best havesting Seed">Cauliflower best havesting Seed</a>
        </td>
      </tr>
      <tr>
        <td>
          <img src="img5.jpg" alt="" height="100px" width="100px"><br>
          <a href="Cauliflower best havesting Seed">Cauliflower best havesting Seed</a>
        </td>
      
      </tr>
      <tr>
        <td>
          <img src="img7.jpg" alt="" height="100px" width="100px"><br>
          <a href="Best hervesting Corn seeds">Best hervesting Corn seeds</a>
        </td>
        
      </tr>
      <tr>
        <td>
          <img src="img6.jpg" alt="" height="100px" width="100px"><br>
          <a href="Best hervesting Corn seeds">Best hervesting Corn seeds</a>
        </td>
      </tr>
      <tr>
        <td>
          <img src="img3.jpg" alt="" height="100px" width="100px"><br>
          <a href="Best hervesting Corn seeds">Best hervesting Corn seeds</a>
        </td>

      </tr>
      <tr>
        <td>
          <img src="img1.jpg" alt="" height="100px" width="100px"><br>
          <a href="Best hervesting Corn seeds">Best hervesting Corn seeds</a>
        </td>
      </tr>
      <tr>
        <td>
          <img src="img2.jpg" alt="" height="100px" width="100px"><br>
          <a href="Best hervesting Corn seeds">Best hervesting Corn seeds</a>
        </td>
      </tr>
      <tr>
            <td>
          <?php  
          
          echo "deleted successful";


          ?>
        </td>
      </tr>
</table>
<br> 

<button onclick="myFunction()">Delete</button>
<script>
function myFunction() {
  document.getElementById("myTable").deleteRow(1);
}
</script>
</form>
</body>
</html>
?>