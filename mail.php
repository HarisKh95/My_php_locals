<?php
require 'vendor/autoload.php';
// $to       = 'hkhurshid95@gmail.com';
// $subject  = 'Testing sendmail.exe';
// $message  = 'Hi, you just received an email using sendmail!';
// $headers  = 'From: hkhurshid95@gmail.com' . "\r\n" .
//             'MIME-Version: 1.0' . "\r\n" .
//             'Content-type: text/html; charset=utf-8';
// var_dump(mail($to, $subject, $message, $headers));
// if(mail($to, $subject, $message, $headers))
//     echo "Email sent";
// else
//     echo "Email sending failed";


use \Mailjet\Resources;
$mj = new \Mailjet\Client('de3b38d401b829c2e7ce2f2087fcdd6f','851f311bce8cc3110d52464dd9885e55',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "rajpoothk81@gmail.com",
          'Name' => "Hammad"
        ],
        'To' => [
          [
            'Email' => "rajpoothk81@gmail.com",
            'Name' => "Hammad"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());

  //////
  ////
//   $body = [
//     'Messages' => [
//         [
//         'From' => [
//             'Email' => "hkhurshid95@gmail.com",
//             'Name' => "Haris"
//         ],
//         'To' => [
//             [
//             'Email' => "raajpoothk81@gmail.com",
//             'Name' => "Mashood"
//             ]
//         ],
//         'Subject' => "Greetings from Haris.",
//         'HTMLPart' => "<h3>Hello Hammad, This trial for mailjet!</h3><br />May the delivery force be with you!"
//         ]
//     ]
// ];
  
// $ch = curl_init();
  
// curl_setopt($ch, CURLOPT_URL, "https://api.mailjet.com/v3.1/send");
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
//     'Content-Type: application/json')
// );
// curl_setopt($ch, CURLOPT_USERPWD, "dfbdeda82e4b22fdd89633908aca5c64:118a2111be257757e2406bc21fa33238");
// $server_output = curl_exec($ch);
// curl_close ($ch);
  
// $response = json_decode($server_output);
// if ($response->Messages[0]->Status == 'success') {
//     echo "Email sent successfully.";
// }

////////////
////////////
?>