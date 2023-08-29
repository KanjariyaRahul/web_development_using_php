<!-- Write a PHP program that uses concatenation to display an HTML anchor (<a>) element with the
text "Click here" and a link to "https://www.example.com". -->


    <?php
        $linkText = "Click here";
        $linkUrl = "https://www.example.com";
        $anchorTag = '<a href="' . $linkUrl . '">' . $linkText . '</a>';
        echo $anchorTag;
    ?>
