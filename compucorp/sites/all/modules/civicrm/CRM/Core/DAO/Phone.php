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
 * Generated from xml/schema/CRM/Core/Phone.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:5c4a5cc072b2fbe3bef7323078037a39)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_Phone constructor.
 */
class CRM_Core_DAO_Phone extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_phone';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Unique Phone ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $contact_id;
  /**
   * Which Location does this phone belong to.
   *
   * @var int unsigned
   */
  public $location_type_id;
  /**
   * Is this the primary phone for this contact and location.
   *
   * @var boolean
   */
  public $is_primary;
  /**
   * Is this the billing?
   *
   * @var boolean
   */
  public $is_billing;
  /**
   * Which Mobile Provider does this phone belong to.
   *
   * @var int unsigned
   */
  public $mobile_provider_id;
  /**
   * Complete phone number.
   *
   * @var string
   */
  public $phone;
  /**
   * Optional extension for a phone number.
   *
   * @var string
   */
  public $phone_ext;
  /**
   * Phone number stripped of all whitespace, letters, and punctuation.
   *
   * @var string
   */
  public $phone_numeric;
  /**
   * Which type of phone does this number belongs.
   *
   * @var int unsigned
   */
  public $phone_type_id;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_phone';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
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
          'title' => ts('Phone ID') ,
          'description' => 'Unique Phone ID',
          'required' => true,
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
        ) ,
        'contact_id' => array(
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Phone Contact') ,
          'description' => 'FK to Contact ID',
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'location_type_id' => array(
          'name' => 'location_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Phone Location Type') ,
          'description' => 'Which Location does this phone belong to.',
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_location_type',
            'keyColumn' => 'id',
            'labelColumn' => 'display_name',
          )
        ) ,
        'is_primary' => array(
          'name' => 'is_primary',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Phone Primary?') ,
          'description' => 'Is this the primary phone for this contact and location.',
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
        ) ,
        'is_billing' => array(
          'name' => 'is_billing',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Billing Phone') ,
          'description' => 'Is this the billing?',
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
        ) ,
        'mobile_provider_id' => array(
          'name' => 'mobile_provider_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mobile Provider') ,
          'description' => 'Which Mobile Provider does this phone belong to.',
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
        ) ,
        'phone' => array(
          'name' => 'phone',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Phone') ,
          'description' => 'Complete phone number.',
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'import' => true,
          'where' => 'civicrm_phone.phone',
          'headerPattern' => '/phone/i',
          'dataPattern' => '/^[\d\(\)\-\.\s]+$/',
          'export' => true,
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'phone_ext' => array(
          'name' => 'phone_ext',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Phone Extension') ,
          'description' => 'Optional extension for a phone number.',
          'maxlength' => 16,
          'size' => 4,
          'import' => true,
          'where' => 'civicrm_phone.phone_ext',
          'headerPattern' => '/extension/i',
          'dataPattern' => '/^\d+$/',
          'export' => true,
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'phone_numeric' => array(
          'name' => 'phone_numeric',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Phone Numeric') ,
          'description' => 'Phone number stripped of all whitespace, letters, and punctuation.',
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
        ) ,
        'phone_type_id' => array(
          'name' => 'phone_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Phone Type') ,
          'description' => 'Which type of phone does this number belongs.',
          'table_name' => 'civicrm_phone',
          'entity' => 'Phone',
          'bao' => 'CRM_Core_BAO_Phone',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'phone_type',
            'optionEditPath' => 'civicrm/admin/options/phone_type',
          )
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'phone', $prefix, array());
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'phone', $prefix, array());
    return $r;
  }
}
