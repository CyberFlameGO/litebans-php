<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class LangTest extends TestCase {
    public function testLanguages(): void {
        echo "\n";

        $dir = './lang';
        $langs = glob("$dir/*.php");
        foreach ($langs as $lang) {
            include_once $lang;
            $lang_class = $lang;
            $lang_class = substr($lang_class, strlen("$dir/")); // grab "en_US.utf8.php" from "./lang/en_US.utf8.php"
            $lang_class = substr($lang_class, 0, strpos($lang_class, ".")); // grab "en_US" from "en_US.utf8.php"

            echo("Testing $lang_class ($lang)... ");
            $instance = new $lang_class;
            $this->assertTrue(is_array($instance->array));

            $count = sizeof($instance->array);
            $this->assertTrue($count > 0);

            echo "Success. $count messages defined.\n";
        }
    }
}
