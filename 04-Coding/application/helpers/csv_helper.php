<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

if (!function_exists('array_to_csv')) {

	function array_to_csv($array, $download = '') {
		if ($download != '') {
			header('Content-Encoding: UTF-8');
			header('Content-Description: File Transfer');
			header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
			header('Content-Disposition: attachement; filename="' . $download . '"');
			header('Content-Transfer-Encoding: UTF-8');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
		}

		ob_start();
		$f = fopen('php://output', 'w') or show_error("Can't open php://output");
		$n = 0;
		foreach ($array as $line) {
			$n++;
			if (!fputcsv($f, $line)) {
				show_error("Can't write line $n: $line");
			}
		}
		fclose($f) or show_error("Can't close php://output");
		$str = ob_get_contents();
		ob_end_clean();

		if ($download == '') {
			return $str;
		} else {
			echo $str;
		}
	}

}

if (!function_exists('query_to_csv')) {

	function query_to_csv($query, $headers = TRUE, $download = '') {
		if (!is_object($query) OR ! method_exists($query, 'list_fields')) {
			show_error('invalid query');
		}

		$array = array();

		if ($headers) {
			$line = array();
			foreach ($query->list_fields() as $name) {
				$line[] = $name;
			}
			$array[] = $line;
		}

		foreach ($query->result_array() as $row) {
			$line = array();
			foreach ($row as $item) {
				$line[] = $item;
			}
			$array[] = $line;
		}

		echo array_to_csv($array, $download);
	}

}

/* End of file csv_helper.php */
/* Location: ./application/helpers/csv_helper.php */