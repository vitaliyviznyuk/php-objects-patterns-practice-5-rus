<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch11;

class Conf
{
    private $file;
    private $xml;
    private $lastmatch;

    public function __construct($file)
    {
        $this->file = $file;
        if (!file_exists($file)) {
            throw new FileException("file '$file' does not exist");
        }
        $this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);
        if (!is_object($this->xml)) {
            throw new XmlException(libxml_get_last_error());
        }
        $matches = $this->xml->xpath("/conf");
        if (!count($matches)) {
            throw new ConfException("could not find root element: conf");
        }
    }

    public function write()
    {
        if (!is_writeable($this->file)) {
            throw new \Exception("file '{$this->file}' is not writeable");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    public function get($str)
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if (count($matches)) {
            $this->lastmatch = $matches[0];
            return (string)$matches[0];
        }
        return null;
    }

    public function set($key, $value)
    {
        if (!is_null($this->get($key))) {
            $this->lastmatch[0] = $value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}
