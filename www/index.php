<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Center</title>
    <style>
        /* Styling */
        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        li {
            text-align: center;
        }

        img {
            width: 150px;
            /* width is set to a fixed value */
            height: 150px;
            /* height matches the width, making the images square */
            object-fit: cover;
            /* Ensures the image doesn't stretch but covers the space */
            border-radius: 10px;
            display: block;
            margin: 0 auto;
        }

        .dog-name {
            font-size: 18px;
            font-weight: bold;
            margin-top: 5px;
            display: block;
            cursor: pointer;
        }
    </style>
</head>

<body>
<h1>Welcome to the Adoption Center</h1>

<!-- Non-functioning searchbar -->
<div class="search-bar">
    <form>
        <input type="text" placeholder="Search dogs...">
        <button type="submit">Search</button>
    </form>
</div>

<h2>Available Dogs for Adoption:</h2>

<?php
// PHP Array with dog names and images
$dogs = [
    ["name" => "Rex", "image" => "images/Rex.jpg"],
    ["name" => "Bella", "image" => "images/Bella.jpg"],
    ["name" => "Max", "image" => "images/Max.jpg"],
    ["name" => "Lucy", "image" => "images/Lucy.jpg"],
    ["name" => "Ralph", "image" => "images/Ralph.jpg"],
    ["name" => "Coco", "image" => "images/Frenchie.jpg"]
];

// Loop through the array and display each name with image
echo "<ul>";
foreach ($dogs as $dog) {
    echo "<li>";
    echo "<img src='" . $dog['image'] . "' alt='" . $dog['name'] . "'>";
    // Add a link to the dog description page
    echo "<a href='dog_description.php?dog=" . urlencode($dog['name']) . "'><span class='dog-name'>" . $dog['name'] . "</span></a>";
    echo "</li>";
}
echo "</ul>";
?>

</body>

</html>
