<?php

namespace Parsing;

class Parse
{
    public function digest($number)
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'PHP';
            // Create connection
        $dbConnection = mysql_connect($servername, $username, $password)
        or die('Unable to connect to MySQL');
        mysql_select_db($dbname, $dbConnection)
        or die('Could not select examples');
        $query = 'SELECT format, id FROM c_table';
        $result = mysql_query($query);
            // output data of each row
        $found = false;
        while ($row = mysql_fetch_array($result, MYSQLI_ASSOC)) {
            $format = $row['format'];

            if (preg_match("/{$format}/", $number)) {
                $found = true;
                $tableId = $row['id'];
                $query2 = "SELECT * FROM c_table WHERE id = $tableId";
                $result2 = mysql_query($query2);
                while ($row2 = mysql_fetch_array($result2, MYSQLI_ASSOC)) {
                    $pure = preg_split("/{$row2['calling_code']}/", $number);
                    echo '<br>result: '.$row2['name'].', 
                    '.$row2['calling_code'].', '.$pure[1].', '.$row2['country_code'];
                }
            }
        }
        if (!$found) {
            echo '<br>'.$number;
        }
        mysql_close($dbConnection);
    }
}
