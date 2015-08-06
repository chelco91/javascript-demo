/**
 * A general find and replace function
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
	// grab text to manipulate
	var textArray = document.getElementById("demoText").innerHTML;

	// separate textArray into words using blankspace delimiter
	var newTextArray = textArray.split(' ');

	// grab how many words are in the array
	var len = newTextArray.length;

	// loop through the text mixing words randomly
	var i = len;
	while (i--) {
		var p = parseInt(Math.random()*len);
		var t = newTextArray[i];
		newTextArray[i] = newTextArray[p];
		newTextArray[p] = t;
	}

	// place edited text back into the page
	document.getElementById("demoText").innerHTML = newTextArray;
}