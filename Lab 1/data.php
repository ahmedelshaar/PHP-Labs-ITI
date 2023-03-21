<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data</title>
</head>
<body>
  <h3>Thanks 
    <?php if($_POST['gender'] == "male"){
      echo "MR.";
    }else{
      echo "Miss";
    }
    echo $_POST['fname'] . ' ' . $_POST['lname'];
    ?>
  </h3>
  <h4>Please Review Your Information</h4>
  <p> Name: <?= $_POST['fname'] . ' ' . $_POST['lname']; ?> </p>
  <p> Address: <?= $_POST['address']; ?> </p>
  <p> Your Skills: 
  <?php 
    foreach($_POST['skills'] as $skil){
      echo $skil . " ";
    }
  ?> 
  </p>
  <p> Deparment <?php echo $_POST['deparment']; ?></p>
</body>
</html>
