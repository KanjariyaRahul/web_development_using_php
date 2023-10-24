<!-- 1. Create an indexed array containing your favourite colors.
2. Add a new color to the array from question 1.
3. Display the color at index 2 of the array from question 1.
4. Check if the color "Green" exists in the array from question 1. -->

<?php

echo "1 - Create an indexed array containing your favourite colors :<br>";

$favorite_colors = array("Blue", "Green", "Purple",  "Red");

print_r($favorite_colors);

echo "<br><br>";

echo "2 - Add a new color to the array from question 1 : <br> ";
array_push($favorite_colors, "yellow");
print_r($favorite_colors);

echo "<br><br>";

echo " 3 - Display the color at index 2 of the array from question 1 : <br>";

echo "Color at index 2: " . $favorite_colors[2] . "<br><br>";

echo "4 - Check if the color Green exists in the array from question 1 : <br> ";

if (in_array("Green", $favorite_colors)) {
    echo "The color Green exists in the array.";
} else {
    echo "The color Green does not exist in the array.";
}

?>