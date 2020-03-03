<?php

Class Mcontroller {

    public function __construct() {
    }

    public function index() {

        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

        switch ($page) {
            case ($page === "show"):
                    require "views/index.php";
                    break;

            default:
                require "views/index.php";
                break;
        }
    }

}
