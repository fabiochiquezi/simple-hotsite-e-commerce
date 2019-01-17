




/* Efeito Carregar */
document.addEventListener("DOMContentLoaded", function(event){
  class onloadFunc{
    constructor(el, option){
      this.el = el;
      this.main = this.el.querySelector('.main-site');
      this.onloadItem = this.el.querySelector('.onload');
      this.itensShow = this.el.querySelectorAll('.js-show-func');
      this._init();
    }
    _init(){
      this.onloadItem.style.opacity = '0';
      setTimeout(() => {
        this.onloadItem.classList.add('force-none');
        this.main.classList.remove('off');
        this._startShowItems();
      }, 100);
    }
    _startShowItems(){
      this.itensShow.forEach(function(el, i){
        el.classList.add('eff-load-compl');
      });

      new funcScroll( window )
      new colapseFunc( document.querySelector(' .detalhes-produto ') );
    }
  }
  new onloadFunc( document.querySelector('body') );


  class funcScroll{
    constructor(el){
      let self = this;
      this.el = el;
      this.main = document.querySelector('.main-site');
      this.section = this.main.querySelectorAll('.sec-js');
      this.sectionAlturas = [];
      this.section.forEach(function(el, i){
        self.sectionAlturas.push([el.clientHeight, el.offsetTop, el])
      });
      this._init();
    }
    _init(){
      var self = this;

      // if (window.matchMedia("(min-width: 768px)").matches) {

        this.el.addEventListener('scroll', ()=>{
          let scrollNumber = window.pageYOffset + window.innerHeight || document.documentElement.scrollTop + window.innerHeight;
  
          this.sectionAlturas.forEach(function(el, i){
            if(scrollNumber > (el[1] + (el[0] / 3)) && scrollNumber < (el[1]+el[0]) ){
              self._startFunc(el[2]);
            }
          });
        })

      // }

    }
    _startFunc(item){
      if( !(item.classList.contains('active-sec')) ){
        item.classList.add('active-sec');

        item.querySelectorAll('.js-show-func2').forEach(function(el, i){
          let classAdd = el.getAttribute('data-classShow');
          el.classList.add(classAdd);
        });
      }
    }
  }
  
  class colapseFunc{
    constructor( el, option ){
      this.el = el;
      this.option = option;
      this.menuLi = this.el.querySelectorAll(' .menu-colapse li a');
      this.menuSelect = this.el.querySelector(' .menu-colapse select ');
      this.itemActive = this.el.querySelector(' .content-colapse .item.active ');
      this.contentColapse = this.el.querySelector(' .content-colapse ');
      this.resumoProduto = this.el.querySelector('.resumo-produto');

      this.debugClick = true;

      this._init();
    }
    _init(){
      let self = this;

      this._debug();

      this.menuSelect.addEventListener('change', function(){
        self._startFunc(this.value);  
      });

      this.menuLi.forEach(function(el){
        el.addEventListener('click', function(e){
          e.preventDefault();
          self._startFunc(el.getAttribute('href'));
          
          if( !(this.classList.contains('active')) && el.getAttribute('href') != 'item-3' ){
            self.el.querySelector('.menu-colapse li a.active').classList.remove('active');
            this.classList.add('active');
          }
        })
      });
    }
    _debug(){
      if (window.matchMedia("(max-width: 420px)").matches) {
        const heightItemInicio = this.itemActive.offsetHeight+100;
        this.contentColapse.style.height = `${heightItemInicio}px`; 
      }     
      window.onresize = () => {
         if (window.matchMedia("(max-width: 594px)").matches) {
          this.itemActive = this.el.querySelector(' .content-colapse .item.active ');
          const heightItemInicio = this.itemActive.offsetHeight;
          this.contentColapse.style.height = `${heightItemInicio}px`; 
          console.log('x')
         }             

         if(this.itemActive.classList.contains('item-3') && window.matchMedia("(min-width: 992px)").matches){

           this.itemActive.classList.remove('active');
           this.el.querySelector('.item.item-1').classList.add('active');

           let heightItem = this.el.querySelector('.item.item-1').clientHeight - 50;
           this.contentColapse.style.height = `${heightItem}px`;

           this.itemActive = this.el.querySelector(' .content-colapse .item.active ');
         }
      }
    }
    _startFunc(item){
      if (window.matchMedia("(min-width: 992px)").matches && item == 'item-3') {
        $("html, body").animate({ scrollTop: $('.resumo-produto').offset().top - 48}, 1000);

      } else {
        if(this.debugClick){
          this.debugClick = false;
          let selector = this.el.querySelector(` .content-colapse .${item} `);
          let heightItem = selector.offsetHeight;
    
          this.contentColapse.style.height = `${heightItem}px`;
          this.itemActive.classList.remove('active');
          setTimeout(() => {
            selector.classList.add('active');
            this.itemActive = this.el.querySelector(' .content-colapse .item.active ');
            this.debugClick = true;
          }, 200)
        }
      }
    }
  }
  
});


// window.onscroll = function(){
//   console.log('x');
// }
