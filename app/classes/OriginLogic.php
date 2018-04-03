<?php

/**
 * Created by PhpStorm.
 * User: sven
 * Date: 2017/7/7 0007
 * Time: 下午 3:56
 */

namespace main\app\classes;

use main\app\model\issue\IssueLabelModel;
use main\app\model\issue\IssuePriorityModel;
use main\app\model\issue\IssueResolveModel;
use main\app\model\OriginModel;
use main\app\model\project\ProjectModuleModel;
use main\app\model\project\ProjectVersionModel;
use main\app\model\issue\IssueStatusModel;
class OriginLogic
{

    public function getOrigins()
    {
        $model = new OriginModel();
        $rows = $model->getAllItems();
        foreach ($rows as &$row) {
            if (strpos($row['avatar'], 'http://') === false) {
                $row['avatar'] = ROOT_URL . $row['avatar'];
            }
        }
        return $rows;
    }

}
