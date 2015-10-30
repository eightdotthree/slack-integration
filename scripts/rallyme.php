<?

require('include/slack.config.php');
require('include/slack.php');
require('include/curl.php');
require('include/rally.php');
require('include/rallyme.config.php');

$slackCommand = BuildSlashCommand($_REQUEST);
$rallyFormattedId = strtoupper($slackCommand->Text);

if ( $config['slack']['confirmslashcommandtoken'] && $config['slack']['slashcommandtoken'] !== $slackCommand->Token) {
    echo ('Sorry, the token sent and the one expected do not match.');
    die;
}

$result = HandleItem($slackCommand, $rallyFormattedId);

?>