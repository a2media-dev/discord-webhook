<?php


namespace A2Media\DiscordWebhook;


class Webhook
{
    /**
     * @var string
     */
    protected $_webhook;
    /**
     * @var integer
     */
    protected $_timeout = 10;
    /**
     * @var string
     */
    protected $_user_agent = 'Discord Webhook Client/1.0 (PHP)';

    /**
     * Webhook constructor.
     * @param $webhook string
     */
    public function __construct($webhook)
    {
        $this->_webhook = $webhook;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->_timeout;
    }

    /**
     * @param int $timeout
     * @return Webhook
     */
    public function setTimeout($timeout)
    {
        $this->_timeout = $timeout;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->_user_agent;
    }

    /**
     * @param string $user_agent
     * @return Webhook
     */
    public function setUserAgent($user_agent)
    {
        $this->_user_agent = $user_agent;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebhook()
    {
        return $this->_webhook;
    }

    /**
     * @param string $webhook
     * @return Webhook
     */
    public function setWebhook($webhook)
    {
        $this->_webhook = $webhook;
        return $this;
    }

    /**
     * @param $message WebhookMessage
     * @return array
     */
    public function sendMessage($message)
    {
        return $this->send(json_decode(json_encode($message, JSON_PRETTY_PRINT), true));
    }

    /**
     * @param $data array
     */
    private function send($data)
    {
        return $this->request($this->getWebhook(), 'POST', json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), array('Content-type: application/json'));
    }

    /**
     * @param string $url
     * @param string $method
     * @param array|string $params
     * @param array $headers
     * @return array
     */
    private function request($url, $method = 'GET', $params = array(), $headers = array())
    {
        $response_code = 0;
        $response_body = null;
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, (array)$headers);
            switch (strtoupper($method)) {
                case 'POST':
                    curl_setopt_array($ch, [
                        CURLOPT_POST => true,
                        CURLOPT_POSTFIELDS => $params,
                    ]);
                    break;
                default:
                    $param = http_build_query((array)$params);
                    $url = "{$url}?{$param}";
                    break;
            }
            curl_setopt_array($ch, [
                CURLOPT_USERAGENT => $this->getUserAgent(),
                CURLOPT_TIMEOUT => $this->getTimeout(),
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false, //false to turn off header output
            ]);
            $response_body = curl_exec($ch);
            $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
        } catch (\Exception $exception) {
            error_log("{$exception->getTraceAsString()} at {$exception->getFile()} on line {$exception->getLine()}");
        } finally {
            return array('response_code' => $response_code, 'response_body' => $response_body);
        }
    }
}
