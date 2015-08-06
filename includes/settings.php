<?php

final class Settings {
    public function __construct($connect = true) {
        // Server name, shown on the main page and on the header
        $this->name = 'LiteBans';

        // Database information
        $host = 'localhost';
        $port = 3306;

        $database = 'litebans';

        $username = 'root';
        $password = 'password';

        // Show inactive bans? Removed bans will show (Unbanned), mutes will show (Unmuted), warnings will show (Expired).
        $this->show_inactive_bans = true;

        // Show pager? This allows users to page through the list of bans.
        $this->show_pager = true;

        // Amount of bans/mutes/warnings to show on each page
        $this->limit_per_page = 10;

        // If you set a table prefix in config.yml, put it here too
        $table_prefix = "";

        $this->table_bans = "{$table_prefix}bans";
        $this->table_mutes = "{$table_prefix}mutes";
        $this->table_warnings = "{$table_prefix}warnings";
        $this->table_history = "{$table_prefix}history";

        // The date format can be changed here.
        // https://secure.php.net/manual/en/function.date.php
        // Example of default:
        // July 2, 2015, 9:19 pm
        $this->date_format = 'F j, Y, g:i a';
        date_default_timezone_set("UTC");

        $driver = 'mysql';

        $this->active_query = "";
        if (!$this->show_inactive_bans) {
            $this->active_query = "WHERE active=1";
        }

        if ($connect) {
            $dsn = "$driver:dbname=$database;host=$host;port=$port;charset=utf8";

            try {
                $this->conn = new PDO($dsn, $username, $password);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
    }
}

?>
