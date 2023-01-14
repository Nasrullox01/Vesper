<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="sass/style.css">
</head>
<body>
                <div class="container w-50 mt-4">
                        <div class="row">
                          <div class="col">
                            
                            <form action="">

                           <div class="pt-3 border bg-light">
                                <center><h2>SignUp</h2></center>
                                <hr>
                              <div class="container">
                                <center><h5>SIGNUP TO CONTINUE</h5></center>
                                <h5 class="ms-5">Username</h5>
                                <div class="row">
                                        <div class="col-lg-10">
                                                <input id="inp" name="inp11" class="form-control ms-5" type="text" placeholder="Name or Nickname">
                                        </div>
                                </div>
                                
                                <h5 class="ms-5">Email</h5>
                                <div class="row">
                                        <div class="col-lg-10">
                                                <input id="inp1"  name="inp12" class="form-control ms-5" type="text" placeholder="email@example.com">
                                        </div>
                                </div>
                                
                                <h5 class="ms-5">Password</h5>
                                <div class="row">
                                        <div class="col-lg-10">
                                                <input id="inp2"  name="inp13" class="form-control ms-5" type="password" placeholder="Creat your new password">
                                        </div>
                                </div>
                                <input type="checkbox" onclick="myFunction()" class="ms-5 mt-4"><h6 class="d-inline-flex ms-2" onclick="myFunction()">Show Password</h6>
                                <div class="row">
                                        <div class="col-lg-10">
                                                <a href="./login.php"><input name="btn11" class="btn btn-success" type="submit" value="Signup"></a>
                                        </div>
                                </div>
                                <div class="pb-3"></div>
                              </div>
                           </div>
                           </form>


                           <?
                           
                           if(isset($_GET["btn11"]))
                           {
                                $name = $_GET["inp11"];
                                $email = $_GET["inp12"];
                                $password = $_GET["inp13"];

                                $ulash = mysqli_connect("localhost","root","","vesperr") or die("Bazaga ulanmadi");
                                $yoz = "insert into signup (name,email,password) values ('{$name}','{$email}','{$password}')";

                                $r = mysqli_query($ulash,$yoz) or die(mysqli_error($ulash));
                                
                           }
                           
                           
                           ?>



                          </div>
                        </div>
                </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
</body>
</html>