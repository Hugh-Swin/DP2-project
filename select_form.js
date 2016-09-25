var removeButton = document.getElementById('removeButton');
var addButton = document.getElementById('addButton');
var modifyButton = document.getElementById('modifyButton');
var exportButton = document.getElementById('exportButton');


//Create remove form on remove button click
removeButton.onclick = function(){
		clearForms();
		createRemoveForm();
}
modifyButton.onclick = function(){
		clearForms();
		createModifyForm();
}

function createModifyForm(){
var f = document.createElement("form");
f.setAttribute('id',"modifyForm");
f.setAttribute('method',"post");
f.setAttribute('action',"modify_process.php");

var i = document.createElement("input"); //input element, text
i.setAttribute('type',"text");
i.setAttribute('name',"prodid");
i.defaultValue = "Product Id"


var i2 = document.createElement("input"); //input element, text
i2.setAttribute('type',"text");
i2.setAttribute('name',"prodname");
i2.defaultValue = "Product Name"

var i2 = document.createElement("input"); //input element, text
i2.setAttribute('type',"text");
i2.setAttribute('name',"category");
i2.defaultValue = "Category"







var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Modify");

f.appendChild(i);
f.appendChild(i2);
f.appendChild(s);

document.getElementById('currentForm').appendChild(f);
}

function createRemoveForm(){
var f = document.createElement("form");
f.setAttribute('id',"removeForm");
f.setAttribute('method',"post");
f.setAttribute('action',"remove_process.php");

var i = document.createElement("input"); //input element, text
i.setAttribute('type',"text");
i.setAttribute('name',"remove_id");
i.defaultValue = "ProductId"


var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Delete");

f.appendChild(i);
f.appendChild(s);

document.getElementById('currentForm').appendChild(f);
}

/*
function formExists(){
	if(document.getElementById('modifyForm') === null
	&& document.getElementById('removeForm') === null 
	&& document.getElementById('exportForm') === null 
	&& document.getElementById('addForm') === null) {
		return false;
	}else{
		return true;
	}
}*/
function clearForms(){
	document.getElementById('currentForm').innerHTML = "";
}
