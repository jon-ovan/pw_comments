<?php declare(strict_types=1);

use T3\PwComments\Domain\Model\FrontendUser;
use T3\PwComments\Domain\Model\FrontendUserGroup;


return [
    FrontendUser::class => [
        'tableName' => FrontendUser::TABLE_NAME,
    ],
    FrontendUserGroup::class => [
        'tableName' => FrontendUserGroup::TABLE_NAME,
    ],
];