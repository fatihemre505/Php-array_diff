<?php declare(strict_types=1) ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PHP || Arrays </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card bg-light">
                    <div class="card-header">
                        <h1 class="text-center fw-bold py-5">PHP array_diff</h1>
                        <p class="alert alert-primary"><?php
                         echo "my_array_diff ="."array_diff('Array1' , 'Array2')"; 
                        ?></p>
                              <p class="alert alert-primary"><?php
                         echo "my_array_diff ="."array_diff_assoc('Array1' , 'Array2')"; 
                        ?></p>
                    </div>
                    <div class="card-body">

                        <?php   

                    $arr1 = array(
                        "r1" => "red",
                        "b1" => "mavi",
                        "m1" => "magenta",
                        "g1" =>"toprak",
                        "s1" => "yeşil"
                    );
                    $arr2 = array(
                      "r1" => "red",
                      "s2" => "siyah",
                       "p2" => "pembe",
                       "y1" => "yellow"
                    );

                // value ları karşılaştırıp farklı olanı alır

                    $result  = array_diff($arr1 , $arr2);

   
                   print_r($result);


              echo "<hr>";

               // value  ve key leri karşılaştırır farklı olanları alır  
                  $result = array_diff_assoc($arr1,$arr2);


                 print_r($result);

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>