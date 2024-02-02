<?php  
$title = 'Exercise 3: Variable, Strings & Operators';

include "header.php";?>

<div class="content-white">
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
            <form><br>
                    <div class="form-group row pb-3 ">
                        <label for="inputFirstName" class="col-sm-2 col-form-label">First Name:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputFirstName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputLastName" class="col-sm-2 col-form-label">Last Name:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputLastName">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row" style="text-align: left;">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><input class="btn-bottom" type="button" value="Submit"></button></div>
                        </div>
                    </div>
                </form>
                <h1 class="pt-4">Table</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry</td>
                        </tr>
                    </tbody>
                 </table>

                 <h1>Variable</h1>
                 <?php 
                    $str1 = 'Hello';
                    $str2 = 'World';

                    echo $str1." ".$str2;
                    echo "<br>";
                    echo strlen($str1.$str2);
                 ?>
                 <h1 class="pt-4">Numbers</h1>
                 <?php
                    $numb1 = 298;
                    $numb2 = 234;
                    $numb3 = 46;

                    echo $numb1 + $numb2 + $numb3;
                 ?>

                <h1>Browser Detection</h1>
                <?php
                    echo $_SERVER["HTTP_USER_AGENT"];
                    
                ?>
                <h1>Footer modification times</h1>
                <?php

            
                    echo date("d F Y H:i:s.", filemtime('footer.php'));
                
                ?>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"?>