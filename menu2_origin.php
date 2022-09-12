﻿<nav>
	<ul>
		<li><a href="home.html">Home</a></li>
		<li>
			<a href="products.html">Products <span class="caret"></span></a>
			<div>
				<ul>
					<li><a href="products.html#chair">Chair</a></li>
					<li><a href="products.html#table">Table</a></li>
					<li><a href="cooker.html">Cooker</a></li>
				</ul>
			</div>
		</li>
		<li><a href="about.html">About</a></li>
		<li><a href="help.html">Help</a></li>
	</ul>
</nav>
<?php 
   $nav_background_color="#EBE8E4;"; // #EBE8E4;
   $nav_font_size="15px;"; // #EBE8E4;
   $menu_link_hover_color="aqua;"; // rgb( 255, 255, 255 ); rgb( 40, 44, 47 )
   $sub_menu_background_color="rgb( 40, 44, 47 );"; // rgb( 40, 44, 47 );
   $menu_background_color="green;"; // rgb( 40, 44, 47 );
   $menu_text_color_hover="aqua"; // rgb( 255, 255, 255 );
   $sub_menu_text_color="yellow;"; // #fff;
   $sub_menu_background_color_hover="rgba( 255, 255, 255, 0.2);"; //rgba( 255, 255, 255, 0.1);
   $sub_menu_text_color_hover="white;";
   $submenu_width="165px;";
   $menu_height="35px;"; // 56px;
echo '
<STYLE>
nav {
  background-color: '.$nav_background_color.'
  border: 1px solid #dedede;
  border-radius: 4px;
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
  color: #888;
  display: block;
  margin: 0px 0px 0px 0px;
  overflow: hidden;
  width: 99%;
  font-size: '.$nav_font_size.'
  font-weight: 300;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
}

  nav ul {
    margin: 0;
    padding: 0;
  }

    nav ul li {
      display: inline-block;
      list-style-type: none;
      
      -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -ms-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s; 
    }
      
      nav > ul > li > a > .caret {
        border-top: 4px solid #aaa;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
        content: "";
        display: inline-block;
        height: 0;
        width: 0;
        vertical-align: middle;
  
        -webkit-transition: color 0.1s linear;
     	  -moz-transition: color 0.1s linear;
       	-o-transition: color 0.1s linear;
          transition: color 0.1s linear; 
      }

      nav > ul > li > a {
        color: #aaa;
        display: block;
        line-height: '.$menu_height.'
        padding: 0 24px;
        text-decoration: none;
      }

        nav > ul > li:hover {
          background-color: '.$menu_background_color.'
        }

        nav > ul > li:hover > a {
          color: '.$menu_text_color_hover.'
        }

        nav > ul > li:hover > a > .caret {
          border-top-color: rgb( 255, 255, 255 );
        }
      
      nav > ul > li > div {
        background-color: '.$sub_menu_background_color.'
        border-top: 0;
        border-radius: 0 0 4px 4px;
        box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.055);
        display: none;
        margin: 0;
        opacity: 0;
        position: absolute;
        width: '.$submenu_width.'
	visibility: hidden;
	z-index: 100;
  
        -webkit-transiton: opacity 0.2s;
        -moz-transition: opacity 0.2s;
        -ms-transition: opacity 0.2s;
        -o-transition: opacity 0.2s;
        -transition: opacity 0.2s;
      }

        nav > ul > li:hover > div {
          display: block;
          opacity: 1;
          visibility: visible;
        }

          nav > ul > li > div ul > li {
            display: block;
          }

            nav > ul > li > div ul > li > a {
              color: '.$sub_menu_text_color.'
              display: block;
              padding: 12px 24px;
              text-decoration: none;
            }

              nav > ul > li > div ul > li:hover > a {
                background-color: '.$sub_menu_background_color_hover.'
				color: '.$sub_menu_text_color_hover.'
              }
  
</STYLE>
';
?>