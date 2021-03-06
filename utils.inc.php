<?php
/*****************************************************************************
 *
 *  This file is part of kvmadmin, a php-based KVM virtual machine management
 *  platform.
 *
 *  kvmadmin is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Lesser General Public License (LGPL)
 *  as published by the Free Software Foundation, either version 3 of 
 *  the License, or (at your option) any later version.
 *
 *  kvmadmin is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU Lesser General Public License
 *  along with kvmadmin.  If not, see <http://www.gnu.org/licenses/>.
 *  @license GNU Lesser General Public License
 *
 *  CopyRight 2010-2012 QIU Jian (sordqiu@gmail.com)
 *
 ****************************************************************************/
?>
<?php

function logvmevent($db, $hostid, $guestname, $event) {
	$sql = "insert into vm_log_tbl(host_id, vc_name, vc_user, dt_when, notes) values({$hostid}, '{$guestname}', '{$_SESSION['_user']}', NOW(), '{$event}')";
	_log($sql);
	if($db->query($sql)) {
		return TRUE;
	}else {
		_log($sql);
		return FALSE;
	}
}


?>
