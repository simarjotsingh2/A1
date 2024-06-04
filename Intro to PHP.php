<?php

/*******w******** 
    
    Name: Simarjot Singh
    Date: 20-05-2024
    Description: fetching images through php code.

****************/

$config = [

    'gallery_name' => 'Simarjot Gallery',
 
    'unsplash_categories' => ['Statue','Moon','Trees','Buildings','Animal','Nature'],
 
    'local_images' => [
        ['filename' => 'image_man.jpg', 'photographer' => ['name' => 'Eren Yildiz', 'url' => 'https://unsplash.com/photos/a-sculpture-of-a-man-with-a-pot-on-his-head-_AEkfv-_l3c']],
        ['filename' => 'image_moon.jpg', 'photographer' => ['name' => 'Mark mc neill', 'url' => 'https://unsplash.com/photos/a-full-moon-is-seen-in-the-dark-sky-sGLdzR3guyQ']],
        ['filename' => 'image_black.jpg', 'photographer' => ['name' => 'Point Normal', 'url' => 'https://unsplash.com/photos/a-black-and-white-photo-of-a-persons-torso-gTUkdnhqnq4']],
        ['filename' => 'image_building.jpg', 'photographer' => ['name' => 'Josh Hild', 'url' => 'https://unsplash.com/photos/a-view-of-a-city-at-night-from-the-top-of-a-building-s52NXbmZfCc']]

 
]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title><?= $config['gallery_name']; ?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <h1><?php echo $config['gallery_name']; ?></h1>

    <div class = "gallery">
        <?php for($i = 0; $i < count($config['unsplash_categories']); $i++): ?>
            <h2><?php echo $config['unsplash_categories'][$i]; ?></h2>
            <img src="https://source.unsplash.com/300x200/?<?php echo $config['unsplash_categories'][$i]; ?>" alt="<?php echo $config['unsplash_categories'][$i]; ?> image">
            <?php endfor; ?>
    </div>

    <div class="l-gallery">
    <?php for ($i = 0; $i < count($config['local_images']); $i++): ?>
        <div class="local-image">
            <a href="<?php echo $config['local_images'][$i]['photographer']['url']; ?>" target="_blank">
                <h3><?php echo $config['local_images'][$i]['photographer']['name']; ?></h3>
            </a>
            <img src="images/<?php echo $config['local_images'][$i]['filename']; ?>" alt="<?php echo $config['local_images'][$i]['filename']; ?>">
            </div>
    <?php endfor; ?>
    </div>
     
</body>
</html>