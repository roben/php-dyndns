<?php

// Warning! cs-fixer needs: "php-cs-fixer.allowRisky": true
return (new PhpCsFixer\Config())
	->setRules(array(
		'@PSR2' => true,
		'full_opening_tag' => false,
		'single_quote' => true,
		'no_whitespace_in_blank_line' => true,
		'single_blank_line_at_eof' => true,
		'is_null' => true,
		'braces' => array(
			'allow_single_line_closure' => true,
			'position_after_functions_and_oop_constructs' => 'same',
		)
	))
	->setIndent("\t")
	->setLineEnding("\n");
