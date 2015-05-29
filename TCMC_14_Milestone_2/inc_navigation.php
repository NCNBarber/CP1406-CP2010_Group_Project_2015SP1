<div id="navigation">
	<p>
    	<ul>
			<li><a <?php if ($_GET[page] == "home" or $_GET[page] == "") {echo 'class="activePage"';} ?> href="index.php?page=home">Home</a></li>
			<li><a <?php if ($_GET[page] == "communityNotices") {echo 'class="activePage"';} ?> href="index.php?page=communityNotices">Community Notices (Bulletin Board)</a></li>
			<li><a <?php if ($_GET[page] == "events") {echo 'class="activePage"';} ?> href="index.php?page=events">Events</a></li>
			<li><a <?php if ($_GET[page] == "membership") {echo 'class="activePage"';} ?> href="index.php?page=membership">Membership</a></li>
			<li><a <?php if ($_GET[page] == "musos") {echo 'class="activePage"';} ?> href="index.php?page=musicians">Musicians</a></li>
			<li><a <?php if ($_GET[page] == "aboutUs") {echo 'class="activePage"';} ?> href="index.php?page=aboutUs">About Us</a></li>
            <li><a <?php if ($_GET[page] == "sponsors") {echo 'class="activePage"';} ?> href="index.php?page=sponsors">Sponsors</a></li>
		</ul>
	</p>
</div>