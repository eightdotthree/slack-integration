<?

require('slack.secrets.php');

$config['slack']['confirmslashcommandtoken'] = true;    // should the outgoing webhook be confirmed it's from an approved account?
$config['slack']['hook'] = $config['slack']['incomingwebhookurl'];

?>