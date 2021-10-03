<?php


namespace A2Media\DiscordWebhook;


class WebhookMessage extends BaseMessage
{
    /**
     * @var string
     */
    protected $content = 'WebhookMessage content';
    /**
     * @var string
     */
    protected $username = 'MyUsername';
    /**
     * @var string
     */
    protected $avatar_url;
    /**
     * @var bool
     */
    protected $tts = false;
    /**
     * @var string
     */
    protected $file;
    /**
     * @var WebhookEmbed[]
     */
    protected $embeds = array();

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return WebhookMessage
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return WebhookMessage
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->avatar_url;
    }

    /**
     * @param string $avatar_url
     * @return WebhookMessage
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->avatar_url = $avatar_url;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTts()
    {
        return $this->tts;
    }

    /**
     * @param bool $tts
     * @return WebhookMessage
     */
    public function setTts($tts)
    {
        $this->tts = $tts;
        return $this;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return WebhookMessage
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return WebhookEmbed[]
     */
    public function getEmbeds()
    {
        return $this->embeds;
    }

    /**
     * @param WebhookEmbed[] $embeds
     * @return WebhookMessage
     */
    public function setEmbeds($embeds)
    {
        $this->embeds = $embeds;
        return $this;
    }

    /**
     * @param WebhookEmbed $embed
     * @return WebhookMessage
     */
    public function addEmbed($embed)
    {
        $this->embeds [] = $embed;
        return $this;
    }
}
