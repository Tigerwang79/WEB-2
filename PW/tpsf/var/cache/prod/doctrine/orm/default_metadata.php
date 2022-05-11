<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Film__CLASSMETADATA__' => 0,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Film',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Film',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\FilmRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'nom' => [
                            'fieldName' => 'nom',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 200,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'nom',
                        ],
                        'annee' => [
                            'fieldName' => 'annee',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'options' => [
                                'comment' => 'année de sortie',
                            ],
                            'columnName' => 'annee',
                        ],
                        'enstock' => [
                            'fieldName' => 'enstock',
                            'type' => 'boolean',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'options' => [
                                'default' => true,
                            ],
                            'columnName' => 'enstock',
                        ],
                        'prix' => [
                            'fieldName' => 'prix',
                            'type' => 'float',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'prix',
                        ],
                        'quantite' => [
                            'fieldName' => 'quantite',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'quantite',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'nom' => 'nom',
                        'annee' => 'annee',
                        'enstock' => 'enstock',
                        'prix' => 'prix',
                        'quantite' => 'quantite',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'nom' => 'nom',
                        'annee' => 'annee',
                        'enstock' => 'enstock',
                        'prix' => 'prix',
                        'quantite' => 'quantite',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'sb_films',
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
