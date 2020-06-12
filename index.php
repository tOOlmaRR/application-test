<?php
// TODO: Define Person as a class and load in a list of objects instead of this array
$allPeople = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interview test</title>
    <script src="scripts/main.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
</head>
<body>
    <h1>Interview Test</h1>
    <hr>
    <table id="peopleTable">
        <thead>
            <tr>
                <th></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allPeople as $index => $person) : ?>
                <tr>
                    <td class="select">
                        <button type="button" id="person<?=$person['id'];?>" name="<?=$person['id'];?>" onclick="sayHi('<?=$person['first_name'];?>','<?=$person['last_name'];?>','<?=$person['email'];?>');">Greet</button>
                    <td>
                        <?=$person['first_name'];?>
                    </td>
                    <td>
                        <?=$person['last_name'];?>
                    </td>
                    <td>
                        <?=$person['email'];?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>