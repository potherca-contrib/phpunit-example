<?php
/**
 * Represents a User.
 * 
 * Can be given a name, for easier identification.
 * When asked to talk, will only address the entire world.
 */
class User {
    /** @var string */
    protected $name;

    /**
     * return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * return string
     */
    public function talk() {
        return "Hello world!";
    }
}
