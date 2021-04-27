<?php

    function baseUrl() {
        return url('/');
    }

    function getToken()
    {
        return csrf_token();
    }

    function validate() {
        if (session('username') == null) {
            return true;
        }
    }