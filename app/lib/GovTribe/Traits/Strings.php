<?php namespace GovTribe\Traits;

trait Strings
{
	/**
	 * Clean dirty HTML.
	 *
	 * @param  string
	 * @return string
	 */
	public function cleanDirtyHTML($string) 
	{
		mb_regex_encoding('UTF-8');

		// Strip some common MS Office tags
		$string = preg_replace('(mso-[a-z\-: ]+; )i', '', $string);

		// Remove all html tags except 'p' and 'br'
		$string = strip_tags($string, '<p><br>');

		// Normalize newlines
		$string = preg_replace('/(\r\n|\r|\n)+/', "\n", $string);

		// Replace whitespace characters with a single space
		$string = preg_replace('/\s+/', ' ', $string);

		// Trim trailing, leading spaces
		$string = trim($string);

		return $string;
	}

}