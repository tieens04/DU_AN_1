var album = [];
for (var i = 0; i < 10; i++) {
	album[i] = new Image();
	album[i].src = "view/img/banners/banner" + i + ".png";//(i=0?"gif":"png")
}
var interval = setInterval(slideshow, 2000);
index = 0;
function slideshow() {
	index++;
	if (index > 9) {
		index = 1;
	}
	document.getElementById("banner").src = album[index].src;
}

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}

// Get the button:
let mybutton = document.getElementById("goto-top-page");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // For Safari
	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

(function () {
	//Login/Signup modal window - by CodyHouse.co
	function ModalSignin(element) {
		this.element = element;
		this.blocks = this.element.getElementsByClassName('js-signin-modal-block');
		this.switchers = this.element.getElementsByTagName('a');
		this.triggers = document.getElementsByClassName('js-signin-modal-trigger');
		this.hidePassword = this.element.getElementsByClassName('js-hide-password');
		this.init();
	};

	ModalSignin.prototype.init = function () {
		var self = this;
		//open modal/switch form
		for (var i = 0; i < this.triggers.length; i++) {
			(function (i) {
				self.triggers[i].addEventListener('click', function (event) {
					if (event.target.hasAttribute('data-signin')) {
						event.preventDefault();
						self.showSigninForm(event.target.getAttribute('data-signin'));
					}
				});
			})(i);
		}

		//close modal
		this.element.addEventListener('click', function (event) {
			if (hasClass(event.target, 'js-signin-modal') || hasClass(event.target, 'js-close')) {
				event.preventDefault();
				removeClass(self.element, 'cd-signin-modal--is-visible');
			}
		});
		//close modal when clicking the esc keyboard button
		// document.addEventListener('keydown', function(event){
		// 	(event.which=='27') && removeClass(self.element, 'cd-signin-modal--is-visible');
		// });

		//hide/show password
		for (var i = 0; i < this.hidePassword.length; i++) {
			(function (i) {
				self.hidePassword[i].addEventListener('click', function (event) {
					self.togglePassword(self.hidePassword[i]);
				});
			})(i);
		}

		
	};

	ModalSignin.prototype.togglePassword = function (target) {
		var password = target.previousElementSibling;
		('password' == password.getAttribute('type')) ? password.setAttribute('type', 'text') : password.setAttribute('type', 'password');
		target.textContent = ('Hide' == target.textContent) ? 'Show' : 'Hide';
		putCursorAtEnd(password);
	}

	ModalSignin.prototype.showSigninForm = function (type) {
		// show modal if not visible
		!hasClass(this.element, 'cd-signin-modal--is-visible') && addClass(this.element, 'cd-signin-modal--is-visible');
		// show selected form
		for (var i = 0; i < this.blocks.length; i++) {
			this.blocks[i].getAttribute('data-type') == type ? addClass(this.blocks[i], 'cd-signin-modal__block--is-selected') : removeClass(this.blocks[i], 'cd-signin-modal__block--is-selected');
		}
		//update switcher appearance
		var switcherType = (type == 'signup') ? 'signup' : 'login';
		for (var i = 0; i < this.switchers.length; i++) {
			this.switchers[i].getAttribute('data-type') == switcherType ? addClass(this.switchers[i], 'cd-selected') : removeClass(this.switchers[i], 'cd-selected');
		}
	};

	

	var signinModal = document.getElementsByClassName("js-signin-modal")[0];
	if (signinModal) {
		new ModalSignin(signinModal);
	}

	
	function hasClass(el, className) {
		if (el.classList) return el.classList.contains(className);
		// else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
	}
	function addClass(el, className) {
		var classList = className.split(' ');
		if (el.classList) el.classList.add(classList[0]);
		
	}
	function removeClass(el, className) {
		var classList = className.split(' ');
		if (el.classList) el.classList.remove(classList[0]);
		
	}
	
})();

////////////////



