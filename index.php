<?php
namespace eBaseInterviewExercise;

class Interview
{
    public static $title = 'Interview test';
    
    public static $people = array(
        array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
        array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
        array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
        array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
        array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
    );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interview test</title>
    <style>
        body {font: normal 14px/1.5 sans-serif;}
    </style>
</head>
<body>

    <h1><?=Interview::$title;?></h1>

    <hr>

    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (Interview::$people as $person) : ?>
                <tr>
                    <td><?=$person['first_name'];?></td>
                    <td><?=$person['last_name'];?></td>
                    <td><?=$person['email'];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>