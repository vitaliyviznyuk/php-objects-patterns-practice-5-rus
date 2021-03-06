<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch12;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        Runner::init();
    }

    /* Листинг 04.65 */
    public static function init()
    {
        try {
            $conf = new Conf(__DIR__ . "/conf.broken.xml");
            print "user: " . $conf->get('user') . "\n";
            print "host: " . $conf->get('host') . "\n";
            $conf->set("pass", "newpass");
            $conf->write();
        } catch (FileException $e) {
            // permissions issue or non-existent file
            throw $e;
        } catch (XmlException $e) {
            // broken xml
        } catch (ConfException $e) {
            // wrong kind of XML file
        } catch (\Exception $e) {
            // backstop: should not be called
        }
    }
    /* /Листинг 04.65 */
}
