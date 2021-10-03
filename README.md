# DiscordWebhook


## Usage

```php
use A2Media\DiscordWebhook\Webhook;
use A2Media\DiscordWebhook\WebhookEmbed;
use A2Media\DiscordWebhook\WebhookField;
use A2Media\DiscordWebhook\WebhookMessage;

try {
    $webhook = new Webhook('https://discord.com/api/webhooks/yourchanelid/longtoken');
    $args = array('A' => 'Value A','B' => 'Value B',);
    $message = new WebhookMessage(array('content' => '', 'username' => 'Sender','url' => ''));
    $emded = new WebhookEmbed(array('title' => 'Embed', 'description' => '', 'author' => array('name' => 'Author', 'url' => '')));
    foreach ($args as $key => $value) {
        switch ($key) {
            case 'A':
                $emded->addField(new WebhookField(array('name' => 'Field A', 'value' => $value)));
                break;
            case 'B':
                $emded->addField(new WebhookField(array('name' => 'Field B', 'value' => $value)));
                break;
        }
    }
    if (count($emded->getFields()) > 0 && $message->addEmbed($emded))
        $send = $webhook->sendMessage($message);

} catch (\Exception $exception) {
    error_log("{$exception->getTraceAsString()} at {$exception->getFile()} on line {$exception->getLine()}");
}
```
