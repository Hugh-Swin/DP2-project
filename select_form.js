var removeButton = document.getElementById('removeButton');
var addButton = document.getElementById('addButton');
var modifyButton = document.getElementById('modifyButton');
var exportButton = document.getElementById('exportButton');
var predictSingleButton = document.getElementById('predictSingleButton');
var popularItemsButton = document.getElementById('popularItemsButton');
var popularGroupButton = document.getElementById('popularGroupButton');
var predictGroupButton = document.getElementById('predictGroupButton');

//Create remove form on remove button click
removeButton.onclick = function(){
		clearForms();
		createRemoveForm();
}

popularItemsButton.onclick = function(){
		clearForms();
		createPopularItemsForm();
}

predictSingleButton.onclick = function(){
		clearForms();
		createPredictSingleForm();
}

modifyButton.onclick = function(){
		clearForms();
		createModifyForm();
}

addButton.onclick = function(){
		clearForms();
		createAddForm();
}

exportButton.onclick = function(){
	location.href = "./export_as_csv.php";
}

popularGroupButton.onclick = function(){
		clearForms();
		createPopularGroupForm();
}

predictGroupButton.onclick = function(){
		clearForms();
		createPredictGroupForm();
}

function createAddForm(){
var f = document.createElement("form");
f.setAttribute('id',"addForm");
f.setAttribute('method',"post");
f.setAttribute('action',"add_process.php");

var i2 = document.createElement("input"); //input element, text
i2.setAttribute('type',"text");
i2.setAttribute('name',"prodname");
i2.defaultValue = "Product Name"

var i3 = document.createElement("input"); //input element, text
i3.setAttribute('type',"text");
i3.setAttribute('name',"category");
i3.defaultValue = "Category"

var i4 = document.createElement("input"); //input element, text
i4.setAttribute('type',"text");
i4.setAttribute('name',"price");
i4.defaultValue = "Price"

var i5 = document.createElement("input"); //input element, text
i5.setAttribute('type',"text");
i5.setAttribute('name',"qtyremaining");
i5.defaultValue = "Qty Remaining"

var i6 = document.createElement("input"); //input element, text
i6.setAttribute('type',"text");
i6.setAttribute('name',"qtysold");
i6.defaultValue = "Qty Sold"

var i7 = document.createElement("input"); //input element, text
i7.setAttribute('type',"text");
i7.setAttribute('name',"month");
i7.defaultValue = "Month"

var i8 = document.createElement("input"); //input element, text
i8.setAttribute('type',"text");
i8.setAttribute('name',"week");
i8.defaultValue = "Week"

var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Add");

f.appendChild(i2);
f.appendChild(i3);
f.appendChild(i4);
f.appendChild(i5);
f.appendChild(i6);
f.appendChild(i7);
f.appendChild(i8);

f.appendChild(s);

document.getElementById('currentForm').appendChild(f);
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

var i3 = document.createElement("input"); //input element, text
i3.setAttribute('type',"text");
i3.setAttribute('name',"category");
i3.defaultValue = "Category"

var i4 = document.createElement("input"); //input element, text
i4.setAttribute('type',"text");
i4.setAttribute('name',"price");
i4.defaultValue = "Price"

var i5 = document.createElement("input"); //input element, text
i5.setAttribute('type',"text");
i5.setAttribute('name',"qtyremaining");
i5.defaultValue = "Qty Remaining"

var i6 = document.createElement("input"); //input element, text
i6.setAttribute('type',"text");
i6.setAttribute('name',"qtysold");
i6.defaultValue = "Qty Sold"

var i7 = document.createElement("input"); //input element, text
i7.setAttribute('type',"text");
i7.setAttribute('name',"month");
i7.defaultValue = "Month"

var i8 = document.createElement("input"); //input element, text
i8.setAttribute('type',"text");
i8.setAttribute('name',"week");
i8.defaultValue = "Week"

var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Modify");

f.appendChild(i);
f.appendChild(i2);
f.appendChild(i3);
f.appendChild(i4);
f.appendChild(i5);
f.appendChild(i6);
f.appendChild(i7);
f.appendChild(i8);

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
i.defaultValue = "Product Id"


var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Delete");

f.appendChild(i);
f.appendChild(s);

document.getElementById('currentForm').appendChild(f);
}

function createPopularItemsForm(){
var f = document.createElement("form");
f.setAttribute('id',"popularItemsForm");
f.setAttribute('method',"post");
f.setAttribute('action', "");

var i = document.createElement("input"); //input element, text
i.setAttribute('type',"text");
i.setAttribute('name',"popularItem");
i.setAttribute('id',"popularItem");
i.defaultValue = "All"

var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Get Popularity");

f.appendChild(i);
f.appendChild(s);

document.getElementById('currentForm').appendChild(f);
}

function createPopularGroupForm(){
var f = document.createElement("form");
f.setAttribute('id',"popularGroupForm");
f.setAttribute('method',"post");
f.setAttribute('action', "");

var i = document.createElement("input"); //input element, text
i.setAttribute('type',"text");
i.setAttribute('name',"popularGroup");
i.setAttribute('id',"popularGroup");
i.defaultValue = "All"

var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Get Category Popularity");

f.appendChild(i);
f.appendChild(s);

document.getElementById('currentForm').appendChild(f);
}

function createPredictGroupForm(){
var f = document.createElement("form");
f.setAttribute('id',"predictGroupForm");
f.setAttribute('method',"post");
f.setAttribute('action', "");

var i = document.createElement("input"); //input element, text
i.setAttribute('type',"text");
i.setAttribute('name',"predictGroup");
i.setAttribute('id',"predictGroup");
i.defaultValue = "All"

var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Predict Category Sales");

f.appendChild(i);
f.appendChild(s);

document.getElementById('currentForm').appendChild(f);
}

function createPredictSingleForm(){
var f = document.createElement("form");
f.setAttribute('id',"predictSingleForm");
f.setAttribute('method',"post");
f.setAttribute('action',"predict_single_monthly_sales.php");

var i = document.createElement("input"); //input element, text
i.setAttribute('type',"text");
i.setAttribute('name',"prodname");
i.defaultValue = "Product Name"

var s = document.createElement("input"); //input element, Submit button
s.setAttribute('type',"submit");
s.setAttribute('value',"Predict");

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
