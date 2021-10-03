<?php


namespace A2Media\DiscordWebhook;


class WebhookField extends BaseMessage
{
    /**
     * @var string
     */
    protected $name = 'WebhookField name';
    /**
     * @var string
     */
    protected $value = 'WebhookField value';
    /**
     * @var bool
     */
    protected $inline = true;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return WebhookField
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return WebhookField
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInline()
    {
        return $this->inline;
    }

    /**
     * @param bool $inline
     * @return WebhookField
     */
    public function setInline($inline)
    {
        $this->inline = $inline;
        return $this;
    }
}
