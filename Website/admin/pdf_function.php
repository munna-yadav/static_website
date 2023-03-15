
<?php
function display_pdf(){
    $conn = mysqli_connect("localhost", "root","password", "website");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $query = "SELECT * FROM application_dralion ";
    $select_pdf = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($select_pdf)) {
        


        $id= $row['id'];
        $name=$row['name'];
        $address=$row['address'];
        $phone=$row['phone'];
        $email=$row['email'];
        $cv= $row['cv'];
       
              
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
         echo"<td>{$id}</td>";
          echo"<td>{$name}</td>";
            echo"<td>{$address}</td>";
            echo"<td>{$phone}</td>";
            echo"<td>{$email}</td>";
            echo"<td> <a href='./cv/{$cv}' >CV</a></td>";
          echo"</tr>";
          echo"</tbody>";
         echo"</table>"; 
    }  
}
  
?>