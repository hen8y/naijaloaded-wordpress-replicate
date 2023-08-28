<?php

// This file is part of the Carrington Mobile Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

cfct_form('search');

?>

<noscript>
<br><hr />
<div align="left"><h2 id="pages" class="table-title">Pages</h2></div>
<ul class="disclosure table group footer-top-links">
<li class="page_item page-item-163"><a href="/advertise">Advertise With Us</a></li>
<li class="page_item page-item-86"><a href="/contact-us">Contact Us</a></li>
<li class="page_item page-item-167"><a href="/promote">Promote Music/Video On 180nobs</a></li>
<li class="page_item page-item-392895"><a href="/write-post">Write/Submit A Post To 180nobs</a></li>
</ul>
<hr /></noscript>













<?php

cfct_template_file('footer', 'bottom');

?>
