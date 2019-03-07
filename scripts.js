(function() {
  var prevBtn = document.getElementById('prevBtn'),
      nextBtn = document.getElementById('nextBtn'),
      submitBtn = document.getElementById('submitBtn'),
      tabs = document.getElementsByClassName('tab'),
      dots = document.getElementsByClassName('step'),
      currentTab = 0;

  showTab(currentTab);

  for (var i = 0; i < dots.length; i++) {
    dots[i].addEventListener('click', function () {
      var tab = this.dataset.tab;
      showTab(tab);
    });
  }

  nextBtn.addEventListener('click', function () {
    currentTab += parseInt(this.dataset.nav);
    showTab(currentTab);
  });

  prevBtn.addEventListener('click', function () {
    currentTab += parseInt(this.dataset.nav);
    showTab(currentTab);
  });

  function showTab(tab) {
    hideTabs();

    if (tab === 0) {
      prevBtn.style.display = 'none';
    } else if (tab === tabs.length - 1) {
      nextBtn.style.display = 'none';
      submitBtn.style.display = 'inline-block';
    } else {
      tabs[tab].style.display = 'none';
      prevBtn.style.display = 'inline-block';
      nextBtn.style.display = 'inline-block';
      if(submitBtn.style.display === "inline-block") {
        submitBtn.style.display = "none";
      }
    }

    tabs[tab].style.display = 'block';
    dots[tab].classList.add('active');
  }

  function hideTabs() {
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].style.display = 'none';
      dots[i].classList.remove('active');
    }

  }
})();



