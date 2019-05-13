<?php
/* Config */

use Krinkle\Intuition\Intuition;

require_once 'demoBase.php';

/* Demonstration */

// 1) Init
$I18N = new Intuition( 'demo' );

// 2) Use language names

// - Current language name
echo $I18N->getLangName();

// - Specific language name
echo '<br/>' . $I18N->getLangName( 'fr' );

/* View source */
closeDemo( __FILE__ );
