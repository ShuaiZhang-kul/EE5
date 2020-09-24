
<?php


function changeDisplay($index,$stage,$num)
{

    $servername = "localhost";
    $username = "root";
    $password = "Zs19970218.";
    
     
    // create connection to the database
    //echo "$servername"," $username"," $password";
    $conn = new mysqli($servername, $username, $password,"ee5_db");
    
    // detect connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    

    $task= "task". $stage . "_" . $num ;
    //echo $task;
    //write sql query and run it
    $sql = " SELECT $task FROM ee5_db.process_table where process_table.index_person =$index" ;
    $result = $conn->query($sql);
     
   // echo "<br>";
   // echo "there are ";
   // echo  $result->num_rows  ;
   // echo " accounts";
   // echo "<br>";
    
   
   

    $row = $result->fetch_assoc() ;
    $status =  $row[$task];
    if($status!=2)
    {
        echo 'style="display: none;"';
    }
    
    $conn->close();

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Process Page</title>

        <!-- Bootstrap library -->
        <link href="css\bootstrap.css" rel="stylesheet">
        <script src="js\jquery.min.js"></script>
        <script src="js\bootstrap.js"></script>

        <!-- Personal library -->
        <link rel="stylesheet" type="text/css" href="css\personal.css">
        <script src="js\personal.js"></script>
      
      </head>
    
    <body>
      <div class="container-fluid">
        <!-- Animation row -->
        <div class="row ">
            <div class="col-md-12  animation_box" >
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                  
                    <!-- Wrapper for slides -->


          


                    <div class="carousel-inner  " role="listbox">
                      <div class="item active header-1 ">
                        <img src="img/header-1.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>Together we fight it</h3>
                            <p>Life isn’t about finding yourself. Life is about creating yourself.

                            </p>
                        </div>
                      </div>
                      <div class="item header-2">
                        <img src="img/header-2.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3 >2</h3>
                            <p>...</p>
                        </div>
                      </div>
                      <div class="item header-3">
                        <img src="img/header-3.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3>3</h3>
                            <p>...</p>
                        </div>
                    </div>
                    </div>
                  
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
         </div>
             
        </div>
        <br> 
        
        <!-- Data row 1 -->
        <div class="row " >
            <div class="col-md-4 data_box " >   

                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m1-1-1" class="active active_background" href="#Circle Bar" onclick="changeContent(1,1,1);">Circle Bar</a></li>
                        <li><a id = "m1-1-2" href="#Table" onclick="changeContent(1,1,2);">Table</a></li>
                    </ul>
                    </nav>
                    <div id="mn1-1-1">
                       
                        this is the circle bar
                        <div class="row">
                        <div class="col-md-6" >
                            <div class="curve-box">
                                <div class="square">
                                    <div class="c1"></div>
                                </div>
                                <div class="square">
                                    <div class="c2"></div>
                                </div>
                               </div>
                               <div class="curve-box">
                                <div class="square">
                                    <div class="c4"></div>
                                </div>
                                <div class="square">
                                    <div class="c3"></div>
                                </div>
                               </div>
                        </div>   
                        <div class="col-md-6" >
                            <div class="row" >
                            <div class="col-md-5">
                                
                                <img src="img/patient-1.png" class="patient" >
                            </div>
                            <div class="col-md-7">
                                
                                <div class="patient" >patient 1 </div>
                            </div>                    
                               </div>
                               <div class="row">
                                <p class="p1">
                                    Life isn’t about finding yourself.
                                   Life is about creating yourself.</p>
                               </div>
                        </div>
        
                         </div>
                        </div>
                        <!-- Table  -->
                    <div id="mn1-1-2"style="display:none">  
    
                         <div class="row pre-scrollable">
                             <div class=" col-md-11 col-md-offset-1 task-list" >
                                <table class="table" id="table1">
                                    <thead>
                                    <tr>
                                        <th>
                                           Task
                                        </th>
                                        <th>
                                            Waiting To Do
                                        </th>
                                        <th>
                                            In Process
                                        </th>
                                        <th>
                                            Finished
                                        </th>
                                    </tr>
                                    </thead>
    
                                    <tbody>                       
                                    <tr class="Task-1-1">
                                        <td ><strong >Task-1-1</strong></td>
                                        <td><div class="d1-1-1"> Complete</div></td>
                                        <td><div class="d1-1-2"> Complete</div></td>
                                        <td><div class="d1-1-3"<?php changeDisplay(1,1,1) ?>;> Complete</div></td>
                                    </tr>
                                    <tr class="Task-1-2">
                                        <td><strong>Task-1-2</strong></td>
                                        <td><div class="d1-2-1"> Complete</div></td>
                                        <td><div class="d1-2-2"> Complete</div></td>
                                        <td><div class="d1-2-3"<?php changeDisplay(1,1,2) ?>;> Complete</div></td>
                                    </tr>
                                    <tr class="Task-1-3">
                                        <td><strong>Task-1-3</strong></td>
                                        <td><div class="d1-3-1"> Complete</div></td>
                                        <td><div class="d1-3-2"> Complete</div></td>
                                        <td><div class="d1-3-3"<?php changeDisplay(1,1,3) ?>;> Complete</div></td>
                                    </tr>
                                    <tr class="Task-1-4">
                                        <td><strong>Task-1-4</strong></td>
                                        <td><div class="d1-4-1"> Complete</div></td>
                                        <td><div class="d1-4-2"> Complete</div></td>
                                        <td><div class="d1-4-3"<?php changeDisplay(1,1,4) ?>;> Complete</div></td>
                                    </tr>
                                    
                                    <tr class="Task-2-1">
                                        <td ><strong >Task-2-1</strong></td>
                                        <td><div class="d2-1-1"> Complete</div></td>
                                        <td><div class="d2-1-2"> Complete</div></td>
                                        <td><div class="d2-1-3"> Complete</div></td>
                                    </tr>
                                    
                                    <tr class="Task-2-2">
                                        <td><strong>Task-2-2</strong></td>
                                        <td><div class="d2-2-1"> Complete</div></td>
                                        <td><div class="d2-2-2"> Complete</div></td>
                                        <td><div class="d2-2-3"> Complete</div></td>
                                    </tr>
                                    <tr class="Task-2-3">
                                        <td><strong>Task-2-3</strong></td>
                                        <td><div class="d2-3-1"> Complete</div></td>
                                        <td><div class="d2-3-2"> Complete</div></td>
                                        <td><div class="d2-3-3"> Complete</div></td>
                                    </tr>
                                    <tr class="Task-2-4">
                                        <td><strong>Task-2-4</strong></td>
                                        <td><div class="d2-4-1"> Complete</div></td>
                                        <td><div class="d2-4-2"> Complete</div></td>
                                        <td><div class="d2-4-3"> Complete</div></td>
                                    </tr>
                                   
                                    <tr class="Task-3-1">
                                        <td ><strong >Task-3-1</strong></td>
                                        <td><div class="d3-1-1"> Complete</div></td>
                                        <td><div class="d3-1-2"> Complete</div></td>
                                        <td><div class="d3-1-3"> Complete</div></td>
                                    </tr>
                                    
                                    <tr class="Task-3-2">
                                        <td><strong>Task-3-2</strong></td>
                                        <td><div class="d3-2-1"> Complete</div></td>
                                        <td><div class="d3-2-2"> Complete</div></td>
                                        <td><div class="d3-2-3"> Complete</div></td>
                                    </tr>
                                    <tr class="Task-3-3">
                                        <td><strong>Task-3-3</strong></td>
                                        <td><div class="d3-3-1"> Complete</div></td>
                                        <td><div class="d3-3-2"> Complete</div></td>
                                        <td><div class="d3-3-3"> Complete</div></td>
                                    </tr>
                                    <tr class="Task-3-4">
                                        <td><strong>Task-3-4</strong></td>
                                        <td><div class="d3-4-1"> Complete</div></td>
                                        <td><div class="d3-4-2"> Complete</div></td>
                                        <td><div class="d3-4-3"> Complete</div></td>
                                    </tr>
                                   
                                    <tr class="Task-4-1">
                                        <td ><strong >Task-4-1</strong></td>
                                        <td><div class="d4-1-1"> Complete</div></td>
                                        <td><div class="d4-1-2"> Complete</div></td>
                                        <td><div class="d4-1-3"> Complete</div></td>
                                    </tr>
                                    
                                    <tr class="Task-4-2">
                                        <td><strong>Task-4-2</strong></td>
                                        <td><div class="d4-2-1"> Complete</div></td>
                                        <td><div class="d4-2-2"> Complete</div></td>
                                        <td><div class="d4-2-3"> Complete</div></td>
                                    </tr>
                                    <tr class="Task-4-3">
                                        <td><strong>Task-3-3</strong></td>
                                        <td><div class="d4-3-1"> Complete</div></td>
                                        <td><div class="d4-3-2"> Complete</div></td>
                                        <td><div class="d4-3-3"> Complete</div></td>
                                    </tr>
                                    <tr class="Task-4-4">
                                        <td><strong>Task-3-4</strong></td>
                                        <td><div class="d4-4-1"> Complete</div></td>
                                        <td><div class="d4-4-2"> Complete</div></td>
                                        <td><div class="d4-4-3"> Complete</div></td>
                                    </tr>
                                   



                                    </tbody>
                                </table>

                               
                            </div>

                         </div>
                    </div>
                </div>
              
            <div class="col-md-4  data_box" >     
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m1-2-1" class="active active_background" href="#Circle Bar" onclick="changeContent(1,2,1);">Circle Bar</a></li>
                        <li><a id = "m1-2-2" href="#Table" onclick="changeContent(1,2,2);">Table</a></li>
                    </ul>
                    </nav>

                    <div id="mn1-2-1">

                        this is the circle bar
                        <div class="row">
                        <div class="col-md-6" >
                            <div class="curve-box">
                                <div class="square">
                                    <div class="c1"></div>
                                </div>
                                <div class="square">
                                    <div class="c2"></div>
                                </div>
                               </div>
                               <div class="curve-box">
                                <div class="square">
                                    <div class="c4"></div>
                                </div>
                                <div class="square">
                                    <div class="c3"></div>
                                </div>
                               </div>
                        </div>   
                        <div class="col-md-6" >
                            <div class="row" >
                            <div class="col-md-5">
                                
                                <img src="img/patient-2.png" class="patient" >
                            </div>
                            <div class="col-md-7">
                                
                                <div class="patient" >patient 2 </div>
                            </div>                    
                               </div>
                               <div class="row">
                                <p class="p1">
                                    Life isn’t about finding yourself.
                                   Life is about creating yourself.</p>
                               </div>
        
                        </div>
        
                         </div>
                        </div>
                    <div id="mn1-2-2"style="display:none">  
    
                        <div class="row">
                            <div class="row pre-scrollable">
                                <div class=" col-md-11 col-md-offset-1 task-list" >
                                   <table class="table" id="table2">
                                       <thead>
                                       <tr>
                                           <th>
                                              Task
                                           </th>
                                           <th>
                                               Waiting To Do
                                           </th>
                                           <th>
                                               In Process
                                           </th>
                                           <th>
                                               Finished
                                           </th>
                                       </tr>
                                       </thead>
       
                                       <tbody>                       
                                       <tr class="Task-1-1">
                                           <td ><strong >Task-1-1</strong></td>
                                           <td><div class="d1-1-1"> Complete</div></td>
                                           <td><div class="d1-1-2"> Complete</div></td>
                                           <td><div class="d1-1-3"> Complete</div></td>
                                       </tr>
                                       <tr class="Task-1-2">
                                           <td><strong>Task-1-2</strong></td>
                                           <td><div class="d1-2-1"> Complete</div></td>
                                           <td><div class="d1-2-2"> Complete</div></td>
                                           <td><div class="d1-2-3"> Complete</div></td>
                                       </tr>
                                       <tr class="Task-1-3">
                                           <td><strong>Task-1-3</strong></td>
                                           <td><div class="d1-3-1"> Complete</div></td>
                                           <td><div class="d1-3-2"> Complete</div></td>
                                           <td><div class="d1-3-3"> Complete</div></td>
                                       </tr>
                                       <tr class="Task-1-4">
                                           <td><strong>Task-1-4</strong></td>
                                           <td><div class="d1-4-1"> Complete</div></td>
                                           <td><div class="d1-4-2"> Complete</div></td>
                                           <td><div class="d1-4-3"> Complete</div></td>
                                       </tr>
                                       
                                       <tr class="Task-2-1">
                                           <td ><strong >Task-2-1</strong></td>
                                           <td><div class="d2-1-1"> Complete</div></td>
                                           <td><div class="d2-1-2"> Complete</div></td>
                                           <td><div class="d2-1-3"> Complete</div></td>
                                       </tr>
                                       
                                       <tr class="Task-2-2">
                                           <td><strong>Task-2-2</strong></td>
                                           <td><div class="d2-2-1"> Complete</div></td>
                                           <td><div class="d2-2-2"> Complete</div></td>
                                           <td><div class="d2-2-3"> Complete</div></td>
                                       </tr>
                                       <tr class="Task-2-3">
                                           <td><strong>Task-2-3</strong></td>
                                           <td><div class="d2-3-1"> Complete</div></td>
                                           <td><div class="d2-3-2"> Complete</div></td>
                                           <td><div class="d2-3-3"> Complete</div></td>
                                       </tr>
                                       <tr class="Task-2-4">
                                           <td><strong>Task-2-4</strong></td>
                                           <td><div class="d2-4-1"> Complete</div></td>
                                           <td><div class="d2-4-2"> Complete</div></td>
                                           <td><div class="d2-4-3"> Complete</div></td>
                                       </tr>
                                      
                                       <tr class="Task-3-1">
                                           <td ><strong >Task-3-1</strong></td>
                                           <td><div class="d3-1-1"> Complete</div></td>
                                           <td><div class="d3-1-2"> Complete</div></td>
                                           <td><div class="d3-1-3"> Complete</div></td>
                                       </tr>
                                       
                                       <tr class="Task-3-2">
                                           <td><strong>Task-3-2</strong></td>
                                           <td><div class="d3-2-1"> Complete</div></td>
                                           <td><div class="d3-2-2"> Complete</div></td>
                                           <td><div class="d3-2-3"> Complete</div></td>
                                       </tr>
                                       <tr class="Task-3-3">
                                           <td><strong>Task-3-3</strong></td>
                                           <td><div class="d3-3-1"> Complete</div></td>
                                           <td><div class="d3-3-2"> Complete</div></td>
                                           <td><div class="d3-3-3"> Complete</div></td>
                                       </tr>
                                       <tr class="Task-3-4">
                                           <td><strong>Task-3-4</strong></td>
                                           <td><div class="d3-4-1"> Complete</div></td>
                                           <td><div class="d3-4-2"> Complete</div></td>
                                           <td><div class="d3-4-3"> Complete</div></td>
                                       </tr>
                                      
                                       <tr class="Task-4-1">
                                           <td ><strong >Task-4-1</strong></td>
                                           <td><div class="d4-1-1"> Complete</div></td>
                                           <td><div class="d4-1-2"> Complete</div></td>
                                           <td><div class="d4-1-3"> Complete</div></td>
                                       </tr>
                                       
                                       <tr class="Task-4-2">
                                           <td><strong>Task-4-2</strong></td>
                                           <td><div class="d4-2-1"> Complete</div></td>
                                           <td><div class="d4-2-2"> Complete</div></td>
                                           <td><div class="d4-2-3"> Complete</div></td>
                                       </tr>
                                       <tr class="Task-4-3">
                                           <td><strong>Task-3-3</strong></td>
                                           <td><div class="d4-3-1"> Complete</div></td>
                                           <td><div class="d4-3-2"> Complete</div></td>
                                           <td><div class="d4-3-3"> Complete</div></td>
                                       </tr>
                                       <tr class="Task-4-4">
                                           <td><strong>Task-3-4</strong></td>
                                           <td><div class="d4-4-1"> Complete</div></td>
                                           <td><div class="d4-4-2"> Complete</div></td>
                                           <td><div class="d4-4-3"> Complete</div></td>
                                       </tr>
                                      
   
   
   
                                       </tbody>
                                   </table>
   
                                  
                               </div>
   
                            </div>
                        </div>

                        </div>
                </div>

            <div class="col-md-4  data_box" >     
                 <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m1-3-1" class="active active_background" href="#Circle Bar" onclick="changeContent(1,3,1);">Circle Bar</a></li>
                        <li><a id = "m1-3-2" href="#Table" onclick="changeContent(1,3,2);">Table</a></li>
                    </ul>
                 </nav>
                 
                 <div id="mn1-3-1">

                 
                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-3.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 3 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>
                    </div>
                <div id="mn1-3-2"style="display:none">  
                     <div class="row pre-scrollable">
                        <div class=" col-md-11 col-md-offset-1 task-list" >
                           <table class="table" id="table3">
                               <thead>
                               <tr>
                                   <th>
                                      Task
                                   </th>
                                   <th>
                                       Waiting To Do
                                   </th>
                                   <th>
                                       In Process
                                   </th>
                                   <th>
                                       Finished
                                   </th>
                               </tr>
                               </thead>

                               <tbody>                       
                               <tr class="Task-1-1">
                                   <td ><strong >Task-1-1</strong></td>
                                   <td><div class="d1-1-1"> Complete</div></td>
                                   <td><div class="d1-1-2"> Complete</div></td>
                                   <td><div class="d1-1-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-2">
                                   <td><strong>Task-1-2</strong></td>
                                   <td><div class="d1-2-1"> Complete</div></td>
                                   <td><div class="d1-2-2"> Complete</div></td>
                                   <td><div class="d1-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-3">
                                   <td><strong>Task-1-3</strong></td>
                                   <td><div class="d1-3-1"> Complete</div></td>
                                   <td><div class="d1-3-2"> Complete</div></td>
                                   <td><div class="d1-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-4">
                                   <td><strong>Task-1-4</strong></td>
                                   <td><div class="d1-4-1"> Complete</div></td>
                                   <td><div class="d1-4-2"> Complete</div></td>
                                   <td><div class="d1-4-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-2-1">
                                   <td ><strong >Task-2-1</strong></td>
                                   <td><div class="d2-1-1"> Complete</div></td>
                                   <td><div class="d2-1-2"> Complete</div></td>
                                   <td><div class="d2-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-2-2">
                                   <td><strong>Task-2-2</strong></td>
                                   <td><div class="d2-2-1"> Complete</div></td>
                                   <td><div class="d2-2-2"> Complete</div></td>
                                   <td><div class="d2-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-2-3">
                                   <td><strong>Task-2-3</strong></td>
                                   <td><div class="d2-3-1"> Complete</div></td>
                                   <td><div class="d2-3-2"> Complete</div></td>
                                   <td><div class="d2-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-2-4">
                                   <td><strong>Task-2-4</strong></td>
                                   <td><div class="d2-4-1"> Complete</div></td>
                                   <td><div class="d2-4-2"> Complete</div></td>
                                   <td><div class="d2-4-3"> Complete</div></td>
                               </tr>
                              
                               <tr class="Task-3-1">
                                   <td ><strong >Task-3-1</strong></td>
                                   <td><div class="d3-1-1"> Complete</div></td>
                                   <td><div class="d3-1-2"> Complete</div></td>
                                   <td><div class="d3-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-3-2">
                                   <td><strong>Task-3-2</strong></td>
                                   <td><div class="d3-2-1"> Complete</div></td>
                                   <td><div class="d3-2-2"> Complete</div></td>
                                   <td><div class="d3-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-3-3">
                                   <td><strong>Task-3-3</strong></td>
                                   <td><div class="d3-3-1"> Complete</div></td>
                                   <td><div class="d3-3-2"> Complete</div></td>
                                   <td><div class="d3-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-3-4">
                                   <td><strong>Task-3-4</strong></td>
                                   <td><div class="d3-4-1"> Complete</div></td>
                                   <td><div class="d3-4-2"> Complete</div></td>
                                   <td><div class="d3-4-3"> Complete</div></td>
                               </tr>
                              
                               <tr class="Task-4-1">
                                   <td ><strong >Task-4-1</strong></td>
                                   <td><div class="d4-1-1"> Complete</div></td>
                                   <td><div class="d4-1-2"> Complete</div></td>
                                   <td><div class="d4-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-4-2">
                                   <td><strong>Task-4-2</strong></td>
                                   <td><div class="d4-2-1"> Complete</div></td>
                                   <td><div class="d4-2-2"> Complete</div></td>
                                   <td><div class="d4-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-4-3">
                                   <td><strong>Task-3-3</strong></td>
                                   <td><div class="d4-3-1"> Complete</div></td>
                                   <td><div class="d4-3-2"> Complete</div></td>
                                   <td><div class="d4-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-4-4">
                                   <td><strong>Task-3-4</strong></td>
                                   <td><div class="d4-4-1"> Complete</div></td>
                                   <td><div class="d4-4-2"> Complete</div></td>
                                   <td><div class="d4-4-3"> Complete</div></td>
                               </tr>
                              



                               </tbody>
                           </table>

                          
                       </div>

                    </div>
                    </div>
                </div>
        </div>
        <br>

        <!-- Data row 2 -->
        <div class="row">
            <div class="col-md-4  data_box" >     
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m2-1-1" class="active active_background" href="#Circle Bar" onclick="changeContent(2,1,1);">Circle Bar</a></li>
                        <li><a id = "m2-1-2" href="#Table" onclick="changeContent(2,1,2);">Table</a></li>
                    </ul>
                </nav>
                <div id="mn2-1-1">

                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-4.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 4 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>
                    </div>
                <div id="mn2-1-2"style="display:none">  

                    <div class="row pre-scrollable">
                        <div class=" col-md-11 col-md-offset-1 task-list" >
                           <table class="table" id="table4">
                               <thead>
                               <tr>
                                   <th>
                                      Task
                                   </th>
                                   <th>
                                       Waiting To Do
                                   </th>
                                   <th>
                                       In Process
                                   </th>
                                   <th>
                                       Finished
                                   </th>
                               </tr>
                               </thead>

                               <tbody>                       
                               <tr class="Task-1-1">
                                   <td ><strong >Task-1-1</strong></td>
                                   <td><div class="d1-1-1"> Complete</div></td>
                                   <td><div class="d1-1-2"> Complete</div></td>
                                   <td><div class="d1-1-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-2">
                                   <td><strong>Task-1-2</strong></td>
                                   <td><div class="d1-2-1"> Complete</div></td>
                                   <td><div class="d1-2-2"> Complete</div></td>
                                   <td><div class="d1-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-3">
                                   <td><strong>Task-1-3</strong></td>
                                   <td><div class="d1-3-1"> Complete</div></td>
                                   <td><div class="d1-3-2"> Complete</div></td>
                                   <td><div class="d1-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-4">
                                   <td><strong>Task-1-4</strong></td>
                                   <td><div class="d1-4-1"> Complete</div></td>
                                   <td><div class="d1-4-2"> Complete</div></td>
                                   <td><div class="d1-4-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-2-1">
                                   <td ><strong >Task-2-1</strong></td>
                                   <td><div class="d2-1-1"> Complete</div></td>
                                   <td><div class="d2-1-2"> Complete</div></td>
                                   <td><div class="d2-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-2-2">
                                   <td><strong>Task-2-2</strong></td>
                                   <td><div class="d2-2-1"> Complete</div></td>
                                   <td><div class="d2-2-2"> Complete</div></td>
                                   <td><div class="d2-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-2-3">
                                   <td><strong>Task-2-3</strong></td>
                                   <td><div class="d2-3-1"> Complete</div></td>
                                   <td><div class="d2-3-2"> Complete</div></td>
                                   <td><div class="d2-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-2-4">
                                   <td><strong>Task-2-4</strong></td>
                                   <td><div class="d2-4-1"> Complete</div></td>
                                   <td><div class="d2-4-2"> Complete</div></td>
                                   <td><div class="d2-4-3"> Complete</div></td>
                               </tr>
                              
                               <tr class="Task-3-1">
                                   <td ><strong >Task-3-1</strong></td>
                                   <td><div class="d3-1-1"> Complete</div></td>
                                   <td><div class="d3-1-2"> Complete</div></td>
                                   <td><div class="d3-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-3-2">
                                   <td><strong>Task-3-2</strong></td>
                                   <td><div class="d3-2-1"> Complete</div></td>
                                   <td><div class="d3-2-2"> Complete</div></td>
                                   <td><div class="d3-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-3-3">
                                   <td><strong>Task-3-3</strong></td>
                                   <td><div class="d3-3-1"> Complete</div></td>
                                   <td><div class="d3-3-2"> Complete</div></td>
                                   <td><div class="d3-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-3-4">
                                   <td><strong>Task-3-4</strong></td>
                                   <td><div class="d3-4-1"> Complete</div></td>
                                   <td><div class="d3-4-2"> Complete</div></td>
                                   <td><div class="d3-4-3"> Complete</div></td>
                               </tr>
                              
                               <tr class="Task-4-1">
                                   <td ><strong >Task-4-1</strong></td>
                                   <td><div class="d4-1-1"> Complete</div></td>
                                   <td><div class="d4-1-2"> Complete</div></td>
                                   <td><div class="d4-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-4-2">
                                   <td><strong>Task-4-2</strong></td>
                                   <td><div class="d4-2-1"> Complete</div></td>
                                   <td><div class="d4-2-2"> Complete</div></td>
                                   <td><div class="d4-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-4-3">
                                   <td><strong>Task-3-3</strong></td>
                                   <td><div class="d4-3-1"> Complete</div></td>
                                   <td><div class="d4-3-2"> Complete</div></td>
                                   <td><div class="d4-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-4-4">
                                   <td><strong>Task-3-4</strong></td>
                                   <td><div class="d4-4-1"> Complete</div></td>
                                   <td><div class="d4-4-2"> Complete</div></td>
                                   <td><div class="d4-4-3"> Complete</div></td>
                               </tr>
                              



                               </tbody>
                           </table>

                          
                       </div>

                    </div>
                    </div>
                </div>

            
            <div class="col-md-4  data_box" >     
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m2-2-1" class="active active_background" href="#Circle Bar" onclick="changeContent(2,2,1);">Circle Bar</a></li>
                        <li><a id = "m2-2-2" href="#Table" onclick="changeContent(2,2,2);">Table</a></li>
                    </ul>
                </nav>
                <div id="mn2-2-1">

                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-5.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 5 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>
                    </div>
                <div id="mn2-2-2"style="display:none">  
                    <div class="row pre-scrollable">
                        <div class=" col-md-11 col-md-offset-1 task-list" >
                           <table class="table" id="table5">
                               <thead>
                               <tr>
                                   <th>
                                      Task
                                   </th>
                                   <th>
                                       Waiting To Do
                                   </th>
                                   <th>
                                       In Process
                                   </th>
                                   <th>
                                       Finished
                                   </th>
                               </tr>
                               </thead>

                               <tbody>                       
                               <tr class="Task-1-1">
                                   <td ><strong >Task-1-1</strong></td>
                                   <td><div class="d1-1-1"> Complete</div></td>
                                   <td><div class="d1-1-2"> Complete</div></td>
                                   <td><div class="d1-1-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-2">
                                   <td><strong>Task-1-2</strong></td>
                                   <td><div class="d1-2-1"> Complete</div></td>
                                   <td><div class="d1-2-2"> Complete</div></td>
                                   <td><div class="d1-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-3">
                                   <td><strong>Task-1-3</strong></td>
                                   <td><div class="d1-3-1"> Complete</div></td>
                                   <td><div class="d1-3-2"> Complete</div></td>
                                   <td><div class="d1-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-4">
                                   <td><strong>Task-1-4</strong></td>
                                   <td><div class="d1-4-1"> Complete</div></td>
                                   <td><div class="d1-4-2"> Complete</div></td>
                                   <td><div class="d1-4-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-2-1">
                                   <td ><strong >Task-2-1</strong></td>
                                   <td><div class="d2-1-1"> Complete</div></td>
                                   <td><div class="d2-1-2"> Complete</div></td>
                                   <td><div class="d2-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-2-2">
                                   <td><strong>Task-2-2</strong></td>
                                   <td><div class="d2-2-1"> Complete</div></td>
                                   <td><div class="d2-2-2"> Complete</div></td>
                                   <td><div class="d2-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-2-3">
                                   <td><strong>Task-2-3</strong></td>
                                   <td><div class="d2-3-1"> Complete</div></td>
                                   <td><div class="d2-3-2"> Complete</div></td>
                                   <td><div class="d2-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-2-4">
                                   <td><strong>Task-2-4</strong></td>
                                   <td><div class="d2-4-1"> Complete</div></td>
                                   <td><div class="d2-4-2"> Complete</div></td>
                                   <td><div class="d2-4-3"> Complete</div></td>
                               </tr>
                              
                               <tr class="Task-3-1">
                                   <td ><strong >Task-3-1</strong></td>
                                   <td><div class="d3-1-1"> Complete</div></td>
                                   <td><div class="d3-1-2"> Complete</div></td>
                                   <td><div class="d3-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-3-2">
                                   <td><strong>Task-3-2</strong></td>
                                   <td><div class="d3-2-1"> Complete</div></td>
                                   <td><div class="d3-2-2"> Complete</div></td>
                                   <td><div class="d3-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-3-3">
                                   <td><strong>Task-3-3</strong></td>
                                   <td><div class="d3-3-1"> Complete</div></td>
                                   <td><div class="d3-3-2"> Complete</div></td>
                                   <td><div class="d3-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-3-4">
                                   <td><strong>Task-3-4</strong></td>
                                   <td><div class="d3-4-1"> Complete</div></td>
                                   <td><div class="d3-4-2"> Complete</div></td>
                                   <td><div class="d3-4-3"> Complete</div></td>
                               </tr>
                              
                               <tr class="Task-4-1">
                                   <td ><strong >Task-4-1</strong></td>
                                   <td><div class="d4-1-1"> Complete</div></td>
                                   <td><div class="d4-1-2"> Complete</div></td>
                                   <td><div class="d4-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-4-2">
                                   <td><strong>Task-4-2</strong></td>
                                   <td><div class="d4-2-1"> Complete</div></td>
                                   <td><div class="d4-2-2"> Complete</div></td>
                                   <td><div class="d4-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-4-3">
                                   <td><strong>Task-3-3</strong></td>
                                   <td><div class="d4-3-1"> Complete</div></td>
                                   <td><div class="d4-3-2"> Complete</div></td>
                                   <td><div class="d4-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-4-4">
                                   <td><strong>Task-3-4</strong></td>
                                   <td><div class="d4-4-1"> Complete</div></td>
                                   <td><div class="d4-4-2"> Complete</div></td>
                                   <td><div class="d4-4-3"> Complete</div></td>
                               </tr>
                              



                               </tbody>
                           </table>

                          
                       </div>

                    </div>
                    </div>
                </div>
            
            <div class="col-md-4  data_box" >  
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m2-3-1" class="active active_background" href="#Circle Bar" onclick="changeContent(2,3,1);">Circle Bar</a></li>
                        <li><a id = "m2-3-2" href="#Table" onclick="changeContent(2,3,2);">Table</a></li>
                    </ul>   
                </nav>
                <div id="mn2-3-1">

                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-6.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 6 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>
                    </div>
                <div id="mn2-3-2"style="display:none">  
                    <div class="row pre-scrollable">
                        <div class=" col-md-11 col-md-offset-1 task-list" >
                           <table class="table" id="table6">
                               <thead>
                               <tr>
                                   <th>
                                      Task
                                   </th>
                                   <th>
                                       Waiting To Do
                                   </th>
                                   <th>
                                       In Process
                                   </th>
                                   <th>
                                       Finished
                                   </th>
                               </tr>
                               </thead>

                               <tbody>                       
                               <tr class="Task-1-1">
                                   <td ><strong >Task-1-1</strong></td>
                                   <td><div class="d1-1-1"> Complete</div></td>
                                   <td><div class="d1-1-2"> Complete</div></td>
                                   <td><div class="d1-1-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-2">
                                   <td><strong>Task-1-2</strong></td>
                                   <td><div class="d1-2-1"> Complete</div></td>
                                   <td><div class="d1-2-2"> Complete</div></td>
                                   <td><div class="d1-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-3">
                                   <td><strong>Task-1-3</strong></td>
                                   <td><div class="d1-3-1"> Complete</div></td>
                                   <td><div class="d1-3-2"> Complete</div></td>
                                   <td><div class="d1-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-1-4">
                                   <td><strong>Task-1-4</strong></td>
                                   <td><div class="d1-4-1"> Complete</div></td>
                                   <td><div class="d1-4-2"> Complete</div></td>
                                   <td><div class="d1-4-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-2-1">
                                   <td ><strong >Task-2-1</strong></td>
                                   <td><div class="d2-1-1"> Complete</div></td>
                                   <td><div class="d2-1-2"> Complete</div></td>
                                   <td><div class="d2-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-2-2">
                                   <td><strong>Task-2-2</strong></td>
                                   <td><div class="d2-2-1"> Complete</div></td>
                                   <td><div class="d2-2-2"> Complete</div></td>
                                   <td><div class="d2-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-2-3">
                                   <td><strong>Task-2-3</strong></td>
                                   <td><div class="d2-3-1"> Complete</div></td>
                                   <td><div class="d2-3-2"> Complete</div></td>
                                   <td><div class="d2-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-2-4">
                                   <td><strong>Task-2-4</strong></td>
                                   <td><div class="d2-4-1"> Complete</div></td>
                                   <td><div class="d2-4-2"> Complete</div></td>
                                   <td><div class="d2-4-3"> Complete</div></td>
                               </tr>
                              
                               <tr class="Task-3-1">
                                   <td ><strong >Task-3-1</strong></td>
                                   <td><div class="d3-1-1"> Complete</div></td>
                                   <td><div class="d3-1-2"> Complete</div></td>
                                   <td><div class="d3-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-3-2">
                                   <td><strong>Task-3-2</strong></td>
                                   <td><div class="d3-2-1"> Complete</div></td>
                                   <td><div class="d3-2-2"> Complete</div></td>
                                   <td><div class="d3-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-3-3">
                                   <td><strong>Task-3-3</strong></td>
                                   <td><div class="d3-3-1"> Complete</div></td>
                                   <td><div class="d3-3-2"> Complete</div></td>
                                   <td><div class="d3-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-3-4">
                                   <td><strong>Task-3-4</strong></td>
                                   <td><div class="d3-4-1"> Complete</div></td>
                                   <td><div class="d3-4-2"> Complete</div></td>
                                   <td><div class="d3-4-3"> Complete</div></td>
                               </tr>
                              
                               <tr class="Task-4-1">
                                   <td ><strong >Task-4-1</strong></td>
                                   <td><div class="d4-1-1"> Complete</div></td>
                                   <td><div class="d4-1-2"> Complete</div></td>
                                   <td><div class="d4-1-3"> Complete</div></td>
                               </tr>
                               
                               <tr class="Task-4-2">
                                   <td><strong>Task-4-2</strong></td>
                                   <td><div class="d4-2-1"> Complete</div></td>
                                   <td><div class="d4-2-2"> Complete</div></td>
                                   <td><div class="d4-2-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-4-3">
                                   <td><strong>Task-3-3</strong></td>
                                   <td><div class="d4-3-1"> Complete</div></td>
                                   <td><div class="d4-3-2"> Complete</div></td>
                                   <td><div class="d4-3-3"> Complete</div></td>
                               </tr>
                               <tr class="Task-4-4">
                                   <td><strong>Task-3-4</strong></td>
                                   <td><div class="d4-4-1"> Complete</div></td>
                                   <td><div class="d4-4-2"> Complete</div></td>
                                   <td><div class="d4-4-3"> Complete</div></td>
                               </tr>

                               </tbody>
                           </table>

                          
                       </div>

                    </div>
                    </div>
                </div>

        </div>
        <br>

        <!-- Data row 3 -->
        <div class="row">
            <div class="col-md-4  data_box" > 
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m3-1-1" class="active active_background" href="#Circle Bar" onclick="changeContent(3,1,1);">Circle Bar</a></li>
                        <li><a id = "m3-1-2" href="#Table" onclick="changeContent(3,1,2);">Table</a></li>
                    </ul>    
                </nav>
                 
                <div id="mn3-1-1">

                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-3.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 7 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>
                   </div>
               <div id="mn3-1-2"style="display:none">  
                <div class="row pre-scrollable">
                    <div class=" col-md-11 col-md-offset-1 task-list" >
                       <table class="table" id="table7">
                           <thead>
                           <tr>
                               <th>
                                  Task
                               </th>
                               <th>
                                   Waiting To Do
                               </th>
                               <th>
                                   In Process
                               </th>
                               <th>
                                   Finished
                               </th>
                           </tr>
                           </thead>

                           <tbody>                       
                           <tr class="Task-1-1">
                               <td ><strong >Task-1-1</strong></td>
                               <td><div class="d1-1-1"> Complete</div></td>
                               <td><div class="d1-1-2"> Complete</div></td>
                               <td><div class="d1-1-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-2">
                               <td><strong>Task-1-2</strong></td>
                               <td><div class="d1-2-1"> Complete</div></td>
                               <td><div class="d1-2-2"> Complete</div></td>
                               <td><div class="d1-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-3">
                               <td><strong>Task-1-3</strong></td>
                               <td><div class="d1-3-1"> Complete</div></td>
                               <td><div class="d1-3-2"> Complete</div></td>
                               <td><div class="d1-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-4">
                               <td><strong>Task-1-4</strong></td>
                               <td><div class="d1-4-1"> Complete</div></td>
                               <td><div class="d1-4-2"> Complete</div></td>
                               <td><div class="d1-4-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-1">
                               <td ><strong >Task-2-1</strong></td>
                               <td><div class="d2-1-1"> Complete</div></td>
                               <td><div class="d2-1-2"> Complete</div></td>
                               <td><div class="d2-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-2">
                               <td><strong>Task-2-2</strong></td>
                               <td><div class="d2-2-1"> Complete</div></td>
                               <td><div class="d2-2-2"> Complete</div></td>
                               <td><div class="d2-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-3">
                               <td><strong>Task-2-3</strong></td>
                               <td><div class="d2-3-1"> Complete</div></td>
                               <td><div class="d2-3-2"> Complete</div></td>
                               <td><div class="d2-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-4">
                               <td><strong>Task-2-4</strong></td>
                               <td><div class="d2-4-1"> Complete</div></td>
                               <td><div class="d2-4-2"> Complete</div></td>
                               <td><div class="d2-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-3-1">
                               <td ><strong >Task-3-1</strong></td>
                               <td><div class="d3-1-1"> Complete</div></td>
                               <td><div class="d3-1-2"> Complete</div></td>
                               <td><div class="d3-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-3-2">
                               <td><strong>Task-3-2</strong></td>
                               <td><div class="d3-2-1"> Complete</div></td>
                               <td><div class="d3-2-2"> Complete</div></td>
                               <td><div class="d3-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d3-3-1"> Complete</div></td>
                               <td><div class="d3-3-2"> Complete</div></td>
                               <td><div class="d3-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d3-4-1"> Complete</div></td>
                               <td><div class="d3-4-2"> Complete</div></td>
                               <td><div class="d3-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-4-1">
                               <td ><strong >Task-4-1</strong></td>
                               <td><div class="d4-1-1"> Complete</div></td>
                               <td><div class="d4-1-2"> Complete</div></td>
                               <td><div class="d4-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-4-2">
                               <td><strong>Task-4-2</strong></td>
                               <td><div class="d4-2-1"> Complete</div></td>
                               <td><div class="d4-2-2"> Complete</div></td>
                               <td><div class="d4-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d4-3-1"> Complete</div></td>
                               <td><div class="d4-3-2"> Complete</div></td>
                               <td><div class="d4-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d4-4-1"> Complete</div></td>
                               <td><div class="d4-4-2"> Complete</div></td>
                               <td><div class="d4-4-3"> Complete</div></td>
                           </tr>
                          



                           </tbody>
                       </table>

                      
                   </div>

                </div>
                   </div>
            </div>

            <div class="col-md-4  data_box" >     
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m3-2-1" class="active active_background" href="#Circle Bar" onclick="changeContent(3,2,1);">Circle Bar</a></li>
                        <li><a id = "m3-2-2" href="#Table" onclick="changeContent(3,2,2);">Table</a></li>
                    </ul>
                </nav>
                <div id="mn3-2-1">

                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-1.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 8 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>
                   </div>
               <div id="mn3-2-2"style="display:none">  

                <div class="row pre-scrollable">
                    <div class=" col-md-11 col-md-offset-1 task-list" >
                       <table class="table" id="table8">
                           <thead>
                           <tr>
                               <th>
                                  Task
                               </th>
                               <th>
                                   Waiting To Do
                               </th>
                               <th>
                                   In Process
                               </th>
                               <th>
                                   Finished
                               </th>
                           </tr>
                           </thead>

                           <tbody>                       
                           <tr class="Task-1-1">
                               <td ><strong >Task-1-1</strong></td>
                               <td><div class="d1-1-1"> Complete</div></td>
                               <td><div class="d1-1-2"> Complete</div></td>
                               <td><div class="d1-1-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-2">
                               <td><strong>Task-1-2</strong></td>
                               <td><div class="d1-2-1"> Complete</div></td>
                               <td><div class="d1-2-2"> Complete</div></td>
                               <td><div class="d1-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-3">
                               <td><strong>Task-1-3</strong></td>
                               <td><div class="d1-3-1"> Complete</div></td>
                               <td><div class="d1-3-2"> Complete</div></td>
                               <td><div class="d1-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-4">
                               <td><strong>Task-1-4</strong></td>
                               <td><div class="d1-4-1"> Complete</div></td>
                               <td><div class="d1-4-2"> Complete</div></td>
                               <td><div class="d1-4-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-1">
                               <td ><strong >Task-2-1</strong></td>
                               <td><div class="d2-1-1"> Complete</div></td>
                               <td><div class="d2-1-2"> Complete</div></td>
                               <td><div class="d2-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-2">
                               <td><strong>Task-2-2</strong></td>
                               <td><div class="d2-2-1"> Complete</div></td>
                               <td><div class="d2-2-2"> Complete</div></td>
                               <td><div class="d2-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-3">
                               <td><strong>Task-2-3</strong></td>
                               <td><div class="d2-3-1"> Complete</div></td>
                               <td><div class="d2-3-2"> Complete</div></td>
                               <td><div class="d2-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-4">
                               <td><strong>Task-2-4</strong></td>
                               <td><div class="d2-4-1"> Complete</div></td>
                               <td><div class="d2-4-2"> Complete</div></td>
                               <td><div class="d2-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-3-1">
                               <td ><strong >Task-3-1</strong></td>
                               <td><div class="d3-1-1"> Complete</div></td>
                               <td><div class="d3-1-2"> Complete</div></td>
                               <td><div class="d3-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-3-2">
                               <td><strong>Task-3-2</strong></td>
                               <td><div class="d3-2-1"> Complete</div></td>
                               <td><div class="d3-2-2"> Complete</div></td>
                               <td><div class="d3-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d3-3-1"> Complete</div></td>
                               <td><div class="d3-3-2"> Complete</div></td>
                               <td><div class="d3-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d3-4-1"> Complete</div></td>
                               <td><div class="d3-4-2"> Complete</div></td>
                               <td><div class="d3-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-4-1">
                               <td ><strong >Task-4-1</strong></td>
                               <td><div class="d4-1-1"> Complete</div></td>
                               <td><div class="d4-1-2"> Complete</div></td>
                               <td><div class="d4-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-4-2">
                               <td><strong>Task-4-2</strong></td>
                               <td><div class="d4-2-1"> Complete</div></td>
                               <td><div class="d4-2-2"> Complete</div></td>
                               <td><div class="d4-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d4-3-1"> Complete</div></td>
                               <td><div class="d4-3-2"> Complete</div></td>
                               <td><div class="d4-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d4-4-1"> Complete</div></td>
                               <td><div class="d4-4-2"> Complete</div></td>
                               <td><div class="d4-4-3"> Complete</div></td>
                           </tr>
                          



                           </tbody>
                       </table>

                      
                   </div>

                </div>
                   </div>
            </div>

            <div class="col-md-4  data_box" >     
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m3-3-1" class="active active_background" href="#Circle Bar" onclick="changeContent(3,3,1);">Circle Bar</a></li>
                        <li><a id = "m3-3-2" href="#Table" onclick="changeContent(3,3,2);">Table</a></li>
                    </ul>
                </nav>  
                <div id="mn3-3-1">

                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-2.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 9 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>

                   </div>
               <div id="mn3-3-2"style="display:none">  
                <div class="row pre-scrollable">
                    <div class=" col-md-11 col-md-offset-1 task-list" >
                       <table class="table" id="table9">
                           <thead>
                           <tr>
                               <th>
                                  Task
                               </th>
                               <th>
                                   Waiting To Do
                               </th>
                               <th>
                                   In Process
                               </th>
                               <th>
                                   Finished
                               </th>
                           </tr>
                           </thead>

                           <tbody>                       
                           <tr class="Task-1-1">
                               <td ><strong >Task-1-1</strong></td>
                               <td><div class="d1-1-1"> Complete</div></td>
                               <td><div class="d1-1-2"> Complete</div></td>
                               <td><div class="d1-1-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-2">
                               <td><strong>Task-1-2</strong></td>
                               <td><div class="d1-2-1"> Complete</div></td>
                               <td><div class="d1-2-2"> Complete</div></td>
                               <td><div class="d1-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-3">
                               <td><strong>Task-1-3</strong></td>
                               <td><div class="d1-3-1"> Complete</div></td>
                               <td><div class="d1-3-2"> Complete</div></td>
                               <td><div class="d1-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-4">
                               <td><strong>Task-1-4</strong></td>
                               <td><div class="d1-4-1"> Complete</div></td>
                               <td><div class="d1-4-2"> Complete</div></td>
                               <td><div class="d1-4-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-1">
                               <td ><strong >Task-2-1</strong></td>
                               <td><div class="d2-1-1"> Complete</div></td>
                               <td><div class="d2-1-2"> Complete</div></td>
                               <td><div class="d2-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-2">
                               <td><strong>Task-2-2</strong></td>
                               <td><div class="d2-2-1"> Complete</div></td>
                               <td><div class="d2-2-2"> Complete</div></td>
                               <td><div class="d2-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-3">
                               <td><strong>Task-2-3</strong></td>
                               <td><div class="d2-3-1"> Complete</div></td>
                               <td><div class="d2-3-2"> Complete</div></td>
                               <td><div class="d2-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-4">
                               <td><strong>Task-2-4</strong></td>
                               <td><div class="d2-4-1"> Complete</div></td>
                               <td><div class="d2-4-2"> Complete</div></td>
                               <td><div class="d2-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-3-1">
                               <td ><strong >Task-3-1</strong></td>
                               <td><div class="d3-1-1"> Complete</div></td>
                               <td><div class="d3-1-2"> Complete</div></td>
                               <td><div class="d3-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-3-2">
                               <td><strong>Task-3-2</strong></td>
                               <td><div class="d3-2-1"> Complete</div></td>
                               <td><div class="d3-2-2"> Complete</div></td>
                               <td><div class="d3-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d3-3-1"> Complete</div></td>
                               <td><div class="d3-3-2"> Complete</div></td>
                               <td><div class="d3-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d3-4-1"> Complete</div></td>
                               <td><div class="d3-4-2"> Complete</div></td>
                               <td><div class="d3-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-4-1">
                               <td ><strong >Task-4-1</strong></td>
                               <td><div class="d4-1-1"> Complete</div></td>
                               <td><div class="d4-1-2"> Complete</div></td>
                               <td><div class="d4-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-4-2">
                               <td><strong>Task-4-2</strong></td>
                               <td><div class="d4-2-1"> Complete</div></td>
                               <td><div class="d4-2-2"> Complete</div></td>
                               <td><div class="d4-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d4-3-1"> Complete</div></td>
                               <td><div class="d4-3-2"> Complete</div></td>
                               <td><div class="d4-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d4-4-1"> Complete</div></td>
                               <td><div class="d4-4-2"> Complete</div></td>
                               <td><div class="d4-4-3"> Complete</div></td>
                           </tr>
                          



                           </tbody>
                       </table>

                      
                   </div>

                </div>
                   </div>
            </div>
        </div>
        <br>

        <!-- Data row 4 -->
          <div class="row"  >
            <div class="col-md-4  data_box" > 
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m4-1-1" class="active active_background" href="#Circle Bar" onclick="changeContent(4,1,1);">Circle Bar</a></li>
                        <li><a id = "m4-1-2" href="#Table" onclick="changeContent(4,1,2);">Table</a></li>
                    </ul>  
                </nav>  
                <div id="mn4-1-1">

                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-6.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 10 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>
                   </div>
               <div id="mn4-1-2"style="display:none">  
                <div class="row pre-scrollable">
                    <div class=" col-md-11 col-md-offset-1 task-list" >
                       <table class="table" id="table10">
                           <thead>
                           <tr>
                               <th>
                                  Task
                               </th>
                               <th>
                                   Waiting To Do
                               </th>
                               <th>
                                   In Process
                               </th>
                               <th>
                                   Finished
                               </th>
                           </tr>
                           </thead>

                           <tbody>                       
                           <tr class="Task-1-1">
                               <td ><strong >Task-1-1</strong></td>
                               <td><div class="d1-1-1"> Complete</div></td>
                               <td><div class="d1-1-2"> Complete</div></td>
                               <td><div class="d1-1-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-2">
                               <td><strong>Task-1-2</strong></td>
                               <td><div class="d1-2-1"> Complete</div></td>
                               <td><div class="d1-2-2"> Complete</div></td>
                               <td><div class="d1-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-3">
                               <td><strong>Task-1-3</strong></td>
                               <td><div class="d1-3-1"> Complete</div></td>
                               <td><div class="d1-3-2"> Complete</div></td>
                               <td><div class="d1-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-4">
                               <td><strong>Task-1-4</strong></td>
                               <td><div class="d1-4-1"> Complete</div></td>
                               <td><div class="d1-4-2"> Complete</div></td>
                               <td><div class="d1-4-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-1">
                               <td ><strong >Task-2-1</strong></td>
                               <td><div class="d2-1-1"> Complete</div></td>
                               <td><div class="d2-1-2"> Complete</div></td>
                               <td><div class="d2-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-2">
                               <td><strong>Task-2-2</strong></td>
                               <td><div class="d2-2-1"> Complete</div></td>
                               <td><div class="d2-2-2"> Complete</div></td>
                               <td><div class="d2-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-3">
                               <td><strong>Task-2-3</strong></td>
                               <td><div class="d2-3-1"> Complete</div></td>
                               <td><div class="d2-3-2"> Complete</div></td>
                               <td><div class="d2-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-4">
                               <td><strong>Task-2-4</strong></td>
                               <td><div class="d2-4-1"> Complete</div></td>
                               <td><div class="d2-4-2"> Complete</div></td>
                               <td><div class="d2-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-3-1">
                               <td ><strong >Task-3-1</strong></td>
                               <td><div class="d3-1-1"> Complete</div></td>
                               <td><div class="d3-1-2"> Complete</div></td>
                               <td><div class="d3-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-3-2">
                               <td><strong>Task-3-2</strong></td>
                               <td><div class="d3-2-1"> Complete</div></td>
                               <td><div class="d3-2-2"> Complete</div></td>
                               <td><div class="d3-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d3-3-1"> Complete</div></td>
                               <td><div class="d3-3-2"> Complete</div></td>
                               <td><div class="d3-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d3-4-1"> Complete</div></td>
                               <td><div class="d3-4-2"> Complete</div></td>
                               <td><div class="d3-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-4-1">
                               <td ><strong >Task-4-1</strong></td>
                               <td><div class="d4-1-1"> Complete</div></td>
                               <td><div class="d4-1-2"> Complete</div></td>
                               <td><div class="d4-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-4-2">
                               <td><strong>Task-4-2</strong></td>
                               <td><div class="d4-2-1"> Complete</div></td>
                               <td><div class="d4-2-2"> Complete</div></td>
                               <td><div class="d4-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d4-3-1"> Complete</div></td>
                               <td><div class="d4-3-2"> Complete</div></td>
                               <td><div class="d4-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d4-4-1"> Complete</div></td>
                               <td><div class="d4-4-2"> Complete</div></td>
                               <td><div class="d4-4-3"> Complete</div></td>
                           </tr>
                          



                           </tbody>
                       </table>

                      
                   </div>

                </div>
                   </div>  
            </div>

            <div class="col-md-4  data_box" >     
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m4-2-1" class="active active_background" href="#Circle Bar" onclick="changeContent(4,2,1);">Circle Bar</a></li>
                        <li><a id = "m4-2-2" href="#Table" onclick="changeContent(4,2,2);">Table</a></li>
                    </ul>
                </nav>  
                <div id="mn4-2-1">

                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-2.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 11 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>
                   </div>
               <div id="mn4-2-2"style="display:none">  
                <div class="row pre-scrollable">
                    <div class=" col-md-11 col-md-offset-1 task-list" >
                       <table class="table" id="table11">
                           <thead>
                           <tr>
                               <th>
                                  Task
                               </th>
                               <th>
                                   Waiting To Do
                               </th>
                               <th>
                                   In Process
                               </th>
                               <th>
                                   Finished
                               </th>
                           </tr>
                           </thead>

                           <tbody>                       
                           <tr class="Task-1-1">
                               <td ><strong >Task-1-1</strong></td>
                               <td><div class="d1-1-1"> Complete</div></td>
                               <td><div class="d1-1-2"> Complete</div></td>
                               <td><div class="d1-1-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-2">
                               <td><strong>Task-1-2</strong></td>
                               <td><div class="d1-2-1"> Complete</div></td>
                               <td><div class="d1-2-2"> Complete</div></td>
                               <td><div class="d1-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-3">
                               <td><strong>Task-1-3</strong></td>
                               <td><div class="d1-3-1"> Complete</div></td>
                               <td><div class="d1-3-2"> Complete</div></td>
                               <td><div class="d1-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-4">
                               <td><strong>Task-1-4</strong></td>
                               <td><div class="d1-4-1"> Complete</div></td>
                               <td><div class="d1-4-2"> Complete</div></td>
                               <td><div class="d1-4-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-1">
                               <td ><strong >Task-2-1</strong></td>
                               <td><div class="d2-1-1"> Complete</div></td>
                               <td><div class="d2-1-2"> Complete</div></td>
                               <td><div class="d2-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-2">
                               <td><strong>Task-2-2</strong></td>
                               <td><div class="d2-2-1"> Complete</div></td>
                               <td><div class="d2-2-2"> Complete</div></td>
                               <td><div class="d2-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-3">
                               <td><strong>Task-2-3</strong></td>
                               <td><div class="d2-3-1"> Complete</div></td>
                               <td><div class="d2-3-2"> Complete</div></td>
                               <td><div class="d2-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-4">
                               <td><strong>Task-2-4</strong></td>
                               <td><div class="d2-4-1"> Complete</div></td>
                               <td><div class="d2-4-2"> Complete</div></td>
                               <td><div class="d2-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-3-1">
                               <td ><strong >Task-3-1</strong></td>
                               <td><div class="d3-1-1"> Complete</div></td>
                               <td><div class="d3-1-2"> Complete</div></td>
                               <td><div class="d3-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-3-2">
                               <td><strong>Task-3-2</strong></td>
                               <td><div class="d3-2-1"> Complete</div></td>
                               <td><div class="d3-2-2"> Complete</div></td>
                               <td><div class="d3-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d3-3-1"> Complete</div></td>
                               <td><div class="d3-3-2"> Complete</div></td>
                               <td><div class="d3-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d3-4-1"> Complete</div></td>
                               <td><div class="d3-4-2"> Complete</div></td>
                               <td><div class="d3-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-4-1">
                               <td ><strong >Task-4-1</strong></td>
                               <td><div class="d4-1-1"> Complete</div></td>
                               <td><div class="d4-1-2"> Complete</div></td>
                               <td><div class="d4-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-4-2">
                               <td><strong>Task-4-2</strong></td>
                               <td><div class="d4-2-1"> Complete</div></td>
                               <td><div class="d4-2-2"> Complete</div></td>
                               <td><div class="d4-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d4-3-1"> Complete</div></td>
                               <td><div class="d4-3-2"> Complete</div></td>
                               <td><div class="d4-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d4-4-1"> Complete</div></td>
                               <td><div class="d4-4-2"> Complete</div></td>
                               <td><div class="d4-4-3"> Complete</div></td>
                           </tr>
                          



                           </tbody>
                       </table>

                      
                   </div>

                </div>
                   </div>
            </div>

            <div class="col-md-4  data_box" >     
                <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a id = "m4-3-1" class="active active_background" href="#Circle Bar" onclick="changeContent(4,3,1);">Circle Bar</a></li>
                        <li><a id = "m4-3-2" href="#Table" onclick="changeContent(4,3,2);">Table</a></li>
                    </ul>
                </nav>  
                <div id="mn4-3-1">

                    this is the circle bar
                    <div class="row">
                    <div class="col-md-6" >
                        <div class="curve-box">
                            <div class="square">
                                <div class="c1"></div>
                            </div>
                            <div class="square">
                                <div class="c2"></div>
                            </div>
                           </div>
                           <div class="curve-box">
                            <div class="square">
                                <div class="c4"></div>
                            </div>
                            <div class="square">
                                <div class="c3"></div>
                            </div>
                           </div>
                    </div>   
                    <div class="col-md-6" >
                        <div class="row" >
                        <div class="col-md-5">
                            
                            <img src="img/patient-4.png" class="patient" >
                        </div>
                        <div class="col-md-7">
                            
                            <div class="patient" >patient 12 </div>
                        </div>                    
                           </div>
                           <div class="row">
                            <p class="p1">
                                Life isn’t about finding yourself.
                               Life is about creating yourself.</p>
                           </div>
    
                    </div>
    
                     </div>
                   </div>
               <div id="mn4-3-2"style="display:none">  
                <div class="row pre-scrollable">
                    <div class=" col-md-11 col-md-offset-1 task-list" >
                       <table class="table" id="table12">
                           <thead>
                           <tr>
                               <th>
                                  Task
                               </th>
                               <th>
                                   Waiting To Do
                               </th>
                               <th>
                                   In Process
                               </th>
                               <th>
                                   Finished
                               </th>
                           </tr>
                           </thead>

                           <tbody>                       
                           <tr class="Task-1-1">
                               <td ><strong >Task-1-1</strong></td>
                               <td><div class="d1-1-1"> Complete</div></td>
                               <td><div class="d1-1-2"> Complete</div></td>
                               <td><div class="d1-1-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-2">
                               <td><strong>Task-1-2</strong></td>
                               <td><div class="d1-2-1"> Complete</div></td>
                               <td><div class="d1-2-2"> Complete</div></td>
                               <td><div class="d1-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-3">
                               <td><strong>Task-1-3</strong></td>
                               <td><div class="d1-3-1"> Complete</div></td>
                               <td><div class="d1-3-2"> Complete</div></td>
                               <td><div class="d1-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-1-4">
                               <td><strong>Task-1-4</strong></td>
                               <td><div class="d1-4-1"> Complete</div></td>
                               <td><div class="d1-4-2"> Complete</div></td>
                               <td><div class="d1-4-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-1">
                               <td ><strong >Task-2-1</strong></td>
                               <td><div class="d2-1-1"> Complete</div></td>
                               <td><div class="d2-1-2"> Complete</div></td>
                               <td><div class="d2-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-2-2">
                               <td><strong>Task-2-2</strong></td>
                               <td><div class="d2-2-1"> Complete</div></td>
                               <td><div class="d2-2-2"> Complete</div></td>
                               <td><div class="d2-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-3">
                               <td><strong>Task-2-3</strong></td>
                               <td><div class="d2-3-1"> Complete</div></td>
                               <td><div class="d2-3-2"> Complete</div></td>
                               <td><div class="d2-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-2-4">
                               <td><strong>Task-2-4</strong></td>
                               <td><div class="d2-4-1"> Complete</div></td>
                               <td><div class="d2-4-2"> Complete</div></td>
                               <td><div class="d2-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-3-1">
                               <td ><strong >Task-3-1</strong></td>
                               <td><div class="d3-1-1"> Complete</div></td>
                               <td><div class="d3-1-2"> Complete</div></td>
                               <td><div class="d3-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-3-2">
                               <td><strong>Task-3-2</strong></td>
                               <td><div class="d3-2-1"> Complete</div></td>
                               <td><div class="d3-2-2"> Complete</div></td>
                               <td><div class="d3-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d3-3-1"> Complete</div></td>
                               <td><div class="d3-3-2"> Complete</div></td>
                               <td><div class="d3-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-3-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d3-4-1"> Complete</div></td>
                               <td><div class="d3-4-2"> Complete</div></td>
                               <td><div class="d3-4-3"> Complete</div></td>
                           </tr>
                          
                           <tr class="Task-4-1">
                               <td ><strong >Task-4-1</strong></td>
                               <td><div class="d4-1-1"> Complete</div></td>
                               <td><div class="d4-1-2"> Complete</div></td>
                               <td><div class="d4-1-3"> Complete</div></td>
                           </tr>
                           
                           <tr class="Task-4-2">
                               <td><strong>Task-4-2</strong></td>
                               <td><div class="d4-2-1"> Complete</div></td>
                               <td><div class="d4-2-2"> Complete</div></td>
                               <td><div class="d4-2-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-3">
                               <td><strong>Task-3-3</strong></td>
                               <td><div class="d4-3-1"> Complete</div></td>
                               <td><div class="d4-3-2"> Complete</div></td>
                               <td><div class="d4-3-3"> Complete</div></td>
                           </tr>
                           <tr class="Task-4-4">
                               <td><strong>Task-3-4</strong></td>
                               <td><div class="d4-4-1"> Complete</div></td>
                               <td><div class="d4-4-2"> Complete</div></td>
                               <td><div class="d4-4-3"> Complete</div></td>
                           </tr>
                          



                           </tbody>
                       </table>

                      
                   </div>

                </div>
                   </div>
            </div>
        </div>
        <br>

        <!-- End of container -->
      </div>
    
        <!-- End of body -->
    </body>

</html>