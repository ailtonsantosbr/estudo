<?php  

/**
*
* @param PDO $db
* @param string $tableName
* @param string[] $fields List of fields names.
* @param array[] $records Two-Demension array of cells (array of rows).
* @return boolean
*
*/

function pgInsertByCopy (PDO $db, $tableName, array $fields, array $records) {
	static $delimiter = "\t", $nullAs = '\\N';

	$rows = [];

	foreach ($records as $record) {
		$record = array_map(function($field) use($record, $delimiter, $nullAs) {
			$value = array_key_exists($field, $record)? $record[$field]: null;

			if (is_null($value)) {
				$value = $nullAs;
			} elseif (is_bool($value)) {
				$value = $value ? 't' : 'f';
			}

			$value = str_replace($delimiter, '', $value);
			
			// Convert multiline text to one line.
			$value = addslashes($value, "\0..\37");

			return $value;
		}, $fields);
		$rows[] = implode($delimiter, $record) . "\n";
	}

	return $db->pgsqlCopyFromArray($tableName, $rows, $delimiter, addslashes($nullAs), implode(',', $fields));
}

?>