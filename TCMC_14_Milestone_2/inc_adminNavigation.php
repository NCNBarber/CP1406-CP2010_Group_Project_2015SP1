<div id="navigation">
	<p>
    	<ul>
			<li><a <?php if ($_GET[page] == "home" or $_GET[page] == "") {echo 'class="activePage"';} ?> href="administration.php?page=account">Account</a></li>
			<li><a <?php if ($_GET[page] == "addArtists") {echo 'class="activePage"';} ?> href="administration.php?page=addArtists">Add Artists</a></li>
			<li><a <?php if ($_GET[page] == "addEvents") {echo 'class="activePage"';} ?> href="administration.php?page=addEvents">Add Events</a></li>
		</ul>
	</p>
</div>