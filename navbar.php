<!-- /*! 
 * jquery/html
 * http://dentricedev.com
 *
 * Released under the MIT license.
 Author : Dennis Maina
 Release data : Tuesday 1 ,April 2020
 */
-->
<!-- 
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  +This snippet activates active link dynamically using the window.location +
  + Please make sure that you have a compatible jquery plugin from 1.7+     +
  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */ -->
  <!-- IMPORTANT::::::::::::Include the jquery libray -->
  <!-- using this sample navbar the links are updated dynamically -->
 <ul class="nav">
    <li class="has_sub nav-item">
    <a class="nav-link " href="index.php">
        <i class="fa fa-th-large"></i>
        <p>Home</p>
    </a>
    </li>
    <li class="has_sub nav-item ">
    <a class="nav-link" href="event.php">
    <i class="fa fa-calendar-o"></i>
        <p>About</p>
    </a>
    </li>

    <li class="has_sub nav-item ">
    <a class="nav-link" href="imgpost.php">
    <i class="fa fa-camera"></i>
        <p>Portfolio</p>
    </a>
    </li>



    <li class="has_sub nav-item ">
    <a class="nav-link" href="adverts.php">
    <i class="fa fa-calendar-o"></i>
        <p>Contact us</p>
    </a>
    </li>
</ul>
<script>
// ensure that this snippet is included in all pages where there are nav links
// === following js will activate the menu in left side bar based on url ====
$(document).ready(function() {
    $(".nav li a").each(function() {
        var pageUrl = window.location.href.split(/[?#]/)[0];
        if (this.href == pageUrl) {
            $(this).addClass("active");
            $(this).parent().addClass("active"); // add active to li of the current link
            $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
            $(this).parent().parent().prev().click(); // click the item to make it drop
        }
    });
</script>
