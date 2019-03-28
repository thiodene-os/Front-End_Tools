  function startIntro(){
    var intro = introJs();
      intro.setOptions({
        steps: [
          { 
            intro: "This is the Notifications Page! It renders the daily the activity of Sensors and Scentinals."
          },
          {
            element: document.querySelector('.active'),
            intro: "The type of Notifications can be selected from the tabs menu."
          },
          { 
            element: document.querySelector('#update_input'),
            intro: "Select the Scentinal or Enter keywords in the Search field and Update the Notifications."
          },
          { 
            element: document.querySelector('#activity'),
            intro: "The activity per Scentinals or Sensors is shown in this Table."
          }
        ]
      });
      intro.setOption('doneLabel', 'Next page').start().oncomplete(function() {
          window.location.href = '/settings/index.php?multipage=true';
      });
  }
  if (RegExp('multipage', 'gi').test(window.location.search)) 
  {
    startIntro();
  }
