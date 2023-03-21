<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

// if ($age >= 18) {
//     echo "You are old enough to vote";
// } else {

//     echo "Sorry, you are not old enough to vote";
// }


/******* */

$t = date("H");

// echo $t;

// if ($t < 12) {
//     echo "Good morning";
// } elseif ($t < 17) {
//     echo "Good afternoon";
// } else {
//     echo "Good evening";
// }

/**** */
$posts = ['First post'];
// $posts = [];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No posts';
// }

// echo !empty($posts) ? $posts[0] : "No posts";

// $first_post =  !empty($posts) ? $posts[0] : "No posts";
// $first_post =  !empty($posts) ? $posts[0] : null;
$first_post =  $posts[0] ?? null;

// echo $first_post;

/*** */


$fav_color = "blue";

switch ($fav_color) {
    case 'red':
        echo 'Your fav color is red';
        break;
    case 'blue':
        echo 'Your fav color is blue';
        break;
    case 'green':
        echo 'Your fav color is green';
        break;
    default:
        echo 'Your fav color is different';
        break;
}
