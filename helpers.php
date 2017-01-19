<?php   
    
    /**
     * Strpos (Find the numeric position of the first occurrence of needle in the haystack string)
     * but in this implementation the needles as an array.
     * Also allows for a string, or an array inside an array.
     *
     * @param $haystack
     * @param $needles
     * @return bool|int
     */
    function strpos_array($haystack, $needles)
    {
        if (is_array($needles)) {
            foreach ($needles as $str) {
                if (is_array($str)) {
                    return $this->strpos_array($haystack, $str);
                } else {
                    return strpos($haystack, $str);
                }
            }
        } else {
            return strpos($haystack, $needles);
        }
    }
    
?>
