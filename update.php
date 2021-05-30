
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
            
                
                $message = "error!"; // error message
                if( isset($_POST['update']) )
                {
                    $update_sql_MASTER = "UPDATE MASTER
                                            SET ( height = '$_POST[height]',
                                                  weight = '$_POST[weight]',
                                                  birthday = STR_TO_DATE('$_POST[birthday]','%Y-%m-%d'),
                                                  deathday = STR_TO_DATE('$_POST[deathday]','%Y-%m-%d'),
                                                  bats = '$_POST[bats]',
                                                  throws = '$_POST[throws]')
                                            where name = '$_POST[name]'";
                    /*
                    echo "<p>";
                    echo $update_sql_MASTER;
                    echo "</p>";
                    echo "<p>";
                    */
                    echo "<p>";
                    if (!mysqli_query($connect, $update_sql_MASTER))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record update into MASTER successfully";
                    }
                    echo "</p>";


                    $update_sql_Batting = " UPDATE Batting
                                            SET (playerID = '$_POST[name]',
                                                 yearID = '$_POST[B_Year]',
                                                 teamID = '$_POST[B_Team]',
                                                 G = '$_POST[B_G]',
                                                 AB = '$_POST[B_AB]',
                                                 H = '$_POST[B_H]',
                                                 2B = '$_POST[B_2B]',
                                                 3B = '$_POST[B_3B]',
                                                 HR = '$_POST[B_HR]',
                                                 RBI = '$_POST[B_RBI]',
                                                 R = '$_POST[B_R]',
                                                 SB = '$_POST[B_SB]',
                                                 SO = '$_POST[B_SO]',
                                                 BB = '$_POST[B_BB]')
                                            WHERE playerID = '$_POST[name]',";
                    /*
                    echo "<p>";
                    echo $update_sql_Batting;
                    echo "</p>";
                    */
                    echo "<p>";
                    if (!mysqli_query($connect, $update_sql_Batting))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record update into Batting successfully";
                    }
                    echo "</p>";

                    $update_sql_Fielding = "UPDATE Fielding
                                            SET (yearID = '$_POST[F_Year]',
                                                 teamID = '$_POST[F_Team]',
                                                 POS = '$_POST[F_POS]',
                                                 InnOuts = '$_POST[F_InnOuts]',
                                                 PO = '$_POST[F_PO]',
                                                 A = '$_POST[F_A]',
                                                 E = '$_POST[F_E]',
                                                 DP = '$_POST[F_DP]',
                                                 PB = '$_POST[F_PB]')
                                            WHERE playerID = '$_POST[name]'";
        


                    if (!mysqli_query($connect, $update_sql_Fielding))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record update into Fielding successfully";
                    }

                    $update_sql_Pitching = "UPDATE Pitching
                                            SET (yearID = '$_POST[P_Year]',
                                                 teamID = '$_POST[P_Team]',
                                                 W = '$_POST[P_W]',
                                                 L = '$_POST[P_L]',
                                                 G = '$_POST[P_G]',
                                                 IPouts = '$_POST[P_IPouts]',
                                                 GS = '$_POST[P_GS]',
                                                 GF = '$_POST[P_GF]',
                                                 ER = '$_POST[P_ER]',
                                                 SO = '$_POST[P_SO]',
                                                 WP = '$_POST[P_WP]')
                                            WHERE playerID = '$_POST[name]'";

                    /*
                    echo "<p>";
                    echo $update_sql_Pitching;
                    echo "</p>";
                    */
                    echo "<p>";
                    if (!mysqli_query($connect, $update_sql_Pitching))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record update into Fielding successfully";
                    }
                    echo "</p>";

                    $update_sql_AwardsSharePlayers = "UPDATE AwardsSharePlayers
                                                      SET (awardID = '$_POST[A_Award]',
                                                           yearID = '$_POST[A_Year]',
                                                           pointsWon = '$_POST[A_PointsWon]',
                                                           pointsMax = '$_POST[A_PointsMax]',
                                                           votesFirst = '$_POST[A_VotesFirst]')
                                                      WHERE playerID = '$_POST[A_name]'";
                    /*
                    echo "<p>";
                    echo $update_sql_AwardsSharePlayers;
                    echo "</p>";
                    */
                    echo "<p>";
                    if (!mysqli_query($connect, $update_sql_AwardsSharePlayers))
                    {
                        echo 'Error: ' . mysqli_error($connect);
                    }
                    else
                    {
                        echo "1 record update into AwardsSharePlayers successfully";
                    }
                    echo "</p>";
                    mysqli_close($connect);

                }
                
            ?>
        </div>
        
    </body>
</html>
