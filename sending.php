<script src="paho.javascript-1.0.3/paho-mqtt.js"></script>
<script>
client = new Paho.MQTT.Client("broker.mqttdashboard.com", Number(8000), "clientId99");
//client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;

client.connect({onSuccess:onConnect});

function onConnect() {
  console.log("onConnect");
  //client.subscribe("testGogo/MQTT");
  message = new Paho.MQTT.Message("89898");
  message.destinationName = "testGogo/MQTT";
  client.send(message);

}

function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("onConnectionLost:"+responseObject.errorMessage);
  }
}

function onMessageArrived(message) {
  console.log("onMessageArrived:"+message.payloadString);
  //document.getElementById("demo").innerHTML = message.payloadString;
}
</script>