
<!-- handel file + classification -->
<?php
require_once('machine_learning.php'); //include file machine
    if(isset($_POST['submit-img'])){ //if submit
        $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION); //know extention of img in client pc (name)
        $dst_fname = getcwd() . '/skin_imgs/' . time() . uniqid(rand()) . '.'. $extension;//generate new path img 
        $dst_fname = str_replace('\\', '/', $dst_fname); //replace \
        move_uploaded_file($_FILES["img"]["tmp_name"], $dst_fname);//move img from temp folder to my folder
        $result = classify_image($dst_fname); //call api
    } 
    else {
        header("Location: index.php"); //else back to homepage
    exit();
}
?>
<!-- page -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700;100;900&display=swap" rel="stylesheet"> 
  <link rel = "stylesheet" href="./src/index.css">
  <title>Skin Cancer</title>
  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
</head>
<body>
  <div class="main">
    <img id = "hero" src="./images/hero.jpg" class="hero">
    <div class="white">
        <h1>Skin Cancer Diagnosis Result</h1>
        <div class="back">
        <table>
            <tr>
                <th>Result</th>
                <td><?php echo $result['class_name']?></td>
            </tr>
            <tr>
                <th>Probability of bengin</th>
                <td><?php echo $result['prob_benign']?></td>
            </tr>
            <tr>
                <th>Probability of malignant</th>
                <td><?php echo $result['prob_malignant']?></td>
            </tr>
        </table>
        </div>
    </div>
    
    <a href="index.php" class = "back"><input class="proceed" type = "btn" name = "back" value = "Back"></a>
    </div>
</body>
</html>

