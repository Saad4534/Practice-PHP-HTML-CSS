// Functions.php

<?php
    function checkForClickBait(){
        // grab value from textarea in $_POST Collection
        // make all letters lowercase using strtolower() function
        // store in a variable
        
        $clickBait = strtolower($_POST["clickbait_headline"]);
        
        $a = array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );
        /*  store array of replacement word or phrases
            make sure each replacemnet is in the same order as 
            the clickbait word you are trying to replace    
        */
        $b = array(
            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the other",
            "you won't really be surprised by",
            "slightly improve",
            "boring",
            "normal"
        );
        
        // use the str_replace() function to replace the words
        // uppercase the first letter in every word using ucwords() function
        // store in a variable
        
        $honestHeadline = str_replace($a,$b,$clickBait);
        
        return array($clickBait,$honestHeadline);
    }

    function displayHonestHeadline($clickBait,$honestHeadline){
        echo "<storng class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";
        echo "<storng class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";
    }



















?>