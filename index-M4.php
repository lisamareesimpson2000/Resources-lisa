<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes Module 4</title>
</head>
<body>


    <h1>php</h1>

    <h2>php function</h2>
    <?php
    function sayHi(){
        echo "Hi, everyone";
    }
    /*will only display if function is called, can do this more than once*/
    sayHi(); 
    sayHi();
    ?>

    <h3>php passing arguments through a function</h3>
    <?php
   /*arguments are basically user defined variables, $num */
    function ($num1, $num2){
        return $num1 + $num2;
    }
    echo "<h4> The sum 20 plus 30 is" . add(20, 30) . "</h4>";
    ?>

    <!-- require means that if something is broken in your code it must work to display everything on url.
    require will produce a fatal error (E_COMPILE_ERROR) and stop the script -->
    <?php require "header.php;"?>
    <h4>Page 1</h4>
    <!-- include means if something is broken is will show come of the code that is working on the url. 
    include will only produce a warning (E_WARNING) and the script will continue-->
    <?php include "header.php;"?>
    <h4>Page 1</h4>
    <!-- Use require when the file is required by the application.
    Use include when the file is not required and application should continue when file is not found. 
    We have been using require for devlopment-->

    <h1>Wordpress</h1>

    <p>
        WORDPRESS LINKS
https://en-nz.wordpress.org/download/
http://localhost:8888/phpMyAdmin/server_databases.php?server=1
http://localhost:8888/wp-TFS-F1/wp-admin/
<!-- To search for syntax -->
https://codex.wordpress.org/Function_Reference
http://localhost:8888/phpMyAdmin/server_databases.php?server=1

<!-- from youtube -->
local.getflywheel.com

To bring the database table created elsewhere to the class, 
while in phpmyadmin, click on the database created on the left panel 
and look for export on the right panel top  row of menus. Click on export 
and go button. go to downloads folder, copy whatever.sql  and bring it to the class.
    </p>
<?php have_posts(); ?>
This function checks to see if the current WordPress query has any results to loop pver. 
Boolean function true or false.

the_post()
iterate the post index in the loop.

<h1>Customising Themes</h1>
<h2>8th May 2019</h2>
<p>
    - We will be using some form of CMS for a website
    - creating a theme to handle clients changes
    - build content where it actually gethostbyaddr
    100% needed (
    - screenshot.png IMPORTANT
    - style.css IMPORTANT
    - index.php IMPORTANT )

    - turn on things that are only going to be used.
    - always refer to wordpress doucmentation -it's all in there somewhere just have to read it.
    - require - copy and paste file
    - we need to add style it might look different
    - everything is going off index. When creating
    - wp_head wp_footer in index

    Ideas for creating new theme
    - Do UX process - process sketches, wireframes, testing, mockups
    - Code in html and css - plain text with dummy info
    - Have design ready
    - to copy paste edit into CMS wordpress (changing classes as needed)
    - sometimes there may not be time for this when working for a client

    - When handing in theme - Don't style classes like postid-14 or anything with ids it will break 
    when the user trys to use it on their side.
    - Commercial, put up a theme which people could buy. Submit for review. Have to follow thier guidelines.
    
    Posts - could be a post, a page, a image. Php thinks lots of things are posts. Everything is considered a post.

    - Wordpress function - search first, cause it might be in the the codex docs
    - Versions - check versions. Wordpress is regulary updating. Keep up to date with, be in the know. including bootstrap cdns etc.
    - Don't expect it to work perfect yet when there's no front end style.
    - wrap something aroung the content <div>
    - stylesheet - css
    - functions 
    enqueued - add styles to appropriate queue. Every queue has a number.
    - action
    - index needs to be the  most detailed. Default. Everything renders to index.
    - hard refresh - shift click on refresh browser button to reload the page. If for example the colours aren't updating.. need to refresh the cache.
    - Went the site goes live - (array(), '0.1'); changing the version number, change this to 0.2 to change the version number.
    - Ordering is important like normal css + js + bootstrap. wp_enqueue_script wp_enqueue_style
    - exagerate when naming the function. 
        function()
        what to add into the function
        add_action
    - Bootstrap 4 won't style the <a> in wordpress so be aware when creating nav as it won't work. Bootstrap for on the other hand will because it styles the <li>
    - Always add custom style or classes. Don't grab any class or ID with a number. 
    - LINKS github - WP Bootstrap - wp-bootstrap-navwalker
    - Writing everything on the index - you can but it's not a good idea. Make it look pretty enough because it is the default so just incase
</p>
<p>
Template hierarchy
    - what to render and when. Use the flowchart printed
    - guttenburg
    - Stuff is a blogging site. -images for posts
</p>
<p>
    the_excerpt(); - cuts down on content [...]

    Post formats
    -Stuff is a good example of different looking post
    - seperating out files so it's not on giant if else statement
    - featured image - should allow user on all posts all in if statement just incase.
    - decide on completely different files or group video content all together.post
    - 3 different pages 
    - static page
    - page.php
    - making it easier for clients when they make pages.page
    - we can't gaureentee user will create user will create page-contact.php or page-9.php - ot won't work
    - $custom.php -wild card it css
    -refreshing - change enqeue to '0.2' in array or hard refresh.css
    - Templates would be eg. map or one column, full width, events page
    - post(not posts), page
</p>
<p>
    Widgets:
    -turn on sidebar 
    -Notes: widgets do not have style, make sure we add our own styles
    - first turn it on to work
    - "name" => __('mainsidebar', 'themeslug'
        is style.css so it only works for this theme
    -learning to remove default widget. Function reference/unregister widget
    - some options could look like .. left side bar, right side bar, page that has both. Add remove widgets
</p>
<p>
    Wordpress from scratch
    - wordpress.org
    - phpmyadmin - front end database (all pages and posts are stored here)
    - when putting LIVE don't use root root password.
    -login lisamaree, password: password
    - Theme Handbook, read through theme basics of handbook.
    - index.php if have posts loops
</p>
<p>
    Register Post type
    - create events in dashboard.
    - be careful with naming things + files singular event instead of events.
    - another way of writing a string -x()

    Hieracacial supports
    - post types could be - staff, portfolio, products (there's a plugin called woocommerce for this)
    - Always looking for the loop with posts pages - have to make our own loop for events

    - WP_Query - give me events. - Theres lots you can do with wp_query. - is very useful for custom post types.
    Properties - defaults that properties variables can work in a loop
    - read what we can get out of the database
    - can order by - events by file etc Task get by alphabetical order
    - Remember to view events page (in pages) preview is document link or change events in the slug url.order
    - Could have portfolio -> categorie portfolio intl_get_error_message


</p>
<p>
    Theme customization 
    style, layout, visual things we can see.
    var_dump() like a console.log
    use die(); makes screen go white if it's working. 
    Need these 3 things:
    Section
    Setting
    Control
    -transport or post message (to change with javascript) dynamically
    - for image placement, can add grid hard coded

</p>
<p>
22 May 2019 
learning add_meta_box
- has to be a post - parameters - $id, $title, $callback
global $metaboxes (you have to say global before being able to call)
https://codex.wordpress.org/Plugin_API/Action_Reference
keep adding
</p>

</body>
</html>
