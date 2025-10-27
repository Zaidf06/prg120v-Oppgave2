<?php /*registrer-klasse*/
/*  Programmet lager et html-skjema for å registrere klasse
/*  Programmet registrerer data (klasse) i databasen
*/
?>

<h3> registrer klasse </h3>

<form method="klasse" action="" id="registrerKlasseSkjema" name="registrerKlasseSkjema">
    klasse <input type="text" id="klasse" name="klasse" required /> <br/>
    <input type="submit" value="registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp" />
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php
if (isset($_POST ["registrerKlasseKnapp"]))
    {
        $klasse=$_POST[klasse];
    {
        print("B&aring;de klasse m&aring; fylles ut");
    }
    else
    {
        include("db.php"); 
        
        $sqlSetning="SELECT * FROM poststed WHERE klasse='klasse';";
        $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
        $antallRader=mysqli_num_rows($sqlResultat);

        if(antallRader!=0)
        {
            print("Poststedet er registrert fra f&oslashr");
        }
        else
        {
            $sqlSetning="INSERT INTO klasse VALUES('klasse');";
            mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");

            print ("F&oslash;lgende klasse er n&aring; registrert: $klasse");
        }
    }
    }
    ?>
    


