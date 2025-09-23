<?php

namespace Apps\Fintech\Packages\Etf\Amcs\Install\Schema;

use Phalcon\Db\Column;
use Phalcon\Db\Index;

class EtfAmcs
{
    public function columns()
    {
        return
        [
           'columns' => [
                new Column(
                    'id',
                    [
                        'type'          => Column::TYPE_SMALLINTEGER,
                        'notNull'       => true,
                        'autoIncrement' => true,
                        'primary'       => true,
                    ]
                ),
                new Column(
                    'name',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 255,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'description',
                    [
                        'type'          => Column::TYPE_TEXT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'image',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 255,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'rta_info',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 255,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'address',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 4096,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'phone_number',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 1024,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'website',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 1024,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'contact_email',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 100,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'turn_around_time',
                    [
                        'type'          => Column::TYPE_TINYINTEGER,
                        'notNull'       => false,
                    ]
                )
            ],
            'indexes' => [
                new Index(
                    'column_UNIQUE',
                    [
                        'name'
                    ],
                    'UNIQUE'
                )
            ],
            'options' => [
                'TABLE_COLLATION' => 'utf8mb4_general_ci'
            ]
        ];
    }

    public function indexes()
    {
        return
        [
            new Index(
                'column_INDEX',
                [
                    'name'
                ],
                'INDEX'
            )
        ];
    }
}