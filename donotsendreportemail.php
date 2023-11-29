<?php

require_once 'donotsendreportemail.civix.php';
use CRM_Donotsendreportemail_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function donotsendreportemail_civicrm_config(&$config) {
  _donotsendreportemail_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function donotsendreportemail_civicrm_install() {
  _donotsendreportemail_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function donotsendreportemail_civicrm_enable() {
  _donotsendreportemail_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_alterReportVar().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterReportVar
 */
function donotsendreportemail_civicrm_alterReportVar($varType, &$var, &$object) {
  if ($varType == 'rows') {
    if (empty($var)) {
      // set $this->_sendmail to false to abort email when report rows are empty.
      $object->setVar('_sendmail', FALSE);
    }
  }
}
