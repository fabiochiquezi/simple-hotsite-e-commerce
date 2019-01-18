'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

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
      var _this = this;

      if (window.matchMedia("(max-width: 420px)").matches) {
        var heightItemInicio = this.itemActive.offsetHeight;
        this.contentColapse.style.height = heightItemInicio + 'px';
      }
      window.onresize = function () {
        if (window.matchMedia("(max-width: 594px)").matches) {
          _this.itemActive = _this.el.querySelector(' .content-colapse .item.active ');
          var _heightItemInicio = _this.itemActive.offsetHeight;
          _this.contentColapse.style.height = _heightItemInicio + 'px';
          console.log('x');
        }

        if (_this.itemActive.classList.contains('item-3') && window.matchMedia("(min-width: 992px)").matches) {

          _this.itemActive.classList.remove('active');
          _this.el.querySelector('.item.item-1').classList.add('active');

          var heightItem = _this.el.querySelector('.item.item-1').clientHeight - 50;
          _this.contentColapse.style.height = heightItem + 'px';

          _this.itemActive = _this.el.querySelector(' .content-colapse .item.active ');
        }
      };
    }
  }, {
    key: '_startFunc',
    value: function _startFunc(item) {
      var _this2 = this;

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
            _this2.itemActive = _this2.el.querySelector(' .content-colapse .item.active ');
            _this2.debugClick = true;
          }, 200);
        }
      }
    }
  }]);

  return colapseFunc;
}();

new colapseFunc(document.querySelector(' .detalhes-produto '));