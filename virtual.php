<html>
    <head>
    <title>art ronin </title>
    </head>
<body>
    <script>
        
        // const name = "Thapakorn"
        // console.log(name)
        // [1, 5, 3, 2, 12, 4, 9, 0] ->   5 time
        // [12, 0] -> Only Beep not repeat
        // const text = "1, 5, 3, 2, 12, 4, 9, 0"
        const text = "1, 5, 3, 2, 12, 4, 9, 0"
        // const text = "12, 0"
        // 1  - pushes 16-bit number on stack.
        var gblBuffer = [];
        var gblQueue = [];
        var lenghtOfBuffer = 0;
        // const myBtn = document.getElementById('mybtn');
        var words = text.split(', ');
        
        for(var i=0;i<words.length;i++){
            var tempToInt = parseInt(words[i], 10);
            gblQueue.push(tempToInt);
            // gblQueue.push(words[i]);
        }
        console.log(gblQueue);
        // lenghtOfBuffer = gblQueue.length;
        // for(var i=0;i<lenghtOfBuffer;i++){
        //     gblQueue.shift();
        //     console.log("gblBuffer : ",gblQueue);
        // }
        
        var loop = gblQueue.shift();
        var imm;
        var localBuffer = [];
        var cmdOpcode;
        // Stack
        // do{
        //     if (queueFisrt == 1){ //
        //         var begin;
        //         var immBuffer =[];
        //         if(loop == -1){
        //             imm = gblQueue.shift();
        //         }
        //         var tempQueue = gblQueue.shift();
        //         if (tempQueue == 3){ //  start of list
        //             // console.log("artttttttttttttt gblQueue ",gblQueue);
        //             loop = gblQueue.shift();
        //             while(loop != 4){
        //                 // console.log("loop  : ",loop);
        //                 localBuffer.push(loop);
        //                 loop = gblQueue.shift();
        //             }
        //         }else {
        //             loop = gblQueue.shift();
        //         }
        //         console.log("artttttttttttttt gblQueue ",gblQueue);
        //         loop = gblQueue.shift();
        //         console.log("artttttttttttttt gblQueue ",gblQueue);
        //         cmdProcess(loop);
        //     }
        //     console.log("gblQueue  : ",gblQueue);
        //     loop = gblQueue.shift();
        //     console.log("loop  : ",loop);
        // }while(loop != 0);
        // Stack
        for(var i=0;i<gblQueue.length;i++){
            if (loop == 1){
                imm = gblQueue.shift();
                var cmdOpcode = gblQueue.shift();
                if (cmdOpcode == 3){ //  start of list
                    loop = gblQueue.shift();
                    while(loop != 4){
                        localBuffer.push(loop);
                        loop = gblQueue.shift();
                    }
                    cmdOpcode = gblQueue.shift();
                }
                cmdProcess(cmdOpcode);
            }else {
                cmdProcess(loop);
            }
            if(loop == 0){
                break;
            }
        }
        console.log("end of loo[] ");
        function cmdProcess(cmdOpcode){
            switch (cmdOpcode) {
                case 12:
                    var cmdstr = chooseCmd(cmdOpcode);
                    cmdBeep(cmdstr);
                    break;
                case 16:
                    cmdWait(imm);
                    break;
                case 9:
                    Repeat(localBuffer,imm);
                    break;
                default:
                    console.log("none jahh ");
                    break;
            }
        }
        function Repeat(Queue,Imm){
            var opcode;
            var sendText;
            var typeImm = Queue.shift();
            if(typeImm == 2){
                opcode = Queue.pop();
                sendText = chooseCmd(opcode);
            }
            for(var i=0;i<Imm;i++){
                console.log(sendText);
                // send to MQTT at here
            }
        }
        function cmdWait(Imm){
            console.log("cmd wait :",Imm," sec");
        }
        function cmdBeep(str){
            console.log(str);
        }
        function chooseCmd(opcode){
            var str="";
            switch(opcode){
                case 12:
                    str = "beep";
                    break;
                case 0:
                    str = "Looking";
                    break;
                default:
                    str = "none";
            }
            return str;
        }
        
        // var count = 0;
        // if (words[count++] == "1"){
        //     console.log("word[",count,"] : ",words);
        //     var localBuffer =[];
        //     var begin;
        //     var immBuffer = parseInt(words[count++], 10);
        //     console.log("immBuffer : ",immBuffer);
        //     console.log("word[",count,"] : ",words);
        //     if (parseInt(words[count++], 10) == 3){ //  start of list
        //         var temp1 = parseInt(words[count++], 10);
        //         while(temp1 != 4){
        //             // var tempp = parseInt(words[count], 10);
        //             localBuffer.push(tempp);
        //             temp1 = parseInt(words[count++], 10);
        //             console.log("temp[",count,"] : ",temp1);    
        //         }
        //         console.log("word[",count,"] : ",words);
        //         console.log("localBuffer[",localBuffer);
        //     }
        //     if (parseInt(words[5], 10) == 9){ // start to repeat
        //         for(var i=0;i<tempLengh;i++){
        //             var temp = parseInt(words[4], 10);
        //             gblBuffer.push(temp);
        //         }
        //         console.log("gblBuffer : ",gblBuffer);
        //     }
        // }
        
       
        // const myFunction =(name)=> "huuttt "+name;
        // console.log(myFunction('gggg2'));
        // const myArray = ['thapakorn','peryporn','art',613];
        // let Arr1 = myArray.map(item => item);
        // console.log(Arr1);
    </script>

</body>

</html>