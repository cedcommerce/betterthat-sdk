<?php

/**
 * CedCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the End User License Agreement (EULA)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://cedcommerce.com/license-agreement.txt
 *
 * @category    BetterthatSdk-Sdk
 * @package     Ced_BetterthatSdk
 * @author      CedCommerce Core Team <connect@cedcommerce.com>
 * @copyright   Copyright CedCommerce (https://cedcommerce.com/)
 * @license     https://cedcommerce.com/license-agreement.txt
 */

namespace BetterthatSdk\Core;

interface ConfigInterface
{

    /**
     * ConfigInterface constructor.
     * @param array $params
     */
    public function __construct($params = []);

    /**
     * Set Base Directory
     * @param $baseDirectory
     * @return mixed
     */
    public function setBaseDirectory($baseDirectory);

    /**
     * Get Base Directory
     * @return mixed
     */
    public function getBaseDirectory();

    public function getClientId();

    public function getClientSecret();

    /**
     * Set Betterthat Service Url
     * @param string $apiUrl
     * @return boolean
     */
    public function setApiUrl($apiUrl);

    /**
     * Get Betterthat Service Url
     * @return string
     */
    public function getApiUrl();

    /**
     * Set to enable or disable logging
     * @param bool $debugMode
     * @return boolean
     */
    public function setDebugMode($debugMode = true);

    /**
     * Get Logging status
     * @return boolean
     */
    public function getDebugMode();

    /**
     * Get Xml Generator
     * @return mixed
     */
    public function getParser();

    /**
     * Set Xml Parser
     * @param $parser
     * @return mixed
     */
    public function setParser($parser);

    /**
     * Get Xml Generator
     * @return mixed
     */
    public function getGenerator();

    /**
     * Set Xml Generator
     * @param $generator
     * @return mixed
     */
    public function setGenerator($generator);


    public function getClientDomain();
    /**
     * Get Logger
     * @return \Psr\Log\LoggerInterface
     */
    public function getLogger();

    /**
     * Set Logger
     * @param \Psr\Log\LoggerInterface $logger
     * @return mixed
     */
    public function setLogger($logger);
}
