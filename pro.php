<?php
require 'dbcontact.php';
if(isset($_POST['action']))
$query="select * FROM 'contactform'";


       if($is_query_run=mysql_query($query))
             {
       while($query_executed=mysql_fetch_assoc($is_query_run))
       {
     
                
                    echo $query_executed['Name'].' ';
                    echo $query_executed['Contact'].' ';
                    echo $query_executed['Product'].' ';
                    echo $query_executed['Email'].' ';
                    echo $query_executed['Comment'].' ';
                   echo $query_executed['rate'].' ';
          }
      }
                   else
                   {
                   echo "eror";
                   }
                   ?>
