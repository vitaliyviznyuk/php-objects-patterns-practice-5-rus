<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch10;

use popp\ch12\batch06\AppException;
use popp\ch12\batch06\Registry;
use popp\ch12\batch06\Conf;

/* Листинг 12.40 */

abstract class Base
{
    private $pdo;
    private $config = __DIR__ . "/data/woo_options.ini";

    private $stmts = [];

    public function __construct()
    {
        $reg = Registry::instance();
        $options = parse_ini_file($this->config, true);
        $conf = new Conf($options['config']);
        $reg->setConf($conf);
        $dsn = $reg->getDSN();

        if (is_null($dsn)) {
            throw new AppException("No DSN");
        }

        $this->pdo = new \PDO($dsn);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getPdo(): \PDO
    {
        return $this->pdo;
    }
}
