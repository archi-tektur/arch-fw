<?php
/**
 * ArchFramework (ArchFW in short) is universal template for server-side rendered applications and services.
 * ArchFW comes with pre-installed router and JSON API functionality.
 * Visit https://github.com/archi-tektur/ArchFW/ for more info.
 *
 * PHP version 7.2
 *
 * @category  Framework / Template
 * @package   ArchFW
 * @author    Oskar Barcz <kontakt@archi-tektur.pl>
 * @copyright 2018 Oskar 'archi_tektur' Barcz
 * @license   MIT
 * @version   2.5.0
 * @link      https://github.com/archi-tektur/ArchFW/
 */

namespace ArchFW\Model;

/**
 * Factory is creating new Database handler with pre-installed configuration
 *
 * @package ArchFW\Model
 */
final class DatabaseFactory
{
    /**
     * Getting brand new instance of Database object, with loaded config given in config.cfg file.
     *
     * @return Database Returns database object with config given
     */
    final public static function getInstance()
    {
        return new Database([
            'database_type' => CONFIG['database']['databaseType'],
            'database_name' => CONFIG['database']['databaseName'],
            'server'        => CONFIG['database']['server'],
            'username'      => CONFIG['database']['user'],
            'password'      => CONFIG['database']['password'],
        ]);
    }
}
