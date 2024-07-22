<?php include 'includes/header.php'; 
include 'config.php';    


$sql = "SELECT *  FROM  cities ";
$result = $conn->query($sql);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["pass"]==35114343)
    {// Get form data
    $name = $_POST["name"];
    $pos = $_POST["position"];
    $city = $_POST["city"];

        // Prepare and execute the SQL query
        $sql = "INSERT INTO users (name, position_id ,city_id) VALUES ('$name', '$pos','$city')";
        if ($conn->query($sql) === TRUE) {
            echo "تم التسجيل بنجاح!";
        } else {
            echo "حدث خطأ: " . $conn->error;
        }
    } else {
        
        echo "<br><br><h5 style=\"text-align: center; \"  > الرمز خاطئ</h5>";
        die();
    }
}


?>
<style>
        body {
            
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        select {
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            appearance: none; /* Remove default arrow */
            -moz-appearance: none; /* Firefox */
            -webkit-appearance: none; /* Safari */
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"><polygon points="0,0 10,0 5,10" fill="%23999"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 10px;
        }
        select:focus {
            outline: none;
            border-color: #007BFF; /* Change border color on focus */
        }
    </style>
<body class="rtl">
            <div class="row  m-1 pb-4 mb-3 ">
            <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
                <div class="page-header breadcrumb-header ">
                    <div class="row align-items-end ">
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb -->



        <div class="jumbotron shade pt-5">
            <h1>أضافه</h1>
            <a href="index.php"> الرئيسية     </a>

            <!-- form -->
            <hr class="mt-0 ">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                    <form class="p-2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

                        <div class="form-group">
                            <label for="name" style="color: black;"> الاسم </label>
                            <input type="text" class="form-control" name="name" required>
                        </div>

                        
                        <div class="form-group">
                        <label for="name" style="color: black;"> الوظيفة </label>
                            <select name="position"  required>
                              <option value="">الوظيفة      </option>
                              <option value="1">رئيس منطقة  </option>
                              <option value="2"> رئيس محافظة </option>
                              <option value="3"> عضو الفريق </option>
                            </select >
                        </div>
                        

                        <div class="form-group">
                        <label for="city" style="color: black;"> المحافظة </label>
                            <select name="city"  required>
                              <option value="">    المحافظة      </option>
                              <?php
                              if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "  <option value=\"".$row['id']."\">    ".$row['name']."     </option>    ";
                                }
                            }
                              ?>
                            </select >
                        </div>
                        <div class="form-group">
                            <label for="name" style="color: black;"> رمز التسجيل </label>
                            <input type="password" class="form-control" name="pass" required>
                        </div>

                        <button type="submit" class="btn btn-primary">حفظ<div class="ripple-container"></div></button>
                    </form>


                </div>
            </div>

        </div>






</body>















<?php include 'includes/footer.php' ; ?>