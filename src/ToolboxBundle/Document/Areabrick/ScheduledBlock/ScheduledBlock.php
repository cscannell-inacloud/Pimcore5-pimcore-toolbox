<?php

namespace ToolboxBundle\Document\Areabrick\ScheduledBlock;

use ToolboxBundle\Document\Areabrick\AbstractAreabrick;
use Pimcore\Model\Document\Tag\Area\Info;

class ScheduledBlock extends AbstractAreabrick
{
    public function action(Info $info)
    {
        parent::action($info);
    }

    public function getName()
    {
        return 'Scheduled Block';
    }

    public function getDescription()
    {
        return 'Toolbox Scheduled Block';
    }
}