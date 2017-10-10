<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('./db/project.db');
    }
	
	function close()
	{
		$this->close();
	}
	
	function sqlSafeFilter($str)
	{
		for($i=0; $i<strlen($str); $i++)
		{
			if($str[$i] == "'" || $str[$i] == "\"" || $str[$i] == ";")
			{
				$str = substr_replace($str, ' ', $i, 1);
			}
		}
		return $str;
	}
}

?>