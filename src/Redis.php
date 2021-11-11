<?php
/**
 * Created by chen3jian
 * Date: 2021/7/28
 * Time: 16:06
 */

namespace jz;

use jz\Helper\Analysis;
use jz\Helper\Common;
use jz\Helper\Message;
use jz\Helper\Path;
use jz\process\Linux;
use jz\Process\Win;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use Closure;

/**
 * Created by chen3jian
 * Date: 2021/7/30
 * Time: 23:14
 * Class Task
 * @package jz
 */
class Redis
{
    /**
     * 任务列表
     * @var array
     */
    private $taskList = [];

    /**
     * BaseTask constructor.
     */
    public function __construct()
    {
    }
}