<h1> Hands-on Activity</h1>
<?php
$table = array();
foreach ($table as $x) {
echo "$x <br>";

$table = array(
    "header" =>array(
       
        "Firstname",
        "Middlename",
        "Lastname",
        "Sections",
        "Course",
        "Yearlevel",
    ),
    "body "=>array(
        "Firstname" => "Firstname",
        "Middlename" => "Middlename",
        "Lastname" => "Lastname",
        "Section" => "Section",
        "Course" => "Course",
        "Yearlevel" => "Yearlevel",
       
    ),
    array(
        "Firstname" => "Firstname",
        "Middlename" => "Middlename",
        "Lastname" => "Lastname",
        "Section" => "Section",
        "Course" => "Course",
        "Yearlevel" => "Yearlevel",
       
    ),
    array(
        "Firstname" => "Firstname",
        "Middlename" => "Middlename",
        "Lastname" => "Lastname",
        "Section" => "Section",
        "Course" => "Course",
        "Yearlevel" => "Yearlevel",
       
    ),
    array(
        "Firstname" => "Firstname",
        "Middlename" => "Middlename",
        "Lastname" => "Lastname",
        "Section" => "Section",
        "Course" => "Course",
        "Yearlevel" => "Yearlevel",
       
    ),
    array(
        "Firstname" => "Firstname",
        "Middlename" => "Middlename",
        "Lastname" => "Lastname",
        "Section" => "Section",
        "Course" => "Course",
        "Yearlevel" => "Yearlevel",
       
    ),
    array(
        "Firstname" => "Firstname",
        "Middlename" => "Middlename",
        "Lastname" => "Lastname",
        "Section" => "Section",
        "Course" => "Course",
        "Yearlevel" => "Yearlevel",
       
    ),
    array(
        "Firstname" => "Firstname",
        "Middlename" => "Middlename",
        "Lastname" => "Lastname",
        "Section" => "Section",
        "Course" => "Course",
        "Yearlevel" => "Yearlevel",
       
    ),
    array(
        "Firstname" => "Firstname",
        "Middlename" => "Middlename",
        "Lastname" => "Lastname",
        "Section" => "Section",
        "Course" => "Course",
        "Yearlevel" => "Yearlevel",
       
    ),
    array(
        "Firstname" => "Firstname",
        "Middlename" => "Middlename",
        "Lastname" => "Lastname",
        "Section" => "Section",
        "Course" => "Course",
        "Yearlevel" => "Yearlevel",
       
    ),
   

);
}
?>

<table border ="1">
    

   
    <thead>
       
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Section</th>
        <th>Course</th>
        <th>Yearlevel</th>


    </thead>
    <tbody> 
        <?php
        for ($i = 0; $i < 10; $i++) {
       echo "<tr>
            
            <td>Ben</td>
            <td>Francisco</td>
            <td>it-3b</td>
            <td>It</td>
            <td>3rd-year</td>
            
            </tr>";
        }
        ?>
    </tbody>
</table>