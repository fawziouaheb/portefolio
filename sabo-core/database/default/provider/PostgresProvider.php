<?php

namespace SaboCore\Database\Default\Provider;

use Exception;
use Override;
use PDO;
use SaboCore\Config\Config;
use SaboCore\Config\ConfigException;
use SaboCore\Database\Default\Model\SaboModel;
use SaboCore\Database\Providers\DatabaseProvider;
use Throwable;

/**
 * @brief Fournisseur postgres
 * @author yahaya bathily https://github.com/yahvya/
 */
class PostgresProvider extends DatabaseProvider {
    /**
     * @var PDO|null instance partagée de connexion à la base de données
     */
    protected static ?PDO $con;

    #[Override]
    public function initDatabase(Config $providerConfig):void{
        // vérification de la configuration postgres
        $providerConfig->checkConfigs("host","user","password","dbname");

        try{
            try{
                $port = "port={$providerConfig->getConfig(name: "port")};";
            }
            catch(ConfigException){
                $port = "";
            }

            self::$con = new PDO(
                dsn: "pgsql:host={$providerConfig->getConfig(name: "host")};{$port}dbname={$providerConfig->getConfig(name: "dbname")};charset=UTF8",
                username: $providerConfig->getConfig(name: "user"),
                password: $providerConfig->getConfig(name: "password"),
                options: [
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );

            if(!SaboModel::initModel() ) throw new Exception();
        }
        catch(Throwable){
            throw new ConfigException(message: "Echec de connexion à la base de donnée");
        }
    }

    /**
     * @return PDO|null la connexion crée à l'initialisation ou null
     */
    public function getCon():?PDO{
        return self::$con;
    }
}