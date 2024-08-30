<?php

namespace SaboCore\Database\Default\Attributes;

use Attribute;
use Override;
use PDO;
use SaboCore\Database\Default\Conditions\Cond;
use SaboCore\Database\Default\CustomDatatypes\Timestamp;
use SaboCore\Database\Default\Formatters\Formater;

/**
 * @brief Champs de type timestamp|date|time
 * @author yahaya bathily https://github.com/yahvya
 */
#[Attribute]
class TimestampColumn extends TableColumn{
    /**
     * @param string $columnName Nom de la colonne en base de donnée
     * @param bool $isNullable si le champ est nullable (mis à false par défaut si clé primaire)
     * @param bool $isPrimaryKey si le champ est une clé primaire
     * @param bool $isUnique si le champ est unique
     * @param string $defaultValue Valeur par défaut de l'attribut (sous la forme sql)
     * @param bool $isForeignKey si le champ est une clé étrangère
     * @param string|null $referencedModel Class du modèle référencé par la clé
     * @param string|null $referencedAttributeName Nom de l'attribut référencé
     * @param Cond[] $setConditions Conditions à vérifier sur la donnée originale avant de l'accepter dans l'attribut
     * @param Formater[] $dataFormatters Formateur de donnée pour transformer la donnée originale
     * @param Formater[] $datasReformers Formateur de donnée pour reformer la donnée
     * @attention Les conditions sont appelées avant formatage sur la donnée originale
     * @attention Chaque formateur recevra le résultat du précédent
     * @attention L'attribut par défaut doit contenir la chaine exacte qui sera saisie dans la création sql ex : "'default'" "10" ...
     */
    public function __construct(string $columnName, bool $isNullable = false, bool $isPrimaryKey = false, bool $isUnique = false, string $defaultValue = self::NO_DEFAULT_VALUE, bool $isForeignKey = false, ?string $referencedModel = null, ?string $referencedAttributeName = null, array $setConditions = [], array $dataFormatters = [], array $datasReformers = []){
        parent::__construct(
            columnName: $columnName,
            isNullable: $isNullable,
            isPrimaryKey: $isPrimaryKey,
            isUnique: $isUnique,
            defaultValue: $defaultValue,
            isForeignKey: $isForeignKey,
            referencedModel: $referencedModel,
            referencedAttributeName: $referencedAttributeName,
            setConditions: $setConditions,
            dataFormatters: $dataFormatters,
            datasReformers: $datasReformers
        );
    }

    #[Override]
    public function getCreationSql(): string{
        return
            "$this->columnName INT"
            . ($this->isNullable ? "" : " NOT NULL")
            . ($this->isUnique() ? " UNIQUE": "")
            . ($this->haveDefaultValue() ? " DEFAULT {$this->getDefaultValueStr()}" : "");
    }

    #[Override]
    public function convertToValue(mixed $data): mixed{
        return Timestamp::fromDatabase(data: $data);
    }

    /**
     * @param Timestamp $data donnée de l'attribut
     * @return mixed timestamp converti
     */
    #[Override]
    public function convertFromValue(mixed $data): mixed{
        return $data->convertForDatabase();
    }

    #[Override]
    public function getColumnType(): int{
        return PDO::PARAM_INT;
    }
}