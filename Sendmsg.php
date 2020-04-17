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
        <input type="submit" value="ledOff" name="btncmd"/><br><br>


        <!--<label for="lname">Message:</label>
        <input type="text" id="msg" name="msg"><br><br>
        <label for="lname">Channel:</label>
        <input type="text" id="chl" name="chl"><br><br>-->
        <input type="checkbox" id="lab1" name="lab1" value="lab-1-active">
        <label for="vehicle1">Lab 1</label>
        <input type="checkbox" id="lab2" name="lab2" value="lab-2-active">
        <label for="vehicle1">Lab 2</label>
        <input type="checkbox" id="lab3" name="lab3" value="lab-3-active">
        <label for="vehicle1">Lab 3</label><br>
        <label for="lname">YOUTUBE 1:</label>
        <input type="text" id="yt1" name="yt1"><br><br>
        <label for="lname">YOUTUBE 2:</label>
        <input type="text" id="yt2" name="yt2"><br><br>
        <label for="lname">YOUTUBE 3:</label>
        <input type="text" id="yt3" name="yt3"><br><br>
        <input type="submit" value="Submit"><br><br>

    </form> 
    <!--<form action="Websocketsmqtt.php" method="post">
        <input type="button" name="submit" value="Submit">
    </form>-->
</select>   
</body>  
<html> 