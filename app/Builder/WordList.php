<?php

namespace App\Builder;

class WordList {

	// Name of the JSON generated in this step
	protected $nameJson = 'word_list.json';

	/** PATH WORD LIST **/
	public function getPathWordList() {

		$pathFileWordList = base_path() . '/data/' . LANGUAGE . '/jsons/' . $this->nameJson;
		return $pathFileWordList;
	}

	/** GET WORD LIST **/
	public function getWordList() {

		// First, we check if the file exists
		$pathFileWordList = base_path() . '/data/' . LANGUAGE . '/jsons/' . $this->nameJson;
		$file = FileManager::getFile($pathFileWordList);

		if (!$file) {
			Log::info('The word list is not generated for ' . LANGUAGE . '. Please generate it first with "php artisan save_word_list ' . $lang . '" command');
		} else {
			return json_decode($file, true);
		}

	}

}