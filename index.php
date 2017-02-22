<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HRA Bill Helper</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" action="./generate.php" method="post">
        <h2 class="form-signin-heading">Please Enter Details</h2>

        <div class="form-group col-xs-6 ">
            <label for="empName" class="sr-only">Employee Name</label>
            <input type="text" id="empName" class="form-control" placeholder="Your Name" name="ename" required/>
        </div>
        <div class="form-group col-xs-6 ">
            <label for="landlord" class="sr-only">Amount</label>
            <input type="text" id="landlord" class="form-control" placeholder="Land Lord Name" name="landlord"
                   required/>
        </div>
        <div class="form-group col-xs-6">
            <label for="HouseName" class="sr-only">House Name</label>
            <input type="text" id="HouseName" class="form-control" placeholder="House Name" autofocus name="housename"/>
        </div>
        <div class="form-group col-xs-6 ">
            <label for="add11" class="sr-only">Address 1</label>
            <input type="text" id="add11" class="form-control" placeholder="Address 1" name="ad1" required/>
        </div>
        <div class="form-group col-xs-6 ">
            <label for="add12" class="sr-only">Address 2</label>
            <input type="text" id="add12" class="form-control" placeholder="Address 2" name="ad2" required/>
        </div>
        <div class="form-group col-xs-6 ">
            <label for="add13" class="sr-only">Address 3</label>
            <input type="text" id="add13" class="form-control" placeholder="Address 3" name="ad3" required/>
        </div>
        <div class="form-group col-xs-6 ">
            <label for="add14" class="sr-only">Address 4</label>
            <input type="text" id="add14" class="form-control" placeholder="Address 4" name="ad4" required/>
        </div>

        <div class="form-group col-xs-6 ">
            <label for="amount" class="sr-only">Amount</label>
            <input type="number" id="amount" class="form-control" placeholder="Amount" name="amount" required/>
        </div>
        <div class="form-group col-xs-6 ">
            <label for="year" class="sr-only">Amount</label>
            <select type="number" id="year" class="form-control" placeholder="Amount" name="year">
                <?
                    $now = time();
                    for($i=date("Y",$now);$i>2014;$i--)
                    echo "<option value='$i'>$i</option>";
                ?>
            </select>
        </div>
        <div class="checkbox">

        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Generate Bills</button>
    </form>

</div>
<!-- /container -->
</body>
</html>
