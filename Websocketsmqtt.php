<!--<script src="mqttws31.js" type="text/javascript"></script>-->
<script src="./mqttws31.js" type="text/javascript"></script>
<?php
    //$cmdselected1 = $_POST["btncmd"];
    $cmdselected1 = $_POST["msg"];
    $cmdselected2 = $_POST["chl"];
    $cmdlab1 = $_POST["lab1"];
    $cmdlab2 = $_POST["lab2"];
    $cmdlab3 = $_POST["lab3"];
    //$cmdselected = "test99";
    echo "<script language=\"JavaScript\">";
    //echo "alert('Confirm to send : $cmdselected');";
    echo "</script>";
    
?>

<script type="text/javascript">
    //var cmd = "<?php //echo $_POST["btncmd"]; ?>";
  var cmd = "<?php echo $cmdselected1 ?>";
  var cmd2 = "<?php echo $cmdselected2 ?>";
  cmd2 = 'labstatus'
  var lab1 = "<?php echo $cmdlab1 ?>";
  var lab2 = "<?php echo $cmdlab2 ?>";
  var lab3 = "<?php echo $cmdlab3 ?>";
  var labs = [lab1,lab2,lab3]
  var message;
  var myVar;
  // Create a client instance
  client = new Paho.MQTT.Client("35.198.231.150", 9001,"RUNBKK");
  //client = new Paho.MQTT.Client("soldier.cloudmqtt.com", 30420,"bank99");
  //Example client = new Paho.MQTT.Client("m11.cloudmqtt.com", 32903, "web_" + parseInt(Math.random() * 100, 10));

  // set callback handlers
  client.onConnectionLost = onConnectionLost;
  client.onMessageArrived = onMessageArrived;
  var options = {
    useSSL: true,
    //userName: "vpfewsse",
    //password: "gNAs763mxcGN",
    onSuccess:onConnect,
    onFailure:doFail
  }

  // connect the client
  client.connect(options);
      //}

  // called when the client connects
  function onConnect() {
    // Once a connection has been made, make a subscription and send a message.
    console.log("onConnect"+lab1);
    client.subscribe("remotelab/"+cmd2);
    message = new Paho.MQTT.Message(cmd);
    message.destinationName = "remotelab/"+cmd2;
    //client.send(message);
    for(var i=0;i<3;i++){
      console.log(labs[i])
      if (labs[i]=='lab-'+(i+1)+'-active'){
        message = new Paho.MQTT.Message('lab-'+(i+1)+'-active');
        message.destinationName = "remotelab/"+cmd2;
        myVar = setInterval(
              doSend
              , 3000+(i*100), message);
      }else{
        message = new Paho.MQTT.Message('lab-'+(i+1)+'-inactive');
        message.destinationName = "remotelab/"+cmd2;
        myVar = setInterval(
              doSend
              , 3000+(i*110), message);
      }
    }
    
    //console.log("adasd");
  }

  function doSend(message){
    //console.log("e");
    client.send(message);

  }


  function doFail(e){
    console.log(e);
  }

  // called when the client loses its connection
  function onConnectionLost(responseObject) {
    if (responseObject.errorCode !== 0) {
      console.log("onConnectionLost:"+responseObject.errorMessage);
    }
  }

  // called when a message arrives
  function onMessageArrived(message) {
    console.log("onMessageArrived:"+message.payloadString);
    //document.getElementById("demo").innerHTML = message.payloadString;
  }
</script>