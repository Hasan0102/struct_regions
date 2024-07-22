
<?php   include 'header.php'; 
include 'config.php';    


           
$sql = "SELECT *  FROM  regions ";
$result = $conn->query($sql);

?>




    
<!-------------------------------------------------------------------------------->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumbs-title">مناطق
                    <span>المملكة</span>
                </h2>
                <ul class="breadcrumb-list">
                    <li><a href="https://tech2030.jehat.sa">الرئيسية</a></li>
                    <li>محافظات المملكة
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------------------------------------->



<div class="libraries">
    <div class="container">
        <div class="card card-container">
            <div class=" row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title" data-aos="fade-up">
                        <h1> مناطق المملكة </h1>

                    </div>
                </div>
               
                       <div class="view overlay">
                            <img class="card-img" src="https://tech2030.jehat.sa/public/upload/202405191322لوجو-جندلة-شفاف.png">
                        </div>

                     

                    <?php
                    //<div class="view overlay">
                    //<img class="card-img" src="https://tech2030.jehat.sa/public/upload/202405191322لوجو-جندلة-شفاف.png">
                    //</div> after class card for img if we need
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo " <div class=\"col-lg-4 col-md-6 col-sm-12 mb-30\">
                                        <div class=\"card\">
                                        
                                        
                                        <div class=\"card-body\">
                                        <h1 class=\"card-title\">".$row['name']."</h1>
                                        </div>";
                                echo " <div class=\"button-one \">
                                        <a href=\"users.php?id=".$row['id']."\" class=\" \" 
                            role=\"button\" aria-pressed=\"true\">
                            <i class=\"fa fa-user\"></i>المحافظات والأعضاء</a>
                                </div></div></div>
                                
                                ";
                            }
                        } 
                    ?>
                    
                </div>
                                
                

            </div>
        </div>

    </div>
</div>




   <?php   include 'footer.php';     ?>