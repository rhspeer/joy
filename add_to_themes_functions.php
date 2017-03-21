/*********************************
 *  Happy April Fools Day!
 *
 *  This function adds a user's role & username to the body class once they are logged in.
 *  Then it adds a stylesheet called joy.css with a few choice pranks.
 *  
 *  To Use add it to your theme's functions.php file, the bottom is fine.  Only do this if you have edited this type
 *    of file before.
 *
 *  By using this prank code you are agreeing to the following terms:
 *   1. Always punch up, only prank respected collegues and those above you in the org chart, no pranking subordinates.
 *   2. Never prank anyone you don't like
 *   3. These pranks should not cost anyone money, or damage reputations by exposing the prank to current or potential clients
 *   4. If you get pranked, laugh louder than anyone else, or at least get over it quickly ;)
 *   5. Pranks are only funny once, multiple pranks becomes harassement and that's not cool
 *   6. If someone is a massive jerk about being pranked,
 *      send them this complete function so they can see where I called them an over reacting jerk.
 *   7. Know the rules, if in doubt ask the most important person in your office if this is ok,
 *       and offer to take requests, if the boss thinks it's funny it's all good.
 *
 *  @author rhspeer@gmail.com
 *    Please send me your funny stories of use
 *
 *  Credits:
 *    Started from snippet found here:
 *       https://wordpress.org/support/topic/create-a-css-class-that-is-specific-to-a-user-role/
 *
 *    Pranks:
 *       http://slides.com/tholman/css-pranks#/
 *       http://signaltower.co/april-fools-pranks-for-developers/
 *
 *
 **********************************/
if ( is_user_logged_in() ) {
    add_filter('body_class','add_joy');
    add_filter('admin_body_class','add_joy');
}

function add_joy($classes, $arrUsersToPrank=array('robert', 'rhspeer', 'rspeer')) {
    $current_user = new WP_User(get_current_user_id());
    $user_login = $current_user->user_login;


    // adds joy.css for specific usernames in $arrUsersToPrank in the function arguments
    if(in_array($user_login, $arrUsersToPrank)){
      wp_enqueue_style( 'joy', get_template_directory_uri() . '/css/joy.css', array(), '4.1' );
    }

    // adds user specific class to the body tag for that personal touch
    $classes= array();
    array_push($classes, 'user-'.$user_login);
    return $classes;
}
