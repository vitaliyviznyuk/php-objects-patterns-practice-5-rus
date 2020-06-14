<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch06\batch03;

/* Листинг 06.05 */

class XmlParamHandler extends ParamHandler
{

    public function write(): bool
    {
        // write XML
        // using $this->params
        /* /Листинг 06.05 */
        $fh = $this->openSource('w');
        fputs($fh, "<params>\n");
        foreach ($this->params as $key => $val) {
            fputs($fh, "\t<param>\n");
            fputs($fh, "\t\t<key>$key</key>\n");
            fputs($fh, "\t\t<val>$val</val>\n");
            fputs($fh, "\t</param>\n");
        }
        fputs($fh, "</params>\n");
        fclose($fh);
        return true;
        /* Листинг 06.05 */
    }

    public function read(): bool
    {
        // read XML
        // and populate $this->params
        /* /Листинг 06.05 */
        $el = @simplexml_load_file($this->source);
        if (empty($el)) {
            throw new Exception("could not parse $this->source");
        }
        foreach ($el->param as $param) {
            $this->params["$param->key"] = "$param->val";
        }
        return true;
        /* Листинг 06.05 */
    }
}
