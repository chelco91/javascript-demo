/**
 * changes the background color when moused over
 **/
function findAndReplace() {
	// grab find value from input tag
	var find = document.getElementById("find").value;

	// grab replace value from input tag
	var replace = document.getElementById("replace").value;

	// grab text from p tag
	var text = document.getElementById("demoText").innerHTML;

	// perform find and replace operation on text
	var newText = text.replace(find, replace);

	// place edited text back into the page
	document.getElementById("demoText").innerHTML = newText;
}

/**
 * changes around the order of words
 **/
function arrayShuffle() {
	var textArray = document.getElementById("demoText").innerHTML;

	var newTextArray = textArray.split(' ');

	var len = newTextArray.length;
	var i = len;
	while (i--) {
		var p = parseInt(Math.random()*len);
		var t = newTextArray[i];
		newTextArray[i] = newTextArray[p];
		newTextArray[p] = t;
	}

	document.getElementById("demoText").innerHTML = newTextArray;
};




























function rot13() {
	// grab text from p tag
	var text = document.getElementById("demoText").innerHTML;

	// perform rot13 operation on text
	var newText = (text + '').replace(/[a-z]/gi, function(s) {
		String.fromCharCode(s.charCodeAt(0) + (s.toLowerCase() < 'n' ? 13 : -13));
	});

	// place edited text back into the page
	document.getElementById("demoText").innerHTML = newText;
}

function str_rot13() {
	var text = document.getElementById("demoText").innerHTML;
	var finalText = (text + '').replace(/[a-z]/gi, function(s) {
			return String.fromCharCode(s.charCodeAt(0) + (s.toLowerCase() < 'n' ? 13 : -13));
		});
	document.getElementById("demoText").innerHTML = finalText;
}