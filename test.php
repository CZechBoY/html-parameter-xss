<?php
use Nette\Utils\Html;

require_once __DIR__ . '/vendor/autoload.php';

$userInput = '" style="width:100%;height:100%;position:absolute;top:0;left:0" onmousemove="alert(1)"';

$parameterHtml = Html::el()->setText($userInput);
?>

<div data-html="<?php echo $parameterHtml; ?>"></div>
