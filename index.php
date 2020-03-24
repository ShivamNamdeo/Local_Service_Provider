

<html>

<head>

<title>Home</title>

 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
  <br>
<h3 align="center">Registration For Local Service Provider</h3><br>


<!-----------------------------------------------------NAV BAR-------------------------------------------->

<nav class="navbar navbar-light bg-light">

  <a class="navbar-brand" href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_book_add">Register Shop</button></a>
  
  
</nav>
<nav class="navbar navbar-light bg-light">

  <input type="text" id="shop_name" onkeyup="shop_name()" placeholder="Search By Shop Name">
  <input type="text" id="shop_type" onkeyup="shop_type()" placeholder="Search By Shop Type">
  <input type="text" id="pin_code" onkeyup="pin_code()" placeholder="Search By Pincode">
  <input type="text" id="address" onkeyup="address()" placeholder="Search By Address">
  <input type="text" id="location" onkeyup="location()" placeholder="Search By Location">

</nav>


<!---------------------------------------------NAV BAR------------------------------------------------>



<!--------------------------------------------TABLE ---------------------------------------->

  <div>
 <div>
 
 <table  class="table" id="myTable">
 
 <tr>
  <th>S No.</th> 
  <th>Shop Name</th> 
 <th>Shop Type</th> 
  <th>Pincode</th> 
  <th>Address</th>
  <th>Location</th> 
  <th>Phone No</th> 

 </tr >

  <?php

  include 'connection.php'; 
 $q = "select * from users";

  $query = mysqli_query($conn,$q);

$count=0;

  while($res = mysqli_fetch_array($query)){$count++;
 ?>
 <tr>
 <td> <?php echo $count; ?> </td>
 <td> <?php echo $res['shop_name'];  ?> </td>
 <td> <?php echo $res['shop_type'];  ?> </td>
 <td> <?php echo $res['pin_code'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <?php echo $res['location'];  ?> </td>
 <td> 

  <a href="tel:<?php echo $res['phone_no']; ?>">Call Now</a>


  </td>

  


 </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>


<!---------------------------------------Search Table--------------------------------->

<script>
function location() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("location");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length+1; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function address() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("address");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function pin_code() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("pin_code");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function shop_type() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("shop_type");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function shop_name() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("shop_name");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<!-----------------------------------Search Table-------------------------------------->

<!--------------------------------------------TABLE  --------------------------------------->


<!----------------------------Model Add Book----------------------------------------------------------->

<!-- Modal -->
<div class="modal fade" id="exampleModal_book_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-------------------------------------------FORM---------------------------->



  
<form action="insert.php" method="post">
 <table class="table">

  <tr>
    <td>Shop Name : </td>
    <td><input type="text" name="shop_name" ></td>
  </tr>
  <tr>
    <td>Shop Type: </td>
    <td><input type="text" name="shop_type" required></td>
   </tr>

   <tr>
    <td>Pincode</td>
    <td><input type="text" name="pin_code" required></td>
   </tr>
   <tr>
    <td>Phone Number</td>
    <td><input type="number" name="phone_no" required></td>
   </tr>
   <tr>
    <td>Address</td>
    <td><input type="text" name="address" required></td>
   </tr>  
   <tr>
    <td>Location</td>
    <td><input type="text" name="location" required></td>
   </tr>  
   <tr>
    <td>Pincode</td>
    <td><input type="number" name="pin_code" required></td>
   </tr>  

    
   <tr>
    <td><input type="submit" value="Submit" class="btn btn-primary"></td><td></td>
   </tr>
  </table>
</form>


<!---------------------------------------------  FORM---------------------------->


      </div>
      
    </div>
  </div>
</div>
<!--------------------------------------------Model Add Book------------------------------------------------>




</body>

</html>


