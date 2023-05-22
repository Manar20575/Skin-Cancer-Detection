<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500;700;100;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./src/index.css">
    <title>Skin Cancer</title>
    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
</head>

<body>
    <div class="main">
        <img id="hero" src="./images/hero.jpg" class="hero">
        <div class="white">
            <h1>Skin Cancer Detection</h1>
            <h2>Life is beautiful and it is worth enjoying every moment of it!</h2>
            <div class="annual">
                <form action="skin_cancer_img.php" method="POST" enctype="multipart/form-data">
                    <label for="img">Upload Your Image : </label>
                    <input type="file" name="img" accept=".jpg, .jpeg, .png" require>
                    <input class="proceed" type="submit" name="submit-img" value="Detect">
                </form>
            </div>
        </div>
    </div>
</body>

</html>