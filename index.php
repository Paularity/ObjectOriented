<?

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.inc.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/classes.inc.php';

$db = new Database();

?>

<!DOCTYPE>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="p-5">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>VIN</th>
                <th>Precint No.</th>
            </tr>
            </thead>

            <tbody>

            <?
            foreach($db->getAllData("voter_tbl") as $value){
                extract($value); ?>
                <tr>
                    <td><?= $lastname. ', ' .$firstname ?></td>
                    <td><?= $vin ?></td>
                    <td><?= $precint_no ?></td>
                </tr>


                <?
            }
            ?>

            </tbody>
    </div>


    </table>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>

