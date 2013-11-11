<?php
/*
+--------------------------------------------------------------------+
| CiviHR version 1.0                                                 |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2013                                |
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

require_once 'CiviTest/CiviUnitTestCase.php';

class CRM_HRVisa_ActivityTest extends CiviUnitTestCase {

  function get_info() {
    return array(
      'name'      => 'Activity Test',
      'description' => 'Test activity contact sync for visa required field',
      'group'      => 'CiviCRM BAO Tests',
    );
  }

  function setUp() {
    parent::setUp();
  }

  protected static function _populateDB($perClass = FALSE, &$object = NULL) {
    if (!parent::_populateDB($perClass, $object)) {
      return FALSE;
    }
    _hrvisa_phpunit_populateDB();
    return TRUE;
  }

  function testSync() {
    /* $result1 = $this->callAPISuccess('HRJob', 'create', array( */
    /*   'contact_id' => $cid, */
    /*   'position' => 'First', */
    /*   'contract_type' => 'Volunteer', */
    /* )); */

    // case 1 : is_visa_required = TRUE, and 2 migration records, activity of type 'Visa Expiration' created with target contact as xsthe one whose record is being edited.

    // case 2 : is_visa_required = TRUE, one migration record. later is_visa_required = FALSE, activity status set to 'Cancelled' from 'Scheduled'

    // case 3 : is_visa_required = FALSE, one migration record, no activity creation

    // case 4 : 2 activity records of type visa expiration for a contact, with visa required = true, check if the latest gets updated with proper migration values

  }
}