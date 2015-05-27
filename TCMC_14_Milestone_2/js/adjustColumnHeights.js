function adjustColumnHeights() {
	var leftSidebar = document.getElementById("leftSidebar");
	var contentContainer = document.getElementById("contentContainer");
	var rightSidebar = document.getElementById("rightSidebar");
	var leftSidebarHeight = leftSidebar.offsetHeight;
	var contentContainerHeight = contentContainer.offsetHeight;
	var rightSidebarHeight = rightSidebar.offsetHeight;

	if (leftSidebarHeight > contentContainerHeight && leftSidebarHeight > rightSidebarHeight) {
		contentContainer.style.height = leftSidebarHeight + "px";
		rightSidebar.style.height = leftSidebarHeight + "px";
	}
	else if (contentContainerHeight > leftSidebarHeight && contentContainerHeight > rightSidebarHeight) {
    		leftSidebar.style.height = contentContainerHeight + "px";
    		rightSidebar.style.height = contentContainerHeight + "px";
	}
	else {
		leftSidebar.style.height = rightSidebarHeight + "px";
		contentContainer.style.height = rightSidebarHeight + "px";
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