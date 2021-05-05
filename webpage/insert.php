<?php 
    include 'db_connect.php';
?>

<?php
    $message = ""; // error message
    if( isset($_POST) )
    {
        $insert_sql_MASTER = "INSERT INTO MASTER (playerID, height, weight, birthDay, deathDay, bats, throws)
                              VALUES ('$_POST[name]','$_POST[height]','$_POST[weight]','$_POST[birthday]',
                                      '$_POST[deathday]','$_POST[bats]','$_POST[throws]')";
        

        if (!mysqli_query($connect, $insert_sql_MASTER))
        {
            echo 'Error: ' . mysqli_error($connect);
        }
        else
        {
            echo "1 record inserted into MASTER successfully";
        }

        $insert_sql_Batting = "INSERT INTO Batting (playerID, yearID, teamID, G, AB, H, 2B, 3B, HR, RBI, R, SB, SO, BB)
                                VALUES ('$_POST[name]','$_POST[Year]','$_POST[Team]','$_POST[G]',
                                        '$_POST[AB]','$_POST[H]','$_POST[2B]','$_POST[3B]','$_POST[HR]','$_POST[RBI]','$_POST[R]'),
                                        '$_POST[SB]','$_POST[SO]','$_POST[BB]')";

        if (!mysqli_query($connect, $insert_sql_Batting))
        {
            echo 'Error: ' . mysqli_error($connect);
        }
        else
        {
            echo "1 record inserted into Batting successfully";
        }
        
        $insert_sql_Fielding = "INSERT INTO Fielding (playerID,yearID,teamID,POS,InnOuts,PO,A,E,DP,PB)
                                    VALUES('$_POST[name]','$_POST[YEAR]','$_POST[Team]','$_POST[POS]','$_POST[InnOuts]','$_POST[PO]','$_POST[A]',
                            '$_POST[E]','$_POST[DP]','$_POST[PB]')";
        
        if (!mysqli_query($connect, $insert_sql_Fielding))
        {
            echo 'Error: ' . mysqli_error($connect);
        }
        else
        {
            echo "1 record inserted into Fielding successfully";
        }

        $insert_sql_Pitching = "INSERT INTO Pitching (playerID, yearID, teamID, W, L, G, IPouts, GS, GF, ER, SO, WP)
                                    VALUES('$_POST[name]','$_POST[Year]','$_POST[Team]','$_POST[W]','$_POST[L]','$_POST[G]','$_POST[IPouts]',
                                    '$_POST[GS]','$_POST[GF]','$_POST[ER]','$_POST[SO]','$_POST[WP]')";

        if (!mysqli_query($connect, $insert_sql_Pitching))
        {
            echo 'Error: ' . mysqli_error($connect);
        }
        else
        {
            echo "1 record inserted into Fielding successfully";
        }

        $insert_sql_AwardsSharePlayers = "INSERT INTO AwardsSharePlayers (awardID, yearID, playerID, pointsWon, pointsMax, votesFirst)
                                            VALUES('$_POST[Award]','$_POST[Year]','$_POST[name]','$_POST[pointWon]','$_POST[pointMax]','$_POST[VotesFirst]')";

        if (!mysqli_query($connect, $insert_sql_AwardSharePlayers))
        {
            echo 'Error: ' . mysqli_error($connect);
        }
        else
        {
            echo "1 record inserted into AwardsSharePlayers successfully";
        }

        mysqli_close($connect);
    }

?>