<?php
namespace Zagonico\CustomCsvProfiler\Output;

class Csvfile extends \Magento\Framework\Profiler\Driver\Standard\Output\Csvfile
{
    /**
     * Parses file path
     *
     * @param array|null $config
     * @return string
     */
    protected function _parseFilePath(array $config = null)
    {
        $result = parent::_parseFilePath($config);
        return str_replace('.csv', "-".date('Ymd-His')."-".uniqid('', true).".csv", $result);
    }
}
