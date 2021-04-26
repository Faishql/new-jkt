<?php

    function baseUrl() {
        return url('/');
    }

    function getToken()
    {
        return csrf_token();
    }