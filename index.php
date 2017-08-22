<?php
include('application/core/Logger.php');
$log = new Logger("log");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/>bootstrap.css"></link>
    <link rel="stylesheet" href="css/>bootstrap.min.css"></link>
</head>

<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">CRUD</a>
    </nav>

    <div class="row col-sm-8">
        <div class="col-sm-4">
            <form>
                <div class="form-group top">
                    <label for="exampleInputName1">Name</label>
                    <input class="form-control" id="inputName" placeholder="Enter name"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Surname</label>
                    <input type="email" class="form-control" id="inputSurname" placeholder="Surname">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>

                <button type="submit" class="btn btn-primary btn-group-xs" onclick="saveData()">Ok</button>
            </form>
        </div>
    </div>
</div>


<div class="fixed-bottom">
    <div class="w-100 p-3 mb-2 bg-primary text-white d-flex justify-content-center">

        <?php
        $log->get_draftcommands();

        ?>
    </div>
</div>
<script>
    function saveData() {
        var name    = $('inputName').val();
        var surname = $('inputSurname').val();
        var email   = $('inputEmail').val();
        $.ajax({
            type: "POST",
            url: 'db.php?p=add',
            data: "inputName="+name+"&inputSurname="+surname+"&inputEmail="+email,
            success: function (msg) {
                alert("success insert data");
            }
        });
    }

</script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



</body>

