(function(d) {
    var config = {
      kitId: 'cqp7zdu',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);


/*
  ▼Ten Mincho Antique Medium
  font-family: "ten-mincho-antique", sans-serif;
  font-weight: 500;
  font-style: normal;

  ▼Source Han Sans JP Regular
  font-family: "source-han-sans-japanese", sans-serif;
  font-weight: 400;
  font-style: normal;

  ▼Source Han Sans JP Medium
  font-family: "source-han-sans-japanese", sans-serif;
  font-weight: 500;
  font-style: normal;

  ▼Source Han Sans JP Bold
  font-family: "source-han-sans-japanese", sans-serif;
  font-weight: 700;
  font-style: normal;
*/