<html>  
<head></head>  
<title>Send command to mqtt</title>  
<body bgcolor="#6699ff">  
    <form name="frmMain" method="post" action="websocketsmqtt.php" target="iframe_target">
        <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <!--First Name : <input type="text" name="txtFirstName"><br>-->
        <!--Last Name : <input type="text" name="txtLastName"><br>-->
        
        <h3>         Command List :</h3>
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
        <p><input type="submit" value="beep" name="btncmd"/></p>

        <input type="submit" value="ledOn" name="btncmd"/>
        <input type="submit" value="ledOff" name="btncmd"/>
    </form> 
    <form action="Websocketsmqtt.php" method="post">
        <input type="button" name="submit" value="Submit">
    </form>
</select>   
</body>  
<html> 