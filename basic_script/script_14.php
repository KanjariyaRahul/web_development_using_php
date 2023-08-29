<!-- 14.Create a PHP program that uses echo to display the following text with proper formatting:
    line1
        line2
            line3 -->


<?php
    echo "<ul>\n";
    echo "    line1\n";
    echo "    <ul>\n";
    echo "       line2\n";
    echo "        <ul>\n";
    echo "            line3\n";
    echo "        </ul>\n";
    echo "    </ul>\n";
    echo "</ul>\n";
?>



