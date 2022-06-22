function navbar() {
	const navHover2 = () => {
    	const button1 = document.querySelector(".logiciels");
    	const button2 = document.querySelector(".materiels");
    	const button3 = document.querySelector(".templates");
    	const mode = document.querySelector(".mode");
    	const sublinks1 = document.querySelector(".sublinks1");
    	const sublinks2 = document.querySelector(".sublinks2");
    	const sublinks3 = document.querySelector(".sublinks3");
    	const arrow1 = document.querySelector(".a1");
    	const arrow2 = document.querySelector(".a2");
    	const arrow3 = document.querySelector(".a3");

    button1.addEventListener("click", () => {
    	sublinks1.classList.toggle("open");
    	button1.classList.toggle("selected");
      	//animation
    	arrow1.classList.toggle("down");

    	if (button2.classList.contains("selected")) {
    		button2.className = button1.className.replace("selected", "");
    		sublinks2.className = sublinks1.className.replace("open", "");
    		arrow2.className = arrow1.className.replace("down", "");
    	}

    	if (button3.classList.contains("selected")) {
        	button3.className = button1.className.replace("selected", "");
        	sublinks3.className = sublinks1.className.replace("open", "");
        	arrow3.className = arrow1.className.replace("down", "");
    	}
    });

    button2.addEventListener("click", () => {
    	sublinks2.classList.toggle("open");
    	button2.classList.toggle("selected");
    	//animation
    	arrow2.classList.toggle("down");

		if (button1.classList.contains("selected")) {
        	button1.className = button1.className.replace("selected", "");
        	sublinks1.className = sublinks1.className.replace("open", "");
        	arrow1.className = arrow1.className.replace("down", "");
    	}

    	if (button3.classList.contains("selected")) {
    		button3.className = button1.className.replace("selected", "");
        	sublinks3.className = sublinks1.className.replace("open", "");
        	arrow3.className = arrow1.className.replace("down", "");
    	}
    });

    button3.addEventListener("click", () => {
    	sublinks3.classList.toggle("open");
    	button3.classList.toggle("selected");
    	//animation
    	arrow3.classList.toggle("down");

    	if (button1.classList.contains("selected")) {
        	button1.className = button1.className.replace("selected", "");
        	sublinks1.className = sublinks1.className.replace("open", "");
        	arrow1.className = arrow1.className.replace("down", "");
    	}

    	if (button2.classList.contains("selected")) {
        	button2.className = button1.className.replace("selected", "");
        	sublinks2.className = sublinks1.className.replace("open", "");
        	arrow2.className = arrow1.className.replace("down", "");
    	}
    });
};
navHover2();
}

navbar();
