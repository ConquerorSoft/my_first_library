<?php
/**
 * File containing FirstClass
 * 
 * @package conquerorsoft/my_first_library
 * @author Christian Varela <cvarela@conquerorsoft.com>
 * @copyright (c) 2017, Conqueror Soft Inc (http://www.conquerorsoft.com)
 */

namespace conquerorsoft\my_first_library;

/**
 * This class provides functionality for encoding and decoding alphanumerical strings including spaces
 * Other characters will throw an exception
 * 
 * @author Christian Varela <cvarela@conquerorsoft.com>
 */
class FirstClass
{
    /**
     * Encodes a string by a simple shift of characters
     * 
     * @param type $string
     * @return string
     * @throws \Exception
     */
    public function encodeString($string)
    {
        $string= strtolower($string);
        $src="abcdefghijklmnopqrstuvwxyz0123456789 ";
        $dst="jklmnopqrstuvwxyz0123456789abcdefghi ";
        for ($i=0; $i<strlen($string); $i++) {
            $pos=strpos($src, $string[$i]);
            if ($pos===false) {
                throw new \Exception("Please provide only numbers and alphanumerical characters");
            }
            $string[$i]=$dst[$pos];
        }
        return $string;
    }

    /**
     * Decodes a string by a simple shift of characters
     * 
     * @param type $string
     * @return string
     * @throws \Exception
     */
    public function decodeString($string)
    {
        $string= strtolower($string);
        $src="jklmnopqrstuvwxyz0123456789abcdefghi ";
        $dst="abcdefghijklmnopqrstuvwxyz0123456789 ";
        for ($i=0; $i<strlen($string); $i++) {
            $pos=strpos($src, $string[$i]);
            if ($pos===false) {
                throw new \Exception("Please provide only numbers and alphanumerical characters");
            }
            $string[$i]=$dst[$pos];
        }
        return $string;
    }
}
