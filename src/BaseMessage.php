<?php


namespace A2Media\DiscordWebhook;


class BaseMessage implements \JsonSerializable
{
    /**
     * Model constructor.
     *
     * @param array $properties
     */
    public function __construct($properties = array())
    {
        foreach ($properties as $property => $default) {
            $setter = 'set' . ucfirst($property);
            $set = preg_replace_callback('/_(?<char>[a-z])/m', function ($matches) {
                return ucfirst($matches['char']);
            }, $setter);
            if (method_exists(get_called_class(), $setter)) {
                try {
                    $this->$setter($default);
                } catch (\Exception $exception) {
                    error_log(__CLASS__ . ":{$exception->getMessage()} at {$exception->getFile()} on line {$exception->getLine()}");
                }
            } elseif (method_exists(get_called_class(), $set)) {
                try {
                    $this->$set($default);
                } catch (\Exception $exception) {
                    error_log(__CLASS__ . ":{$exception->getMessage()} at {$exception->getFile()} on line {$exception->getLine()}");
                }
            }
        }
    }

    public function jsonSerialize()
    {
        return call_user_func('get_object_vars', $this);
    }
}
