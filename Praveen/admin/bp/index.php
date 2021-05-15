<!DOCTYPE html>
<?php
 
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
    $link = new \PDO(   'mysql:host=localhost;dbname=newdb;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
    
    $handle = $link->prepare('SELECT Month(time1) as month,SUM(unit_price * quantity) as total FROM order_item group by Month(time1) order by Year(time1)'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
        
    foreach($result as $row){
        array_push($dataPoints, array("x"=> $row->month, "y"=> $row->total));
    }
    $link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
    
?>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="ProfileB.css">
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "light1", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Income Per Month"
    },
    data: [{
        type: "column", //change type to bar, line, area, pie, etc  
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
</head>
<body>




<main>
    <section>
        <div class="rad-body-wrapper rad-nav-min">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="rad-info-box rad-txt-success">
                            <i class="fa fa-windows"></i>
                            <span class="heading">INCOME PER MONTH                                   </span>
<!--                             <span class="value"><span><?php //echo  ?></span></span>
 -->                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-xs-6">
                        <div class="rad-info-box rad-txt-primary">
                            <i class="fa fa-facebook"></i>
                            <span class="heading">Facebook</span>
                            <span class="value"><span>23K</span></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="rad-info-box rad-txt-danger">
                            <i class="fa fa-google-plus"></i>
                            <span class="heading">Google</span>
                            <span class="value"><span>49M</span></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="rad-info-box">
                            <i class="fa fa-apple"></i>
                            <span class="heading">Apple</span>
                            <span class="value"><span>10.9K</span></span>
                        </div>
                    </div> -->
                </div>
               
                
                    <div class="col-xs-12 col-md-6">
                        <!-- <div class="panel panel-default"> -->
                            <div class="panel-heading">

                                <h3 class="panel-title">Area Chart</h3>
                                

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                         
                            </div>
                            <div class="panel-body">
                                <div id="areaChart2" class="rad-chart"></div>
                            </div>

                        </div>
                    </div>
                    
                    
                   
                </div>
              
            </div>
        </div>
    </section>
</main>

</body>
</html>
