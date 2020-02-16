var handle = document.getElementById('handle'),
    sidePanel = document.getElementById('sidePanel'),
    navItems = document.getElementsByClassName('navItem'),
    navBtns = document.getElementsByClassName('navBtn'),
    sections = document.getElementsByClassName('form-section'),
    currentIndex = 0,

    attachEventListeners = function() {

        for(var i = 0; i < navItems.length; i++) {
            navItems[i].addEventListener('click', showSection.bind(i, i));
        }

        for(var j = 0; j < navBtns.length; j++) {
            navBtns[j].addEventListener('click', goToSection);
        }

    },

    hideAllSections = function(section) {

        for(var i = 0; i < sections.length; i++) {
            if(!sections[i].classList.contains('hidden')) {
                sections[i].classList.add('hidden');
            } 

            if(navItems[i].classList.contains('current')) {
                navItems[i].classList.remove('current');
            }
        }
    }
    
    showSection = function(index) {
        var index = index != undefined ? index : currentIndex;

        hideAllSections();  

        sections[index].classList.remove('hidden');
        navItems[index].classList.add('current');
        currentIndex = index;

        handleNavBtns();
    },

    handleNavBtns = function() {
        if(currentIndex ===0 ) {
            navBtns[0].classList.add('hidden');
        } else if(currentIndex === navItems.length - 1) {
            navBtns[1].classList.add('hidden');
        } else {
            navBtns[0].classList.remove('hidden');
            navBtns[1].classList.remove('hidden');
        }
    },

    goToSection = function() {
        var btn = this;
        var increment = parseInt(btn.dataset.increment);
        var index = (increment != 0) ? currentIndex + parseInt(increment) : 0;
        showSection(index);
    },

    initSections = function() {
        showSection(currentIndex);
    },

    init = function() {
        attachEventListeners();
        initSections();
    };

init();