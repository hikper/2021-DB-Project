
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
            <div class="box">
            <?php
            
                
                $message = ""; // error message
                if( isset($_POST['insert']) )
                {
                    $insert_sql_MASTER = "INSERT INTO MASTER (playerID, height, weight, birthDay, deathDay, bats, throws)
                    VALUES ('$_POST[name]',
                            '$_POST[height]',
                            '$_POST[weight]',
                            STR_TO_DATE('$_POST[birthday]','%Y-%m-%d'),
                            STR_TO_DATE('$_POST[deathday]','%Y-%m-%d'),
                            '$_POST[bats]',
                            '$_POST[throws]')";
                    /*
                    echo "<p>";
                    echo $insert_sql_MASTER;
                    echo "</p>";
                    echo "<p>";
                    */
                    echo "<p>";
                    if (!mysqli_query($connect, $insert_sql_MASTER))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record inserted into MASTER successfully";
                    }
                    echo "</p>";


                    $insert_sql_Batting = "INSERT INTO Batting (playerID, yearID, teamID, G, AB, H, 2B, 3B, HR, RBI, R, SB, SO, BB)
                                VALUES ('$_POST[name]','$_POST[B_Year]','$_POST[B_Team]','$_POST[B_G]',
                                        '$_POST[B_AB]','$_POST[B_H]','$_POST[B_2B]','$_POST[B_3B]','$_POST[B_HR]','$_POST[B_RBI]','$_POST[B_R]',
                                        '$_POST[B_SB]','$_POST[B_SO]','$_POST[B_BB]')";
                    /*
                    echo "<p>";
                    echo $insert_sql_Batting;
                    echo "</p>";
                    */
                    echo "<p>";
                    if (!mysqli_query($connect, $insert_sql_Batting))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record inserted into Batting successfully";
                    }
                    echo "</p>";

                    $insert_sql_Fielding = "INSERT INTO Fielding (playerID,yearID,teamID,POS,InnOuts,PO,A,E,DP,PB)
                                            VALUES('$_POST[name]',
                                            '$_POST[F_Year]',
                                            '$_POST[F_Team]',
                                            '$_POST[F_POS]',
                                            '$_POST[F_InnOuts]',
                                            '$_POST[F_PO]',
                                            '$_POST[F_A]',
                                            '$_POST[F_E]',
                                            '$_POST[F_DP]',
                                            '$_POST[F_PB]')";
        


                    if (!mysqli_query($connect, $insert_sql_Fielding))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record inserted into Fielding successfully";
                    }

                    $insert_sql_Pitching = "INSERT INTO Pitching (playerID, yearID, teamID, W, L, G, IPouts, GS, GF, ER, SO, WP)
                                                VALUES('$_POST[name]',
                                                '$_POST[P_Year]',
                                                '$_POST[P_Team]',
                                                '$_POST[P_W]',
                                                '$_POST[P_L]',
                                                '$_POST[P_G]',
                                                '$_POST[P_IPouts]',
                                                '$_POST[P_GS]',
                                                '$_POST[P_GF]',
                                                '$_POST[P_ER]',
                                                '$_POST[P_SO]',
                                                '$_POST[P_WP]')";

                    /*
                    echo "<p>";
                    echo $insert_sql_Pitching;
                    echo "</p>";
                    */
                    echo "<p>";
                    if (!mysqli_query($connect, $insert_sql_Pitching))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record inserted into Fielding successfully";
                    }
                    echo "</p>";

                    $insert_sql_AwardsSharePlayers = "INSERT INTO AwardsSharePlayers (awardID, yearID, playerID, pointsWon, pointsMax, votesFirst)
                                                        VALUES('$_POST[A_Award]',
                                                        '$_POST[A_Year]',
                                                        '$_POST[A_name]',
                                                        '$_POST[A_PointsWon]',
                                                        '$_POST[A_PointsMax]',
                                                        '$_POST[A_VotesFirst]')";
                    /*
                    echo "<p>";
                    echo $insert_sql_AwardsSharePlayers;
                    echo "</p>";
                    */
                    echo "<p>";
                    if (!mysqli_query($connect, $insert_sql_AwardsSharePlayers))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record inserted into AwardsSharePlayers successfully";
                    }
                    echo "</p>";
                    mysqli_close($connect);

                }
                
            ?>
        
			<input type="button" name="Submit" value="Main Page" onclick="location.href='index.html'"/> <!--go to insert_page-->
		</div>
        </div>
        
    </body>
</html>