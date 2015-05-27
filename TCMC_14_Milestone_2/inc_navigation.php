<div id="navigation">
	<p>
    	<ul>
			<li><a <?php if ($_GET[page] == "home" or $_GET[page] == "") {echo 'class="activePage"';}?> href="?page=home">Home</a></li>
			<li><a <?php if ($_GET[page] == "communityNotices") {echo 'class="activePage"';}?> href="?page=communityNotices">Community Notices (Bulletin Board)</a></li>
			<li><a <?php if ($_GET[page] == "events") {echo 'class="activePage"';}?> href="?page=events">Events</a></li>
			<li><a <?php if ($_GET[page] == "membership") {echo 'class="activePage"';}?> href="?page=membership">Membership</a></li>
			<li><a <?php if ($_GET[page] == "musos") {echo 'class="activePage"';}?> href="?page=musos">Musos</a></li>
			<li><a <?php if ($_GET[page] == "sponsors") {echo 'class="activePage"';}?> href="?page=sponsors">Sponsors</a></li>
		</ul>
	</p>
</div>