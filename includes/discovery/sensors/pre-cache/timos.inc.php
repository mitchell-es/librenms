<?php
/*
 * LibreNMS
 *
 * Copyright (c) 2016 Neil Lathwood <neil@lathwood.co.uk>
 * This program is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version.  Please see LICENSE.txt at the top level of
 * the source code distribution for details.
 */
#
# These OIDS are all from tmnxDigitalDiagMonitorEntry. There are 40 more values in
# that table which are not currently used so we gain some efficiency by not
# walking the whole table. Also, this table tends to cause slowdowns for the snmp
# process on the router being walked so these OIDs are configured to not use bulk
# snmpbulkwalk in the timos OS definition file.
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMRxOpticalPower', [], 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMTxOutputPower', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMExternallyCalibrated', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMRxOpticalPowerLowAlarm', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMRxOpticalPowerLowWarning', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMRxOpticalPowerHiAlarm', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMRxOpticalPowerHiWarning', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMTxOutputPowerLowAlarm', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMTxOutputPowerLowWarning', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMTxOutputPowerHiAlarm', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
$pre_cache['timos_oids'] = snmpwalk_cache_multi_oid($device, 'tmnxDDMTxOutputPowerHiWarning', $pre_cache, 'TIMETRA-PORT-MIB', 'timos');
