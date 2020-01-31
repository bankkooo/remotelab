<!--<script src="mqttws31.js" type="text/javascript"></script>-->
<script src="./mqttws31.js" type="text/javascript"></script>
<?php
    $cmdselected1 = $_POST["btncmd"];
    //$cmdselected2 = $_POST["btncm"];
    //$cmdselected = "test99";
    echo "<script language=\"JavaScript\">";
    //echo "alert('Confirm to send : $cmdselected');";
    echo "</script>";
    
?>

<script type="text/javascript">
    //var cmd = "<?php //echo $_POST["btncmd"]; ?>";
    var cmd = "<?php echo $cmdselected1 ?>";
    var message;
  // Create a client instance
  client = new Paho.MQTT.Client("35.198.231.150", 9001,"RUNBKK");
  //client = new Paho.MQTT.Client("soldier.cloudmqtt.com", 30420,"bank99");
  //Example client = new Paho.MQTT.Client("m11.cloudmqtt.com", 32903, "web_" + parseInt(Math.random() * 100, 10));

  // set callback handlers
  client.onConnectionLost = onConnectionLost;
  client.onMessageArrived = onMessageArrived;
  var options = {
    useSSL: true,
    userName: "vpfewsse",
    password: "gNAs763mxcGN",
    onSuccess:onConnect,
    onFailure:doFail
  }

  // connect the client
  client.connect(options);
      //}

  // called when the client connects
  function onConnect() {
    // Once a connection has been made, make a subscription and send a message.
    console.log("onConnect");
    client.subscribe("/gogomqtt");
    message = new Paho.MQTT.Message(cmd);
    message.destinationName = "/gogomqtt";
    client.send(message);
    //doSend();
    //console.log("adasd");
  }

  function doSend(){
    //console.log("e");
    message = new Paho.MQTT.Message("cmd");
    message.destinationName = "/gogomqtt";
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