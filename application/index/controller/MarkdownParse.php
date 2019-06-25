<?php

namespace app\index\controller;

use think\Controller;
use Michelf\Markdown;
use Michelf\MarkdownExtra;

class MarkdownParse extends Auth
{
	public function index()
	{
//		return '__PUBLIC__';
		$my_text = file_get_contents('markdown/README.md');
//		$my_html = Markdown::defaultTransform($my_text);
		$my_html = MarkdownExtra::defaultTransform($my_text);
		return $my_html;
	}
}