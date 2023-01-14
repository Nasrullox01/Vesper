<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
   
<div class="container">
         <h1>One Page Crud Ajax PHP/Mysql</h1>
         <div class="row">
             <div class="col-xl-8 table-responsive h-50">
             <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
 
  
    <?
          $ulash = mysqli_connect("localhost", "root", "", "vesperr") or die("Ulanishda xatolik!");
          $olish = "select * from signup";
          $action = mysqli_query($ulash, $olish) or die(mysqli_error($ulash));
   
          while($mass = mysqli_fetch_array($action, MYSQLI_ASSOC))
          {
            echo "<tr>";
               echo "<td>".$mass["id"]."</td>";
               echo "<td>".$mass["name"]."</td>"; 
               echo "<td>".$mass["email"]."</td>";
               echo "<td>".$mass["phone"]."</td>";
               echo "<td>".$mass["address"]."</td>"; 
               echo "<td>"."<button>"."Edit"."</button>"."</td>"; 
               echo "<td>"."<button>"."Delete"."</button>"."</td>"; 
            echo "</tr>";

          } 
       ?>
  </tbody>
</table>
             </div>


    <?
       if(isset($_GET["btn11"])) 
       {
        $name = $_GET["inp11"];
        $email = $_GET["inp12"];
        $password = $_GET["inp13"];
        
        $ulash = mysqli_connect("localhost","root","","vesperr") or die("Ulanishda xatolik!");
        
        $r = "insert into signup (name, email, password) values('{$inp11}','{$inp12}','{$inp13}')";
        
        $query = mysqli_query($ulash, $r) or die(mysqli_error($ulash));
             if($query)
             {
                echo "ulandi";
             }
       } 
       
        $olish = "select * from signup";
        $act = mysqli_query($ulash, $olish) or die (mysqli_error($ulash));
    ?>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>