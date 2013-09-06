SA.FAQ = function () {
	this.questions = Array.prototype.slice.call(document.querySelectorAll('#container > ul > li'));
	this.tableOfContents = document.getElementById('toc');
	return this;
};

SA.FAQ.prototype.init = function () {
	this.questions.map(this.addToTableOfContents, this.tableOfContents);
};

SA.FAQ.prototype.addToTableOfContents = function (value) {
	value = value.cloneNode(true);
	var listItem = document.createElement('li');
	listItem.appendChild(value.firstChild);
	this.appendChild(listItem);
};