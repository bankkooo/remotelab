logoCloud () {
      $.getScript('./mqttws31.js', function()
      {
        client = new Paho.MQTT.Client("soldier.cloudmqtt.com", 30420,"bank99");

        client.onConnectionLost = onConnectionLost;
        client.onMessageArrived = onMessageArrived;
        var options = {
          useSSL: true,
          userName: "vpfewsse",
          password: "gNAs763mxcGN",
          onSuccess:onConnect,
          onFailure:doFail
        }

        paho.client.connect(options);

        function onConnect() {
          console.log("onConnect");
          client.subscribe("/gogomqtt");
          message = new Paho.MQTT.Message("Send form gogocode");
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
      });
    },

    