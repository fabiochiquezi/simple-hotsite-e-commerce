'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/* Efeito Carregar */
document.addEventListener("DOMContentLoaded", function (event) {
  var onloadFunc = function () {
    function onloadFunc(el, option) {
      _classCallCheck(this, onloadFunc);

      this.el = el;
      this.main = this.el.querySelector('.main-site');
      this.onloadItem = this.el.querySelector('.onload');
      this.itensShow = this.el.querySelectorAll('.js-show-func');
      this._init();
    }

    _createClass(onloadFunc, [{
      key: '_init',
      value: function _init() {
        var _this = this;

        this.onloadItem.style.opacity = '0';
        setTimeout(function () {
          _this.onloadItem.classList.add('force-none');
          _this.main.classList.remove('off');
          _this._startShowItems();
        }, 100);
      }
    }, {
      key: '_startShowItems',
      value: function _startShowItems() {
        this.itensShow.forEach(function (el, i) {
          el.classList.add('eff-load-compl');
        });

        new funcScroll(window);
        new colapseFunc(document.querySelector(' .detalhes-produto '));
      }
    }]);

    return onloadFunc;
  }();

  new onloadFunc(document.querySelector('body'));

  var funcScroll = function () {
    function funcScroll(el) {
      _classCallCheck(this, funcScroll);

      var self = this;
      this.el = el;
      this.main = document.querySelector('.main-site');
      this.section = this.main.querySelectorAll('.sec-js');
      this.sectionAlturas = [];
      this.section.forEach(function (el, i) {
        self.sectionAlturas.push([el.clientHeight, el.offsetTop, el]);
      });
      this._init();
    }

    _createClass(funcScroll, [{
      key: '_init',
      value: function _init() {
        var _this2 = this;

        var self = this;

        // if (window.matchMedia("(min-width: 768px)").matches) {

        this.el.addEventListener('scroll', function () {
          var scrollNumber = window.pageYOffset + window.innerHeight || document.documentElement.scrollTop + window.innerHeight;

          _this2.sectionAlturas.forEach(function (el, i) {
            if (scrollNumber > el[1] + el[0] / 3 && scrollNumber < el[1] + el[0]) {
              self._startFunc(el[2]);
            }
          });
        });

        // }
      }
    }, {
      key: '_startFunc',
      value: function _startFunc(item) {
        if (!item.classList.contains('active-sec')) {
          item.classList.add('active-sec');

          item.querySelectorAll('.js-show-func2').forEach(function (el, i) {
            var classAdd = el.getAttribute('data-classShow');
            el.classList.add(classAdd);
          });
        }
      }
    }]);

    return funcScroll;
  }();

  var colapseFunc = function () {
    function colapseFunc(el, option) {
      _classCallCheck(this, colapseFunc);

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

    _createClass(colapseFunc, [{
      key: '_init',
      value: function _init() {
        var self = this;

        this._debug();

        this.menuSelect.addEventListener('change', function () {
          self._startFunc(this.value);
        });

        this.menuLi.forEach(function (el) {
          el.addEventListener('click', function (e) {
            e.preventDefault();
            self._startFunc(el.getAttribute('href'));

            if (!this.classList.contains('active') && el.getAttribute('href') != 'item-3') {
              self.el.querySelector('.menu-colapse li a.active').classList.remove('active');
              this.classList.add('active');
            }
          });
        });
      }
    }, {
      key: '_debug',
      value: function _debug() {
        var _this3 = this;

        if (window.matchMedia("(max-width: 420px)").matches) {
          var heightItemInicio = this.itemActive.offsetHeight + 100;
          this.contentColapse.style.height = heightItemInicio + 'px';
        }
        window.onresize = function () {
          if (window.matchMedia("(max-width: 594px)").matches) {
            _this3.itemActive = _this3.el.querySelector(' .content-colapse .item.active ');
            var _heightItemInicio = _this3.itemActive.offsetHeight;
            _this3.contentColapse.style.height = _heightItemInicio + 'px';
            console.log('x');
          }

          if (_this3.itemActive.classList.contains('item-3') && window.matchMedia("(min-width: 992px)").matches) {

            _this3.itemActive.classList.remove('active');
            _this3.el.querySelector('.item.item-1').classList.add('active');

            var heightItem = _this3.el.querySelector('.item.item-1').clientHeight - 50;
            _this3.contentColapse.style.height = heightItem + 'px';

            _this3.itemActive = _this3.el.querySelector(' .content-colapse .item.active ');
          }
        };
      }
    }, {
      key: '_startFunc',
      value: function _startFunc(item) {
        var _this4 = this;

        if (window.matchMedia("(min-width: 992px)").matches && item == 'item-3') {
          $("html, body").animate({ scrollTop: $('.resumo-produto').offset().top - 48 }, 1000);
        } else {
          if (this.debugClick) {
            this.debugClick = false;
            var selector = this.el.querySelector(' .content-colapse .' + item + ' ');
            var heightItem = selector.offsetHeight;

            this.contentColapse.style.height = heightItem + 'px';
            this.itemActive.classList.remove('active');
            setTimeout(function () {
              selector.classList.add('active');
              _this4.itemActive = _this4.el.querySelector(' .content-colapse .item.active ');
              _this4.debugClick = true;
            }, 200);
          }
        }
      }
    }]);

    return colapseFunc;
  }();
});

// window.onscroll = function(){
//   console.log('x');
// }