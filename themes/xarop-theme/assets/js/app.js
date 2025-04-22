/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
Object(function webpackMissingModule() { var e = new Error("Cannot find module './bootstrap'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module './components/navigation'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module './components/forms'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
// Import dependencies


// Components



// Initialize theme
document.addEventListener('DOMContentLoaded', function () {
  // Add smooth scrolling to all links
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });

  // Add responsive menu toggle
  var menuToggle = document.querySelector('.menu-toggle');
  var primaryMenu = document.querySelector('.primary-menu');
  if (menuToggle && primaryMenu) {
    menuToggle.addEventListener('click', function () {
      primaryMenu.classList.toggle('active');
      menuToggle.setAttribute('aria-expanded', menuToggle.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');
    });
  }

  // Handle dropdown menus
  document.querySelectorAll('.dropdown-toggle').forEach(function (dropdown) {
    dropdown.addEventListener('click', function (e) {
      e.preventDefault();
      var parent = dropdown.parentElement;
      var submenu = parent.querySelector('.dropdown-menu');
      if (parent && submenu) {
        parent.classList.toggle('show');
        submenu.classList.toggle('show');
        dropdown.setAttribute('aria-expanded', dropdown.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');
      }
    });
  });
});

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nCan't find stylesheet to import.\n   ╷\n10 │ @import 'components/header';\n   │         ^^^^^^^^^^^^^^^^^^^\n   ╵\n  resources\\scss\\app.scss 10:9  root stylesheet\n    at processResult (C:\\Users\\ajl\\Local Sites\\windsurf\\app\\public\\wp-content\\themes\\xarop-theme\\node_modules\\webpack\\lib\\NormalModule.js:917:19)\n    at C:\\Users\\ajl\\Local Sites\\windsurf\\app\\public\\wp-content\\themes\\xarop-theme\\node_modules\\webpack\\lib\\NormalModule.js:1065:5\n    at C:\\Users\\ajl\\Local Sites\\windsurf\\app\\public\\wp-content\\themes\\xarop-theme\\node_modules\\loader-runner\\lib\\LoaderRunner.js:400:11\n    at C:\\Users\\ajl\\Local Sites\\windsurf\\app\\public\\wp-content\\themes\\xarop-theme\\node_modules\\loader-runner\\lib\\LoaderRunner.js:252:18\n    at context.callback (C:\\Users\\ajl\\Local Sites\\windsurf\\app\\public\\wp-content\\themes\\xarop-theme\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\Users\\ajl\\Local Sites\\windsurf\\app\\public\\wp-content\\themes\\xarop-theme\\node_modules\\sass-loader\\dist\\index.js:63:5)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"](0, {}, __webpack_require__);
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/scss/app.scss"](0, __webpack_exports__, __webpack_require__);
/******/ 	
/******/ })()
;