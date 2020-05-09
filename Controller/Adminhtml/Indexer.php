<?php
/**
 * @copyright Copyright © 2020 CreenSight. All rights reserved.
 * @author CreenSight Development Team <magento@creensight.com>
 */

namespace CreenSight\BackendReindex\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Framework\Indexer\IndexerRegistry;

/**
 * Class Indexer
 * @package CreenSight\BackendReindex\Controller\Adminhtml
 */
abstract class Indexer extends Action
{
    /**
     * Authorization level of a basic admin session
     */
    const ADMIN_RESOURCE = 'CreenSight_BackendReindex::reindex';

    /**
     * @var IndexerRegistry
     */
    protected $indexerRegistry;

    /**
     * Reindex constructor.
     *
     * @param Action\Context $context
     * @param IndexerRegistry $indexerRegistry
     */
    public function __construct(
        Action\Context $context,
        IndexerRegistry $indexerRegistry
    ) {
        $this->indexerRegistry = $indexerRegistry;
        parent::__construct($context);
    }
}
