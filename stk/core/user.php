<?php

/**
 * STK User class
 *
 * Suppor toolkit user class that extends the phpBB core user class.
 */
class stk_core_user extends user
{
	/**
	 * Add Language Items - use_db and use_help are assigned where needed (only use them to force inclusion)
	 *
	 * @param mixed $lang_file specifies the language entries to include
	 * @param mixed $force_lang when set to a language iso code this language is used, otherwise
	 *                          the users default language will be used.
	 * @param bool $use_db internal variable for recursion, do not use
	 * @param bool $use_help internal variable for recursion, do not use
	 * @param string $ext_name The extension to load language from, or empty for core files
	 */
	function stk_add_lang($lang_file, $force_lang = false, $use_db = false, $use_help = false, $ext_name = '')
	{
		global $config;

		// Internally cache some data
		static $lang_data	= array();
		static $lang_dirs	= array();

		// Store current phpBB data
		if (empty($lang_data))
		{
			$lang_data = array(
				'lang_path'	=> $this->lang_path,
				'lang_name'	=> $this->lang_name,
			);
		}

		// Find out what languages we could use
		if (empty($lang_dirs))
		{
			$lang_dirs = array(
				$this->data['user_lang'],			// User default
				basename($config['default_lang']),	// Board default
				'en',								// System default
			);

			// Only unique dirs
			$lang_dirs = array_unique($lang_dirs);
		}

		// Empty the lang_name
		$this->lang_name = '';

		// Switch to the STK language dir
		$this->lang_path = STK_ROOT . 'language/';

		// Test all languages
		foreach ($lang_dirs as $dir)
		{
			// When forced skip all others
			if ($force_lang !== false && $dir != $force_lang)
			{
				continue;
			}

			if (file_exists($this->lang_path . $dir . "/{$lang_file}.php"))
			{
				$this->lang_name = $dir;
				break;
			}
		}

		// No language file :/
		if (empty($this->lang_name))
		{
			trigger_error("Language file: {$lang_file}.php" . ' missing!', E_USER_ERROR);
		}

		// Add the file
		parent::add_lang($lang_file, $use_db, $use_help, $ext_name);

		// Now reset the paths so phpBB can continue to operate as usual
		$this->lang_path = $lang_data['lang_path'];
		$this->lang_name = $lang_data['lang_name'];
	}
}
