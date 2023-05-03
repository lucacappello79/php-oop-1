<?php


class Genre {
    public $subGenre1;
    public $subGenre2;
    public $subGenre3;

    function __construct(string $subGenre1, string $subGenre2, string $subGenre3) {

        $this->subGenre1 = $subGenre1;
        $this->subGenre2 = $subGenre2;
        $this->subGenre3 = $subGenre3;
    }
}

?>