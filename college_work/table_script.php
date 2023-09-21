<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Tables</title>
    <style>
        .table-container {
            display: flex;
            justify-content: center;
            
        }

        table {
            border-collapse: collapse;
            border: 1px solid black;
            margin: 20px;
            background-color: green;
        }

        th, td {
            border: 2px solid darkgrey;
            text-align: center;
            color: white;
        

        caption {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <table>
            
            <?php
            $a = 1;

            for ($i = 1; $i <= 10; $i++) {
                $result = $a * $i;
                echo "<tr>";
                echo "<td>$a</td>";
                echo "<td>*</td>";
                echo "<td>$i</td>";
                echo "<td>=</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <table>
            
            <?php
            $a = 2;

            for ($i = 1; $i <= 10; $i++) {
                $result = $a * $i;
                echo "<tr>";
                echo "<td>$a</td>";
                echo "<td>*</td>";
                echo "<td>$i</td>";
                echo "<td>=</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <table>
            
            <?php
            $a = 3;

            for ($i = 1; $i <= 10; $i++) {
                $result = $a * $i;
                echo "<tr>";
                echo "<td>$a</td>";
                echo "<td>*</td>";
                echo "<td>$i</td>";
                echo "<td>=</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <table>
            
            <?php
            $a = 4;

            for ($i = 1; $i <= 10; $i++) {
                $result = $a * $i;
                echo "<tr>";
                echo "<td>$a</td>";
                echo "<td>*</td>";
                echo "<td>$i</td>";
                echo "<td>=</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <table>
            
            <?php
            $a = 5;

            for ($i = 1; $i <= 10; $i++) {
                $result = $a * $i;
                echo "<tr>";
                echo "<td>$a</td>";
                echo "<td>*</td>";
                echo "<td>$i</td>";
                echo "<td>=</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
