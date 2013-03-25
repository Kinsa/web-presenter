<?php
class ImageList {
	public function buildImageList($theFolder) {
		// Execute code if the folder can be opened, or fail silently
		if ($contents = @ scandir($theFolder)) {
			// initialize an array for matching files
			$found = array();
			// Create an array of file types
			$fileTypes = array('jpg','jpeg','gif','png');
			// Traverse the folder, and add filename to $found array if type matches
			foreach ($contents as $item) {
				$fileInfo = pathinfo($item);
				if (array_key_exists('extension', $fileInfo) && in_array($fileInfo['extension'],$fileTypes)) {
					$found[] = $item;
				}
			}
		
			return $found;
		}
	}
}