var NavButtonEnum = {
	MY_PETS: "myPets", CODEX: "codex"
};

var gotoMyPets = function(){
	stopTabSpecificScripts();
	selectedNav = NavButtonEnum.MY_PETS;
	
	document.getElementById("mainBody").innerHTML = myPetsTabHTML;
	myPetsTabScriptBegin();
	setTheme();
};

var gotoCodex = function(){
	stopTabSpecificScripts();
	selectedNav = NavButtonEnum.CODEX;
	
	document.getElementById("mainBody").innerHTML = codexTabHTML;
	codexTabScriptBegin();
	setTheme();
};

var stopTabSpecificScripts = function(){
	switch(selectedNav){
		case NavButtonEnum.MY_PETS:
			myPetsTabScriptEnd();
			break;
		case NavButtonEnum.CODEX:
			codexTabScriptEnd();
			break;
		default: break;
	}
};