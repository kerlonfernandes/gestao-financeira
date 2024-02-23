<?php

class Language {
    function loadLanguage($langCode = 'en') {
        $langFile = "./Language/{$langCode}.php";
    
        if (file_exists($langFile)) {
            return include($langFile);
        }
    
        return [];
    }

}