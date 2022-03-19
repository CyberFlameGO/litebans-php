<?php

class ja_JP {
    public function __construct() {
        $this->version = 2;
        $array = array();
        $this->array = &$array;

        $array["index.welcome.main"] = 'ようこそ！ {server} の BANリストへ';
        $array["index.welcome.sub"] = 'ここには全ての処罰が公開されています';

        $array["title.index"] = 'ホーム';
        $array["title.bans"] = 'BANs';
        $array["title.mutes"] = 'MUTEs';
        $array["title.warnings"] = '警告';
        $array["title.kicks"] = 'Kick';
        $array["title.player-history"] = "{name} の最近の処罰";
        $array["title.staff-history"] = "{name} による最近の処罰実行";


        $array["generic.ban"] = "BAN";
        $array["generic.mute"] = "MUTE";
        $array["generic.warn"] = "警告";
        $array["generic.kick"] = "Kick";

        $array["generic.unban"] = "BAN解除";
        $array["generic.unmute"] = "MUTE解除";

        $array["generic.banned"] = "Banned";
        $array["generic.muted"] = "Muted";
        $array["generic.warned"] = "警告されました";
        $array["generic.kicked"] = "Kicked";

        $array["generic.unbanned"] = "BAN解除";
        $array["generic.unmuted"] = "MUTE解除";

        $array["generic.banned.by"] = $array["generic.banned"] . " By";
        $array["generic.muted.by"] = $array["generic.muted"] . " By";
        $array["generic.warned.by"] = $array["generic.warned"] . " By";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " By";

        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];

        $array["generic.permanent"] = "無期限";
        $array["generic.permanent.ban"] = $array['generic.permanent'] . ' ' . $array["generic.ban"];
        $array["generic.permanent.mute"] = $array['generic.permanent'] . ' ' . $array["generic.mute"];

        $array["generic.type"] = "タイプ";
        $array["generic.active"] = "実行中";
        $array["generic.inactive"] = "実行中止";
        $array["generic.expired"] = "期限切れ";
        $array["generic.expired.kick"] = "N/A";
        $array["generic.player-name"] = "MCユーザー名";

        $array["page.expired.ban"] = '(' . $array["generic.unbanned"] . ')';
        $array["page.expired.ban-by"] = '(' . $array["generic.unbanned"] . ' by {name})';
        $array["page.expired.mute"] = '(' . $array["generic.unmuted"] . ')';
        $array["page.expired.mute-by"] = '(' . $array["generic.unmuted"] . ' by {name})';
        $array["page.expired.warning"] = '(' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "モデレーター";
        $array["table.reason"] = "理由";
        $array["table.reason.unban"] = $array["generic.unban"] . " " . $array["table.reason"];
        $array["table.reason.unmute"] = $array["generic.unmute"] . " " . $array["table.reason"];
        $array["table.date"] = "実行日時";
        $array["table.expires"] = "有効期限";
        $array["table.received-warning"] = "受け取った警告";


        $array["table.server.name"] = "サーバー";
        $array["table.server.scope"] = "サーバー範囲";
        $array["table.server.origin"] = "実行サーバー";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "ページ";

        $array["action.check"] = "検索";
        $array["action.return"] = "{origin} に戻る";

        $array["error.missing-args"] = "引数がありません。";
        $array["error.name.unseen"] = "{name} はサーバーに参加したことがありません。";
        $array["error.name.invalid"] = "プレイヤー名が無効です";
        $array["history.error.uuid.no-result"] = "処罰がありません";
        $array["info.error.id.no-result"] = "エラー: ";
    }
}
