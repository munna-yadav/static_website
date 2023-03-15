<?php
function display_contact(){
$conn = mysqli_connect("localhost", "root","password", "website");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo"no databse connection";
}
    $query = "SELECT * FROM message ";
    $select_message = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($select_message)) {
        $name=$row['Name'];
        $address=$row['Address'];
        $phone=$row['Phone'];
        $email=$row['E-mail'];
        $comment= $row['Message'];
       
              
          echo"<table>"; 
          echo"<style>
            table {
                border-collapse: collapse;
                width: 90%;
                table-layout:fixed;
                
                
            }
            th{
                text-align: centre;
                padding: 5px;
                border: 1px solid #ddd;
            }
             td {
        
                text-align: centre;
                padding: 7px;
                border: 1px solid #ddd;
            }
            </style>";
          echo" <tbody>";
         echo" <tr>";
         
          echo"<td>{$name}</td>";
            echo"<td>{$address}</td>";
            echo"<td>{$phone}</td>";
            echo"<td>{$email}</td>";
            echo"<td> {$comment}</td>";
          echo"</tr>";
          echo"</tbody>";
         echo"</table>"; 
    }  
}
  
?>