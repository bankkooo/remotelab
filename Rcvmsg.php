<html>  
<head></head>  
<title>Receive command from mqtt</title>  
<body bgcolor="#98FF98">  
    <form name="frmMain" method="post" action="mqtt_test.php" target="iframe_target">
        <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <!--First Name : <input type="text" name="txtFirstName"><br>-->
        <!--Last Name : <input type="text" name="txtLastName"><br>-->
        
        <h3>         Channel :</h3>
        <!--<select name="cmd" id="cmd">  
        <option value="ledOn">Turn on LED</option>}  
        <option value="ledOff">Turn off LED</option>  
        <option value="beep">Beep!!!</option>  
        <option value="motorOn">Turn on motor</option>  
        <option value="motorOff">Turn off motor</option>  
        <option value="motorRD">motorRD</option>  
        <option value="motorCW">motorCW</option>  
        <option value="motorCCW">motorCCW</option>  
        <option value="talkToMotor">talkToMotor</option> 
        <input name="btnSubmit" type="submit" value="Submit">-->

        <label for="lname">Channel:</label>
        <input type="text" id="chl" name="chl"><br><br>
        <input type="submit" value="Submit">

    </form> 
    <!--<form action="Websocketsmqtt.php" method="post">
        <input type="button" name="submit" value="Submit">
    </form>-->
</select>   
</body>  
<html> 