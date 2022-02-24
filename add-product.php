<?php include("db.php"); ?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCANDINAVIAN ASSESMENT</title>
    <!--- Bootstrap CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="header"style="margin-top:50px;">
        
        <div class="alignButton" style="  border-bottom: 1px solid black; width: 90%; margin: 0 auto;">
            <a style="margin-left:30px;text-decoration:none;color:black;font-size:30px;" href="index.php">Product ADD</a>           
        </div>
 
        
    </div>
        <script>
            function validateForm() {
                var x = document.forms["product_form"]["sku"].value;
                if (x == "") {
                    alert("Description must be filled out");
                    return false;
                }
                var x = document.forms["product_form"]["name"].value;
                if (x == "") {
                    echo("Name must be filled out");
                    return false;
                }
                var x = document.forms["product_form"]["price"].value;
                if (x == "") {
                    alert("Price must be filled out");
                    return false;
                }
            }
        </script>              
        <script>
            function toggleFields() {
                var productType = document.getElementById('productType').value;
                var fields = document.querySelectorAll('[data-if-prod-type]');
                
                fields.forEach(function (field) {
                    if (field.dataset.ifProdType === productType) {
                        field.style.display = '';
                    } else {
                        field.style.display = 'none';
                    }
                });
            }

            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('productType').addEventListener('change', toggleFields);
                
                // Run the toggle function when the DOM is ready loading,
                // so that fields that are not relevant to #prod_type's
                // initial value are hidden.
                toggleFields();
            });

        </script>


<div class="container p-2">
    <div style="display:flex;justify-content:center; align-items: center;"class="row">
        <div class="col-md-3"style="display:flex;justify-content:center; align-items: center;padding-top: 60px;">
            <div class="card card-body">
                
                <form id="product_form" action="save_product.php" method="POST" >
                    <div class="form-group">
                    <div class="col">
                        <input style="margin:10px;" id="sku" type="text" name="sku" class="form-control" placeholder="Enter SKU Code" required>
                       
                        <input style="margin:10px;" id="name" type="text" name="name" class="form-control" placeholder="Enter Product Name"required>
                    </div> 
                        
                    <div class="col">
                        <input style="margin:10px;" id="price" type="number" name="price" class="form-control" placeholder="Enter Price"required>
                                               
                        
                        <select style="margin:10px;" id="productType" value='prod_type' name="prod_type" class="form-control" >
                            <option value="">Select Product Type</option>
                            <option value="DVD">DVD</option>
                            <option value="BOOK">Book</option>
                            <option value="FUR">Furniture</option>
                        </select>
                    </div>
                        
                        <input style="margin:10px;" id="size" type="number" name="dvd_size" class="form-control" placeholder="Enter DVD Size" data-if-prod-type="DVD">
                        
                        <input style="margin:10px;" id="weight"type="number" name="book_weight" class="form-control" placeholder="Enter Book Weight" data-if-prod-type="BOOK">
                        
                        <div data-if-prod-type="FUR">
                        <input style="margin:10px;" id="height" type="number" name="fur_h" class="form-control" placeholder="Enter Furniture Height">
                        
                        <input style="margin:10px;" id="width"type="number" name="fur_w" class="form-control" placeholder="Enter Furniture Width">
                        
                        <input style="margin:10px;" id="length"type="number" name="fur_l" class="form-control" placeholder="Enter Furniture Length">
                    </div>
                    <div style="display:flex;justify-content:space-around;"class="buttonContainer">
                        <input type="submit" name="save_product" class="btn btn-success " value="Save" onclick="window.location.href='index.php'">
                        <input type="button" name="cancel" class="btn btn-danger " value="Cancel" onclick="window.location.href='index.php'" >                        
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
   <footer style="font-size: 18px; text-align: center; border-top: 1px solid black; width: 90%; padding: 10px 0px; margin-top: 10px" class="position-absolute bottom-0 start-50 translate-middle">
        Scandiweb Test Assignment

    </footer>

<!--- Bootstrap JS --->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html> 
    