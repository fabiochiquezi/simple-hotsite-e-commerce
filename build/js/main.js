
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
        const heightItemInicio = this.itemActive.offsetHeight;
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

  new colapseFunc( document.querySelector(' .detalhes-produto ') );


