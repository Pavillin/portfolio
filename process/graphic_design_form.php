<!DOCTYPE html>
<html>
<head>
	<title>Processing Form</title>
</head>
<body>
	<?php
		//variables from form
    $name = $_POST['name'];
    $discord = $_POST['discord'];
    $paymentType = $_POST['paymentType'];
    $email = $_POST['gEmail'];
    $designType = $_POST['designType'];
    $details = $_POST['details'];
    $extra = $_POST['extra'];
    
    //give default value if optional options are not filled
    if($email == NULL){
        $email = "No email provided.";
    }
    if($extra == NULL){
      $extra = "No extra requirements noted.";
    }

    //create function to send message to discord
		function discordmsg($msg, $webhook) {
      if($webhook != "") {
        $ch = curl_init($webhook);
        $msg = "payload_json=" . urlencode(json_encode($msg))."";
        
        if(isset($ch)) {
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
          curl_setopt($ch, CURLOPT_POSTFIELDS, $msg);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $result = curl_exec($ch);
          curl_close($ch);
          return $result;
        }
      }
    }

    //discord webhook link and displayed message
    $msg = json_decode('
    {

      "embeds": [{
        "color": 194047,
          "fields": [
              {
                "name": "Name",
                "value": '.json_encode($name).'
              },
              {
                "name": "Discord",
                "value": '.json_encode($discord).'
              },
              {
                "name": "Payment Type",
                "value": '.json_encode($paymentType).'
              },
              {
                "name": "Email",
                "value": '.json_encode($email).'
              },
              {
                "name": "Design Type",
                "value": '.json_encode($designType).'
              },
              {
                "name": "Design Details",
                "value": '.json_encode($details).'
              },
              {
                "name": "Extra Requirements",
                "value": '.json_encode($extra).'
              }
            ]
        }]
    }
    ', true);

    //call function to send message to discord
    require_once ('config.php');
    discordmsg($msg, webhookID);
    header("Location: ../graphic_design.php");
    die();
	?>
</body>
</html>