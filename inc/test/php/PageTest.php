<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once './inc/page.php';

final class PageTest extends TestCase {
    public function testBansPagerHTML(): void {
        $page = new Page("bans", false, false);

        $currentPage = 1;
        $page->page = $currentPage;
        $pager = $page->generate_pager(10);
        $this->assertIsArray($pager);
        $this->assertCount(3, $pager);
        $this->assertEquals('<div class="litebans-pager litebans-pager-left litebans-pager-inactive">«</div>', $pager["prev"]);
        $this->assertEquals('<a href="bans.php?page=2"><div class="litebans-pager litebans-pager-right litebans-pager-active">»</div></a>', $pager["next"]);
        $this->assertEquals("<div><div class=\"litebans-pager-number\">Page $currentPage/2</div></div>", $pager["count"]);

        $currentPage++;
        $page->page = $currentPage;
        $pager = $page->generate_pager(10);
        $this->assertIsArray($pager);
        $this->assertCount(3, $pager);
        $this->assertEquals("<div><div class=\"litebans-pager-number\">Page $currentPage/2</div></div>", $pager["count"]);
    }

    public function testHistoryPagerHTML(): void {
        $page = new Page("test", false);
        foreach (explode("\n", file_get_contents("./inc/test/php/test_setup.sql")) as $query) {
            if (strlen($query) > 0) {
                $page->conn->query($query);
            }
        }
        $_GET = ["uuid" => "2ccd0bb281214361803a945b8f0644ab"];
        ob_start();
        require_once './history.php';
        $output = ob_get_clean();
        $historyPager = '<div class="litebans-pager litebans-pager-left litebans-pager-inactive">«</div><div class="litebans-pager litebans-pager-right litebans-pager-inactive">»</div><div><div class="litebans-pager-number">Page 1/1</div></div>';
        $this->assertStringContainsString($historyPager, $output);
    }
}
