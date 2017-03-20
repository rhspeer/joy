# Joy
Wordpress CSS April Fools Day pranks.

The combination the included function & css allows code savy pranksters to make a site behave oddly for specific logged in users without distrupting the user experience for unauthenticated or untargeted users.

For example lets say we have a friend named Joe that we know would enjoy a little surprise and logs into one of our sites regularily.  We can add Joe's username to the $arrUsersToPrank array and he'll see a site that spins it's logo, changes color, and is slightly askew.  However, nobody else will so we can all pretend like Joe is crazy until someone breaks out laughing.  Everyone has a good giggle, and tells their friends about what a fun place they work at. 

## Pranks Included:
 1. All fonts to Comic Sans 
 1. Make site black & white
 1. Rotate site just a little (weirder than I expected)
 1. Spin an element back and forth, like the logo
 1. Make hot links hot pink, which makes sense when you think about it
 1. Make elements grow bigly
 1. Trippy changin colors
 1. Hide every other paragraph
 1. Blur the Page
 
 These can be mixed and matched for everyone, and different users can be set to see different pranks.

## IMPORTANT! 
  By using this prank code you are agreeing to the following terms:
  1. Always punch up, only prank respected collegues and those above you in the org chart, no pranking subordinates.
  1. Never prank anyone you don't like
  1. These pranks should not cost anyone money, or damage reputations by exposing the prank to current or potential clients
  1. If you get pranked, laugh louder than anyone else, or at least get over it quickly ;)
  1. Pranks are only funny once, multiple pranks becomes harassement and that's not cool
  1. If someone is a massive jerk about being pranked,
       send them this complete function so they can see where I called them an dumbass.
  1. Know the rules, if in doubt ask the most important person in your office if this is ok,
        and offer to take requests, if the boss thinks it's funny it's all good.
 
   @author rhspeer@gmail.com
     Please send me your funny stories
 
   Credits:
     Started from snippet found here:
        https://wordpress.org/support/topic/create-a-css-class-that-is-specific-to-a-user-role/
 
     Pranks:
        http://slides.com/tholman/css-pranks#/
        http://signaltower.co/april-fools-pranks-for-developers/
        
## Installation: 
  1. Copy and paste code in add_to_themes_functions.php into your active wp theme's functions.php.  It would be better to make a child theme, and if you have that inclination feel free.
  1. Edit the add_joy() function to include the usernames of your favorite coworkers.  For your convienence my usernames are included by default ;)
  1. Test with your own username first, that will help you fine tune the combination of pranks css you'd like to use 
  1. Double check the css path for the joy.css stylesheet
  1. copy joy.css into your theme's css directory
  1. uncomment and comment pranks to get just the right mix for your team
  
  Bonus, you can tailor the experience per user so different people are reporting different issues by taking advantage of the username specific class added to the body tag.
  
  Have fun, and a joyful April Fools Day!
  
