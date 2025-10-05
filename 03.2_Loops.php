
<!DOCTYPE html>
<head>
    <title>For Döngüleri </title>
</head>
<body>
    <table border="1" style="text-align: center;">
        <tr>
            <?php
            //İÇ İÇE FOR DÖNGÜSÜ
            $colors=["#f8c291", "#82ccdd", "#b8e994", "#f6b93b", "#60a3bc", "#78e08f", "#3c6382", "#38ada9", "#e55039", "#9a8ce8ff"];
            for($i=1; $i<=10; $i++)
            {
                echo "<td style = 'background-color:" .$colors[$i-1]."; padding:10px'>";
                for($j=1; $j<=10; $j++)
                    {
                       echo $i*$j . "</br>"; 
                    } 
                    echo "</td>";
            }
            ?>
        </tr>
    </table>
</body>