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
    
    $handle = $link->prepare('SELECT p_id,SUM(quantity) as sum_product FROM order_item  group by p_id,Month(time1) order by sum_product DESC LIMIT 10'); 
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
        
    foreach($result as $row){
        array_push($dataPoints, array("x"=> $row->p_id, "y"=> $row->sum_product));
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
        text: "PHP Column Chart from Database"
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
                            <span class="heading">Microsoft</span>
                            <span class="value"><span>4949</span></span>
                        </div>
                    </div>
                  
                </div>
               
                
                    <div class="col-xs-12 col-md-6">
                        <div class="panel panel-default">
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
