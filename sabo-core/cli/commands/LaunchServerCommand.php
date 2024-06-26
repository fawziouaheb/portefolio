<?php

namespace SaboCore\Cli\Commands;

use Override;
use SaboCore\Cli\Cli\SaboCli;
use SaboCore\Cli\Theme\Theme;
use SaboCore\Utils\Printer\Printer;

/**
 * @brief Commande de lancement de serveur
 * @author yahaya bathily https://github.com/yahvya
 */
class LaunchServerCommand extends SaboCommand{
    /**
     * @brief Port par défaut
     */
    protected const string DEFAULT_PORT = "8080";

    /**
     * @brief Hôte par défaut
     */
    protected const string DEFAULT_HOST = "127.0.0.1";

    #[Override]
    public function execCommand(SaboCli $cli): void{
        $port = $cli->getArgumentManager()->find(optionName: "port")?->getArgumentValue() ?? self::DEFAULT_PORT;
        $host = $cli->getArgumentManager()->find(optionName: "host")?->getArgumentValue() ?? self::DEFAULT_HOST;

        $link = "$host:$port";
        $rooter = APP_CONFIG->getConfig(name: "ROOT") . "/sabo-core/index.php";

        Printer::printStyle(
            toPrint: "Lancement du serveur ($link)",
            compositeStyle: $cli->getThemeConfig()->getConfig(name: Theme::SPECIAL_TEXT_STYLE->value),
            countOfLineBreak: 1
        );

        system(command: "php -S $link $rooter");
    }

    #[Override]
    public function getHelpLines(): array{
        return [
            "Lance le serveur de développement - Port par défaut (" . self::DEFAULT_PORT . ") - Hôte par défaut (". self::DEFAULT_HOST .")",
            "php sabo $this->commandName",
            "php sabo $this->commandName --port={port}",
            "php sabo $this->commandName --host={adresse}",
        ];
    }
}