<?php

/**
 * JobeetAffiliateTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JobeetAffiliateTable extends PluginJobeetAffiliateTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object JobeetAffiliateTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JobeetAffiliate');
    }
}