<?php

class es_ES {
    public function __construct() {
        $this->version = 2;
        $array = array();
        $this->array = &$array;

        $array["index.welcome.main"] = "Bienvenido a la lista de sanciones de {server}.";
        $array["index.welcome.sub"] = "Aqui encontrarás una lista de todas las sanciones.";

        $array["title.index"] = 'Inicio';
        $array["title.bans"] = 'Baneos';
        $array["title.mutes"] = 'Muteos';
        $array["title.warnings"] = 'Advertencias';
        $array["title.kicks"] = 'Expulsiones';
        $array["title.player-history"] = "Sanciones recientes de {name}";
        $array["title.staff-history"] = "Sanciones recientes por {name}";


        $array["generic.ban"] = "Baneo";
        $array["generic.mute"] = "Muteo";
        $array["generic.warn"] = "Advertencia";
        $array["generic.kick"] = "Expulsión";

        $array["generic.unban"] = "Desbaneo";
        $array["generic.unmute"] = "Desmuteo";

        $array["generic.banned"] = "Baneado";
        $array["generic.muted"] = "Muteado";
        $array["generic.warned"] = "Advertido";
        $array["generic.kicked"] = "Expulsado";

        $array["generic.unbanned"] = "Desbaneado";
        $array["generic.unmuted"] = "Desmuteado";

        $array["generic.banned.by"] = $array["generic.banned"] . " por";
        $array["generic.muted.by"] = $array["generic.muted"] . " por";
        $array["generic.warned.by"] = $array["generic.warned"] . " por";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " por";

        $array["generic.ipban"] = $array["generic.ban"] . " de IP";
        $array["generic.ipmute"] = $array["generic.mute"] . " de IP";

        $array["generic.permanent"] = "Permanente";
        $array["generic.permanent.ban"] = $array["generic.ban"] . " permanente";
        $array["generic.permanent.mute"] = $array["generic.mute"] . " permanente";

        $array["generic.type"] = "Tipo";
        $array["generic.active"] = "Activo";
        $array["generic.inactive"] = "Inactivo";
        $array["generic.expired"] = "Expirado";
        $array["generic.expired.kick"] = "No disponible";
        $array["generic.player-name"] = "Jugador";
        $array["generic.reason.default"] = "Razón no establecida";

        $array["page.expired.ban"] = '(retirado)';
        $array["page.expired.ban-by"] = '(retirado por {name})';
        $array["page.expired.mute"] = '(desmuteado)';
        $array["page.expired.mute-by"] = '(desmuteado por {name})';
        $array["page.expired.warning"] = '(expirado)';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "Moderador";
        $array["table.reason"] = "Razón";
        $array["table.reason.unban"] = "Razón de desbaneo";
        $array["table.reason.unmute"] = "Razón de desmuteo";
        $array["table.date"] = "Fecha";
        $array["table.expires"] = "Expira";
        $array["table.received-warning"] = "Advertencia recibida";


        $array["table.server.name"] = "Servidor";
        $array["table.server.scope"] = "Alcance de la sanción";
        $array["table.server.origin"] = "Servidor de origen";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Página";

        $array["action.check"] = "Revisar";
        $array["action.return"] = "Volver a {origin}";

        $array["error.missing-args"] = "Faltan argumentos.";
        $array["error.name.unseen"] = "{name} no ha entrado al servidor.";
        $array["error.name.invalid"] = "Nombre inválido.";
        $array["history.error.uuid.no-result"] = "No se han encontrado sanciones.";
        $array["info.error.id.no-result"] = "Error: no se ha encontrado {type} en la base de datos.";
    }
}
