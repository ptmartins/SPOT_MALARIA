(function() {
  var prevBtn = document.getElementById('prevBtn'),
      nextBtn = document.getElementById('nextBtn'),
      submitBtn = document.getElementById('submitBtn'),
      tabs = document.getElementsByClassName('tab'),
      folders = document.getElementsByClassName('folder'),
      titleFolder = document.getElementById('title-folder'),
      helpLinks = document.getElementsByClassName('help'),
      currentTab = 0;

  showTab(currentTab);

  for (var i = 0; i < folders.length; i++) {
    folders[i].addEventListener('click', function () {
      var folder = this.dataset.tab;
      showTab(folder);
    });
  }

  for (var i = 0; i < helpLinks.length; i++) {
    helpLinks[i].addEventListener('click', showHelpText);
  }

  nextBtn.addEventListener('click', function () {
    currentTab += parseInt(this.dataset.nav);
    showTab(currentTab);
  });

  prevBtn.addEventListener('click', function () {
    currentTab += parseInt(this.dataset.nav);
    showTab(currentTab);
  });

  function showHelpText() {
    var content = this.nextElementSibling;
    content.classList.toggle('show');
  }

  function showTab(tab) {
    hideTabs();
    updateTitle(tab);

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

    tabs[tab].style.display = 'flex';
    folders[tab].classList.add('active');

    currentTab = tab;
  }

  function hideTabs() {
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].style.display = 'none';
      folders[i].classList.remove('active');
    }
  }

  function updateTitle(tab) {
    var tabTitle = tabs[tab].dataset.title;
    titleFolder.innerText = "- " + tabTitle;
  }
})();



