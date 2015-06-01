function adjustColumnHeights() {
	var leftSidebar = document.getElementById("leftSidebar");
	var contentContainer = document.getElementById("adminContentContainer");
	var leftSidebarHeight = leftSidebar.offsetHeight;
	var contentContainerHeight = contentContainer.offsetHeight;
	var extraPadding = 0;

	if (leftSidebarHeight > contentContainerHeight) {
		contentContainer.style.height = (leftSidebarHeight - extraPadding) + "px";
	}
	else {
    		leftSidebar.style.height = (contentContainerHeight - extraPadding) + "px";
	}
}

function addLoadListener(fn) {
	if (typeof window.addEventListener != 'undefined') {
		window.addEventListener('load', fn, false);
	}
	else if (typeof document.addEventListener != 'undefined') {
		document.addEventListener('load', fn, false);
	}
	else if (typeof window.attachEvent != 'undefined') {
		window.attachEvent('onload', fn);
	}
	else {
		var oldfn = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = fn;
		}
		else {
			window.onload = function()
		{
	oldfn();
	fn();
	};
	}
	}
}

addLoadListener(adjustColumnHeights);