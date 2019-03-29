<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Helper to slugify category gotten from the user name

class Slugify
{
    function slugify($text)
    {

        // covert to lowercase
        $word = strtolower($text);
    
        // remove excess whitespace
        $strippedWord = preg_replace('/\s\s+/', ' ', $word);
    
        // Replace strings
        $out = array(" ", "/", ".", "?", "(", ")", "$", "#", "&", "*", ",", "'", "\"", "“", "”", "\\", "+", "=", "%", "^");
        $slug = str_replace($out, "-", $strippedWord);
    
        // Remove cases of double "--"
        $newSlug = str_replace("--", "-", $slug);
    
        // Check if $out string is trailling at the end of the text
        if (in_array(substr($newSlug, -1), $out) || substr($newSlug, -1) === "-") {
            $cleanedSlug = substr_replace($newSlug, "", -1);
        } else {
            $cleanedSlug = $newSlug;
        }

        return $cleanedSlug;
    }
}
