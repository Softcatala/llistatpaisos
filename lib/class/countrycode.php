<?php
/**
 * Description
 * This class handles the xml results and create the entries in the database
 * @author Pau Iranzo <paugnu@gmail.com>
 */
class CountryCode
{

    var $source;
    var $alfa2_code;
    var $alfa3_code;
    var $en;
    var $ca;
    var $ca_long;
    var $ca_article;
    var $state;
    var $comments;

    function __construct()
    {
    }

    public function generateTable()
    {
        global $db;

        $country_codes = $db->get_col("SELECT alfa2_code FROM country_codes GROUP BY alfa2_code");

        $names = array();
        foreach ($country_codes as $code) {
            if($code != '' && $code != 'ZZ') {
                $country_data = $db->get_row("select group_concat(ca SEPARATOR '|') _ca,group_concat(source SEPARATOR '|') _source from country_codes where alfa2_code = '$code' group by alfa2_code;");
                $country_names = explode('|', $country_data->_ca);
                $sources = explode('|', $country_data->_source);
                foreach($sources as $key => $source) {
                    $names['codes'][$code][$source] = $country_names[$key];
                }
            }
        }
        $names['sources'] = $sources;

        return $names;
    }
}

?>
