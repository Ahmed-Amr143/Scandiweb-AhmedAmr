<?php include("db.php"); ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCANDINAVIAN ASSESMENT</title>
    <!--- Bootstrap CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="position-relative">
    


    <div class="header"style="margin-top:50px;">  
     
    <form action="delete_product.php" method="post"> 
        
        <div class="alignButton" style="display:flex; justify-content:space-between; border-bottom: 1px solid black; width: 90%; margin: 0 auto; ">
            <h1 style="font-style: italic;margin-left:30px;text-decoration: inherit;color:black;font-size:35px;" href="index.php">Product List</h1>
           
            <div  class="alignButtons"style=" justify-content:flex-end;margin-right: 20px; margin-top:2px"> 

                
                <button  style="margin-right:50px;" type="button"  class="btn btn-primary" name="add-product"
                id="add-product-btn" onclick="window.location.href='add-product.php'"><b>ADD</b></button>  
               
                <button   style="margin-right:50px" id="delete-product-btn" type="submit" 
                name="mass_delete" class="btn btn-success">MASS DELETE</button>   
            
            </div>
           
        </div>
        
    </div>

    <div  class="py-5">
        <div class="container mb-5">
            <div class="row hidden-md-up" style="bottom:0">
             
            <?php

                $query = "SELECT * FROM list";
                $result_products = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result_products)) { ?> 
                
              
                <div class="col-sm-3 px:3">
              
                    <div class="card" style="margin:10px;padding:10px;width:175px; text-align: center; background-color: #9c9b9e; color: black;">
                        <input class="delete-checkbox" type="checkbox" name="check_list[]" value="<?php echo $row['id']; ?>">
                        
                        <label><?php echo $row['sku']; ?> </label>
                        <h5><?php echo $row['name']; ?></h5>
                        <p>$<?php echo $row['price']; ?></p>
                        <!--Conditional rendering depending on product type -->
                        <?php if ($row['prod_type'] == 'DVD'): ?>
                        <p>Size: <?php echo $row['dvd_size']; ?>MB</p>

                        <?php elseif ($row['prod_type'] == 'BOOK'): ?>
                        <p>Weight: <?php echo $row['book_weight']; ?> Kgs.</p>

                        <?php elseif ($row['prod_type'] == 'FUR'): ?>
                        <p> Dimensions:<?php echo $row['fur_h']; ?>x<?php echo $row['fur_h']; ?>x<?php echo $row['fur_l']; ?></p>  
                        <?php endif ?>

                    </div>
                </div>    
            <?php } ?>        
            </div>        
        </div>
    </div>
</form>
</div>

    <footer style="font-size: 18px; text-align: center; border-top: 1px solid black; width: 90%; padding: 10px 0px; margin-top: 150px; padding-border-right: 40px">
        Scandiweb Test Assignment

    </footer>


      




<!--- Bootstrap JS --->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html> 
    