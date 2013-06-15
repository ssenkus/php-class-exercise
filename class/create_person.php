<?php
require('class.Person.php');

$title = 'Create User';
$html_top = <<<HTML_TOP
<html>
<head>
<title>$title</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">
<body> 
HTML_TOP;

$html_btm = <<<HTML_BTM
</body>
</html>
HTML_BTM;



// BEGIN HTML CONTENT

echo $html_top;
echo br(1);

$list_people = array(
	'Steven Senkus',
	'Anna Wolansky',
	'Henry Cat',
	'Numnum Cat',
	'Derp Dadoo',
	'John Smith',
	'Bill Black'
					);
echo '<div class="menu-left">';
for ($x = 0; $x < count($list_people); $x++) {
	
	echo make_link($list_people[$x], user_div( content_generate(new_person($list_people[$x])) ));
}
echo '</div>';
echo '<div class="menu-right">';
for ($x = 0; $x < count($list_people); $x++) {
//	echo make_link('link', user_div( content_generate(new_person($list_people[$x])) ));
}
echo '</div>';
echo $html_btm;

// END HTML CONTENT

function make_link($link, $content) {
	echo '<a href="' . $link . '">' . $content . '</a>';

}


function new_person($full_name) {
	list($fname, $lname) = explode(' ', $full_name, 2);
	$obj = strtolower($fname);
	$$obj = new Person("");
	$$obj->setFirstName($fname);
	$$obj->setLastName($lname);
	return $$obj;
}


function content_generate( Person $person) {
	$content = "";
	$content .= $person->getFirstName() . " " . $person->getLastName();
	$content .= br(1);
	$content .= "User ID = " . $person->getID();
	return $content;
}

function user_div( $content) {
	return '<div class="user">' . $content . '</div>';
}

function br($number_of_newlines) {
	for ($x = 1; $x <= $number_of_newlines; $x++) { 
		return nl2br("\n");
	}
}

?>