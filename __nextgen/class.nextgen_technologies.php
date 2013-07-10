<?php
/*
 * @class
 * @author ozzWANTED
 * @skype ozzWANTED
 * @email nfsmw@freemail.lt
 * @date 2010-06-30
 * @version 1.0
 * FOR SINGLE PRIVATE USE ONLY WITH AUTHOR's PERMISSION !
 */
 class NextGen_Technologies
 {
	private $debug = false;
	private $version = 1.0;
	/*
	 * Constructor
	 */
	function __construct()
	{
		
	}
	
	/*
	 * Destructor
	 */
	function __destruct()
	{
	
	}
 
	/*
	 * Enable debugging
	 */
 	function enable_debug()
	{
		$this->debug = true;
	}
	
	/*
	 * Disable debugging
	 */
	function disable_debug()
	{
		$this->debug = false;
	}
 
 	/*
	 * Transfer
	 */
	public function transfer($what="mod")
	{
		switch($what)
		{
			case "mod" : break;
			case "theme" : break;
			case "file" : break;
			case "update" : break;
		}
	}
	
	/* 
	 * Check CMS
	 */
	public function check_cms()
	{
	
	}
	
	/* 
	 * Import
	 */
	public function import_sql()
	{
	
	}
 }
 
?>