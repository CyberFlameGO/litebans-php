<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class LangTest extends TestCase {
    public function testLanguages(): void {
        $langs = glob('./lang/*.php');
        foreach ($langs as $lang) {
            include_once $lang;
            $lang_class = $lang;
            $lang_class = substr($lang_class, 0, strpos($lang_class, ".")); // grab "lang/en_US" from "en_US.utf8.php"
            $lang_class = substr($lang_class, strlen("./lang/")); // grab "en_US" from "lang/en_US"

            $instance = new $lang_class;
            $this->assertTrue(is_array($instance->array));

            $count = sizeof($instance->array);
            $this->assertTrue($count > 0);

            echo "Language $lang_class is valid. $count messages defined.";
        }
    }
}
