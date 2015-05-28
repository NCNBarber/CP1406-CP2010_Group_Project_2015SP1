<div id="navigation">
	<p>
    	<ul>
			<li><a <?php if ($_GET[page] == "home" or $_GET[page] == "") {echo 'class="activePage"';} ?> href="index?page=home">Home</a></li>
			<li><a <?php if ($_GET[page] == "communityNotices") {echo 'class="activePage"';} ?> href="?page=addArtists">Add Artists</a></li>
			<li><a <?php if ($_GET[page] == "events") {echo 'class="activePage"';} ?> href="?page=addEvents">Add Events</a></li>
		</ul>
	</p>
</div>