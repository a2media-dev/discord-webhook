<?php


namespace A2Media\DiscordWebhook;


class WebhookEmbed extends BaseMessage
{
    /**
     * @var string
     */
    protected $title = '';
    /**
     * @var string
     */
    protected $type = 'rich';
    /**
     * @var string
     */
    protected $description = '';
    /**
     * @var string
     */
    protected $url = '';
    /**
     * @var string
     */
    protected $timestamp = '';
    /**
     * @var string
     */
    protected $color = '3368703';
    /**
     * @var array
     */
    protected $footer;
    /**
     * @var array
     */
    protected $image = array('url' => '');
    /**
     * @var array
     */
    protected $thumbnail = array('url' => '');
    /**
     * @var array
     */
    protected $author = array('name' => '', 'url' => '',);
    /**
     * @var WebhookField[]
     */
    protected $fields = array();

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return WebhookEmbed
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return WebhookEmbed
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return WebhookEmbed
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return WebhookEmbed
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return WebhookEmbed
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return WebhookEmbed
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return array
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param array $footer
     * @return WebhookEmbed
     */
    public function setFooter($footer = array('text' => null, 'icon_url' => null))
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * @return array
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param array $image
     * @return WebhookEmbed
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return array
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param array $thumbnail
     * @return WebhookEmbed
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return array
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param array $author
     * @return WebhookEmbed
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return WebhookField[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param WebhookField[] $fields
     * @return WebhookEmbed
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @param WebhookField $field
     * @return WebhookEmbed
     */
    public function addField($field)
    {
        $this->fields [] = $field;
        return $this;
    }
}
