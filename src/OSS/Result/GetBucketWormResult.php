<?php

namespace AliOSS\Result;


use AliOSS\Model\WormConfig;

/**
 * Class GetBucketWormResult
 * @package OSS\Result
 */
class GetBucketWormResult extends Result
{
    /**
     * Parse bucket stat data
     *
     * @return WormConfig
     */
    protected function parseDataFromResponse()
    {
        $content = $this->rawResponse->body;
        $config = new WormConfig();
        $config->parseFromXml($content);
        return $config;
    }
}