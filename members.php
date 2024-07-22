<?php   include 'header.php'; 
include 'config.php';    



$id=1;
           
           
$sql = "SELECT * FROM  cities where region_id=$id ";
$result = $conn->query($sql);
if (isset($_GET['cityid'])) {
    $cityid = $_GET['cityid'];
    $sqlc = "SELECT *,us.name as usname FROM  users as us inner join positions as ps on us.position_id=ps.id where us.city_id=$cityid";
    $resultc = $conn->query($sqlc);
} else {
    //$sqlc = "SELECT *  FROM  users where city_id in (Select id from cities where region_id=$id)";
    //$resultc = $conn->query($sqlc);
}


?>




    
<!-------------------------------------------------------------------------------->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumbs-title">المحافظات <span>والأعضاء</span></h2>
                <ul class="breadcrumb-list">
                    <li><a href="https://tech2030.jehat.sa">الرئيسية</a></li>
                    <li>المحافظات والأعضاء</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------------------------------------->
<main>


    <section class=" blog_area single-post-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-11 col-md-12">
                    <div class="hero__caption hero__caption2 text-center mb-50">
                        <h1 data-animation="bounceIn" data-delay="0.2s"> المحافظات والأعضاء  </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row d-flex">

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="row">

                              
                        <?php 
                        if ($resultc->num_rows > 0) {
                            while ($rowc = $resultc->fetch_assoc()) {
                                echo "<div class=\"col-lg-6 col-md-12 col-sm-12 posts-list\">
                            <div class=\"blog-author\">
                                <div class=\"card\">
                                    <div class=\"media-body\">
                                        <a href=\"#\">
                                            <h4 class=\"text-blk\"> الأسم :  ".$rowc['usname']."</h4>
                                        </a>
                                        <p class=\"text-blk position\">  ".$rowc['name']."</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>";
                               
                            }
                        }
                        ?> 




                        

                                                
                    </div>
                </div>



                <div class="col-lg-4 col-md-4 col-sm-12 posts-list">
                    <div class="blog_right_sidebar">
                        
                        <aside class="single_sidebar_widget post_category_widget  text-center">
                            <h4 class="widget_title">المحافظات</h4>
                            <ul class="list cat-list text-center">


                                
                                <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<li>
                                    <a href=\"members.php?cityid=".$row['id']."\" class=\"d-flex \">
                                        <p class=\" text-center\"> ".$row['name']."  </p>
                                    </a>
                                </li>";
                               
                            }
                        } 
                    ?>




                                
                            </ul>
                        </aside>
                    </div>
                </div>


            </div>
        </div>
    </section>
</main>




    <?php   include 'footer.php';     ?>