/* Fensterputzer Schwabach — interactions */
(function(){
  // Sticky header shadow
  var header = document.querySelector('.site-header');
  function onScroll(){
    if(!header) return;
    if(window.scrollY > 8) header.classList.add('scrolled');
    else header.classList.remove('scrolled');
  }
  window.addEventListener('scroll', onScroll, {passive:true});
  onScroll();

  // Mobile menu
  var burger = document.querySelector('.btn-burger');
  var mobileNav = document.querySelector('.mobile-nav');
  if(burger && mobileNav){
    burger.addEventListener('click', function(){
      var open = mobileNav.classList.toggle('open');
      burger.setAttribute('aria-label', open ? 'Menü schließen' : 'Menü öffnen');
    });
    mobileNav.querySelectorAll('a').forEach(function(a){
      a.addEventListener('click', function(){ mobileNav.classList.remove('open'); });
    });
  }

  // Floating CTA hides when contact section is visible
  var cta = document.querySelector('.floating-cta');
  var contact = document.getElementById('kontakt');
  if(cta && contact && 'IntersectionObserver' in window){
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if(e.isIntersecting) cta.classList.add('hidden');
        else cta.classList.remove('hidden');
      });
    }, {threshold:0.1});
    io.observe(contact);
  }

  // Footer year
  var y = document.getElementById('footer-year');
  if(y) y.textContent = new Date().getFullYear();

  // Contact form
  var form = document.getElementById('contact-form');
  var success = document.getElementById('form-success');
  var errorBox = document.getElementById('form-error');
  if(form){
    form.addEventListener('submit', function(e){
      e.preventDefault();
      if(errorBox){ errorBox.style.display='none'; errorBox.textContent=''; }
      var data = new FormData(form);
      var name = (data.get('name')||'').toString().trim();
      var phone = (data.get('phone')||'').toString().trim();
      var email = (data.get('email')||'').toString().trim();
      var message = (data.get('message')||'').toString().trim();
      if(!name || !message || (!email && !phone)){
        if(errorBox){
          errorBox.textContent = 'Bitte Name, Nachricht und mindestens E-Mail oder Telefon angeben.';
          errorBox.style.display = 'block';
        }
        return;
      }
      var subject = 'Anfrage von ' + name;
      var body = ['Name: '+name,'Telefon: '+phone,'E-Mail: '+email,'','Nachricht:',message].join('\n');
      window.location.href = 'mailto:schwabach@putzen-privat.de?subject='+
        encodeURIComponent(subject)+'&body='+encodeURIComponent(body);
      form.reset();
      form.style.display = 'none';
      if(success) success.style.display = 'flex';
    });
  }
  var resetBtn = document.getElementById('form-reset');
  if(resetBtn){
    resetBtn.addEventListener('click', function(){
      if(success) success.style.display = 'none';
      if(form) form.style.display = 'block';
    });
  }
})();
