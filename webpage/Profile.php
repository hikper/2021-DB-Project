<?php
    include 'db_connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
        <style type="text/css">
            body
            {
                font-family: "Arial"
            }
            .head
            {
                background-color: #003344; color: white; font-weight: bold; font-size: 50px;
                text-align: center; padding: 10px;
            }
            .box
            {
                width: 1000px; padding: 10px; margin: auto;
                background-color: white; vertical-align: center;

                text-align: center;
            }
            #btn
            {
                font-size: 20px
            }
            table
            {
                width: 800px; border: 1px solid #000000;
                border-collapse: collapse;
                word-break: break-word;
                table-layout: fixed;
                margin: auto;
                font-size: 15px;
            }
            td
            {
                border: 1px solid #000000; padding: 10px;
            }
            tr:nth-child(odd)
            {
                background-color: #7788aa; color: #ffffff;
            }
            
        </style>
    </head>

    <body style="margin: 0px; background-color: #eeeeee;">
        <div class="head">Profile</div>

        
            <?php
                $message = ""; // error message
        
                if( isset($_POST) )
                {
                    // Get data from post
                    $year =  mysqli_real_escape_string($connect, $_POST['Year']);
                    $name =  mysqli_real_escape_string($connect, $_POST['Name']);
                    
                    // SQL query
                    $sql = "SELECT * FROM master WHERE year=?' AND name=?;";
                    
                    $stmt = mysqli_stmt_init($connect);     //creat a prepared statement
                    if(!mysqli_stmt_prepare($stmt, $sql))   //prepare the prepared statement
                    {
                        // statement failed
                        echo "<p class = 'content_text'>SQL statement failed.。</p>";
                    }
                    else
                    {
                        //bind parameters to the placeholder
                        mysqli_stmt_bind_param($stmt, $year, $name);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $resultcheck = mysqli_num_rows($result); 
                        if($resultcheck_bar>0)
                        {
                            echo '<div class="box">
                                <table class="tab1">
                                    <tr>
                                        <td>NAME</td>
                                        <td>Height</td>
                                        <td>Weight</td>
                                        <td>Birthday</td>
                                        <td>Deathday</td>
                                    </tr>';
                            foreach($result as $row)
                            {//playerID,birthYear,birthMonth,birthDay,birthCountry,birthState,birthCity,deathYear,deathMonth,deathDay,deathCountry,deathState,deathCity,nameFirst,nameLast,nameGiven,weight,height,bats,throws,debut,finalGame,retroID,bbrefID
                                echo "<tr>
                                    <td>".$row['nameFirst'].", ".$row['nameLast']."</td>
                                    <td>".$row['height']."</td>
                                    <td>".$row['weight']."</td>
                                    <td>".$row['birthYear']."-".$row['birthMonth']."-".$row['birthDay']."</td>
                                    <td>".$row['deathYear']."-".$row['deathMonth']."-".$row['deathday']."</td>
                                </tr>";
                            }
                            echo "<tr>
                                <td>Years pro</td>
                                <td>Bats</td>
                                <td>Throws</td>
                                <td>AGE</td>
                                <td>COUNTRY</td>
                            </tr>"
                            foreach($result as $row)
                            {
                                echo "<tr>
                                    <td>".$row['yearsPro']."</td>
                                    <td>".$row['bats']."</td>
                                    <td>".$row['throws']."</td>
                                    <td>".$row['age']."</td>
                                    <td>".$row['birthCountry']."</td>
                                </tr>";
                            }
                            echo "</table>
                        </div>";
                        }
                        else
                        {
                            echo "<p class='content_text'>查無結果。</p>";
        
                        }
                    }
                    
                    // second query
                    $sql = "SELECT * FROM table1 WHERE year=?' AND name=?;";
                    
                    $stmt = mysqli_stmt_init($connect);     //creat a prepared statement
                    if(!mysqli_stmt_prepare($stmt, $sql))   //prepare the prepared statement
                    {
                        // statement failed
                        echo "<p class = 'content_text'>SQL statement failed.。</p>";
                    }
                    else
                    {
                        //bind parameters to the placeholder
                        mysqli_stmt_bind_param($stmt, $year, $name);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $resultcheck = mysqli_num_rows($result); 
                        if($resultcheck_bar>0)
                        {
                            echo '<div class="box">
                                <h2>Batting Stats</h2>
                                <table>
                                    <tr>
                                        <td>Year</td>
                                        <td>Team</td>
                                        <td>G</td>
                                        <td>AB</td>
                                        <td>H</td>
                                        <td>2B</td>
                                        <td>3B</td>
                                        <td>HR</td>
                                        <td>RBI</td>
                                        <td>R</td>
                                        <td>SB</td>
                                        <td>SO</td>
                                        <td>BB</td>
                                    </tr>';
                            foreach($result as $row)
                            {//playerID,yearID,stint,teamID,lgID,G,AB,R,H,2B,3B,HR,RBI,SB,CS,BB,SO,IBB,HBP,SH,SF,GIDP
                                echo "<tr>
                                    <td>".$row['yearID']."</td>
                                    <td>".$row['teamID']."</td>
                                    <td>".$row['G']."</td>
                                    <td>".$row['AB']."</td>
                                    <td>".$row['H']."</td>
                                    <td>".$row['2B']."</td>
                                    <td>".$row['3B']."</td>
                                    <td>".$row['HR']."</td>
                                    <td>".$row['RBI']."</td>
                                    <td>".$row['R']."</td>
                                    <td>".$row['SB']."</td>
                                    <td>".$row['SO']."</td>
                                    <td>".$row['BB']."</td>
                                </tr>";
                            }
                            echo "</table>
                        </div>";
                        }
                        else
                        {
                            echo "<p class='content_text'>查無結果。</p>";
        
                        }
                    }
                    
                    // third query
                    $sql = "SELECT * FROM table1 WHERE year=?' AND name=?;";
                    
                    $stmt = mysqli_stmt_init($connect);     //creat a prepared statement
                    if(!mysqli_stmt_prepare($stmt, $sql))   //prepare the prepared statement
                    {
                        // statement failed
                        echo "<p class = 'content_text'>SQL statement failed.。</p>";
                    }
                    else
                    {
                        //bind parameters to the placeholder
                        mysqli_stmt_bind_param($stmt, $year, $name);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $resultcheck = mysqli_num_rows($result); 
                        if($resultcheck_bar>0)
                        {
                            echo '<div class="box">
                                <h2>Fielding Stats</h2>
                                <table>
                                    <tr>
                                        <td>Year</td>
                                        <td>Team</td>
                                        <td>Pos</td>
                                        <td>InnOuts</td>
                                        <td>PO</td>
                                        <td>A</td>
                                        <td>E</td>
                                        <td>DP</td>
                                        <td>PB</td>
                                    </tr>';
                            foreach($result as $row)
                            {//playerID,yearID,stint,teamID,lgID,POS,G,GS,InnOuts,PO,A,E,DP,PB,WP,SB,CS,ZR
                                echo "<tr>
                                    <td>".$row['yearID']."</td>
                                    <td>".$row['teamID']."</td>
                                    <td>".$row['POS']."</td>
                                    <td>".$row['InnOuts']."</td>
                                    <td>".$row['PO']."</td>
                                    <td>".$row['A']."</td>
                                    <td>".$row['E']."</td>
                                    <td>".$row['DP']."</td>
                                    <td>".$row['PB']."</td>
                                </tr>";
                            }
                            echo "</table>
                        </div>";
                        }
                        else
                        {
                            echo "<p class='content_text'>查無結果。</p>";
        
                        }
                    }
                    
                    // fourth query
                    $sql = "SELECT * FROM table1 WHERE year=?' AND name=?;";
                    
                    $stmt = mysqli_stmt_init($connect);     //creat a prepared statement
                    if(!mysqli_stmt_prepare($stmt, $sql))   //prepare the prepared statement
                    {
                        // statement failed
                        echo "<p class = 'content_text'>SQL statement failed.。</p>";
                    }
                    else
                    {
                        //bind parameters to the placeholder
                        mysqli_stmt_bind_param($stmt, $year, $name);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $resultcheck = mysqli_num_rows($result); 
                        if($resultcheck_bar>0)
                        {
                            echo '<div class="box">
                                <h2>Pitching Stats</h2>
                                <table>
                                    <tr>
                                        <td>Year</td>
                                        <td>Team</td>
                                        <td>W</td>
                                        <td>L</td>
                                        <td>G</td>
                                        <td>IPouts</td> 
                                        <td>GS</td>
                                        <td>GF</td>
                                        <td>ER</td>
                                        <td>SO</td>
                                        <td>WP</td>         
                                    </tr>';
                            foreach($result as $row)
                            {//playerID,yearID,stint,teamID,lgID,W,,G,GS,CG,SHO,SV,IPouts,H,ER,HR,BB,SO,BAOpp,ERA,IBB,WP,HBP,BK,BFP,GF,R,SH,SF,GIDP
                                echo "<tr>
                                    <td>".$row['yearID']."</td>
                                    <td>".$row['teamID']."</td>
                                    <td>".$row['W']."</td>
                                    <td>".$row['L']."</td>
                                    <td>".$row['G']."</td>
                                    <td>".$row['IPouts']."</td>
                                    <td>".$row['GS']."</td>
                                    <td>".$row['GF']."</td>
                                    <td>".$row['ER']."</td>
                                    <td>".$row['SO']."</td>
                                    <td>".$row['WP']."</td>
                                </tr>";
                            }
                            echo "</table>
                        </div>";
                        }
                        else
                        {
                            echo "<p class='content_text'>查無結果。</p>";
        
                        }
                    }
                    
                    // fifth query
                    $sql = "SELECT * FROM table1 WHERE year=?' AND name=?;";
                    
                    $stmt = mysqli_stmt_init($connect);     //creat a prepared statement
                    if(!mysqli_stmt_prepare($stmt, $sql))   //prepare the prepared statement
                    {
                        // statement failed
                        echo "<p class = 'content_text'>SQL statement failed.。</p>";
                    }
                    else
                    {
                        //bind parameters to the placeholder
                        mysqli_stmt_bind_param($stmt, $year, $name);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $resultcheck = mysqli_num_rows($result); 
                        if($resultcheck_bar>0)
                        {
                            echo '<div class="box">
                                <h2>Award</h2>
                                <table style="margin-bottom: 10px">
                                    <tr>
                                        <td>Award</td>
                                        <td>Year</td>
                                        <td>PointsWon</td>
                                        <td>PointsMax</td>
                                        <td>VotesFirst</td>
                                    </tr>';
                            foreach($result as $row)
                            {//awardID,yearID,lgID,playerID,pointsWon,pointsMax,votesFirst
                                echo "<tr>
                                    <td>".$row['awardID']."</td>
                                    <td>".$row['yearID']."</td>
                                    <td>".$row['pointsWon']."</td>
                                    <td>".$row['pointsMax']."</td>
                                    <td>".$row['votesFirst']."</td>
                                </tr>";
                            }
                            echo "</table>";
                        }
                        else
                        {
                            echo "<p class='content_text'>查無結果。</p>";
        
                        }
                    }
                }
            ?>
            <input type="submit" name="delete" value="Delete" />
            <!--刪掉這個資料-->
        </div>
        
    </body>
</html>