<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Queue/QueueItem.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:29c70cc367a66f90eb5616927289949e)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Queue_DAO_QueueItem constructor.
 */
class CRM_Queue_DAO_QueueItem extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_queue_item';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Name of the queue which includes this item
   *
   * @var string
   */
  public $queue_name;
  /**
   *
   * @var int
   */
  public $weight;
  /**
   * date on which this item was submitted to the queue
   *
   * @var datetime
   */
  public $submit_time;
  /**
   * date on which this job becomes available; null if ASAP
   *
   * @var datetime
   */
  public $release_time;
  /**
   * Serialized queue
   *
   * @var text
   */
  public $data;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_queue_item';
    parent::__construct();
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Queue ID') ,
          'required' => true,
          'table_name' => 'civicrm_queue_item',
          'entity' => 'QueueItem',
          'bao' => 'CRM_Queue_BAO_QueueItem',
        ) ,
        'queue_name' => array(
          'name' => 'queue_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Queue Name') ,
          'description' => 'Name of the queue which includes this item',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_queue_item',
          'entity' => 'QueueItem',
          'bao' => 'CRM_Queue_BAO_QueueItem',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'required' => true,
          'table_name' => 'civicrm_queue_item',
          'entity' => 'QueueItem',
          'bao' => 'CRM_Queue_BAO_QueueItem',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'submit_time' => array(
          'name' => 'submit_time',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Submit Time') ,
          'description' => 'date on which this item was submitted to the queue',
          'required' => true,
          'table_name' => 'civicrm_queue_item',
          'entity' => 'QueueItem',
          'bao' => 'CRM_Queue_BAO_QueueItem',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'release_time' => array(
          'name' => 'release_time',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Release Time') ,
          'description' => 'date on which this job becomes available; null if ASAP',
          'table_name' => 'civicrm_queue_item',
          'entity' => 'QueueItem',
          'bao' => 'CRM_Queue_BAO_QueueItem',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'data' => array(
          'name' => 'data',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Queue item datas') ,
          'description' => 'Serialized queue',
          'table_name' => 'civicrm_queue_item',
          'entity' => 'QueueItem',
          'bao' => 'CRM_Queue_BAO_QueueItem',
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'queue_item', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'queue_item', $prefix, array());
    return $r;
  }
}
