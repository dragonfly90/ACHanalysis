<?php
/* ////////////////////////////////////////////////////////////////////////////////
**    Copyright 2010 Matthew Burton, http://matthewburton.org
**    Code by Burton and Joshua Knowles, http://auscillate.com 
**
**    This software is part of the Open Source ACH Project (ACH). You'll find 
**    all current information about project contributors, installation, updates, 
**    bugs and more at http://competinghypotheses.org.
**
**
**    ACH is free software: you can redistribute it and/or modify
**    it under the terms of the GNU General Public License as published by
**    the Free Software Foundation, either version 3 of the License, or
**    (at your option) any later version.
**
**    ACH is distributed in the hope that it will be useful,
**    but WITHOUT ANY WARRANTY; without even the implied warranty of
**    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
**    GNU General Public License for more details.
**
**    You should have received a copy of the GNU General Public License
**    along with Open Source ACH. If not, see <http://www.gnu.org/licenses/>.
//////////////////////////////////////////////////////////////////////////////// */



class Comment extends FrameworkDatabase {



	public $database_table_name = "comments"; // This is the table that this class interacts with.
	public $insert_fields_to_ignore = array("created"); // These are tables fields that will be IGNORED when inserts happen.
	
	

}



?>