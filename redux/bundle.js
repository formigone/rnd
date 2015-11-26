/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

	'use strict';

	var app = {
	    getDefState: function getDefState() {
	        return {
	            counter: 0
	        };
	    },
	    inc: document.createElement('button'),
	    dec: document.createElement('button'),
	    display: document.createElement('p'),
	    init: function init(container) {
	        this.inc.textContent = '+';
	        this.dec.textContent = '-';
	        this.display.textContent = '';

	        container.appendChild(this.display);
	        container.appendChild(this.dec);
	        container.appendChild(this.inc);

	        this.inc.addEventListener('click', this.handleClick.bind(this, this.constants.inc));
	        this.dec.addEventListener('click', this.handleClick.bind(this, this.constants.dec));

	        this.data = this.getDefState();
	    },
	    constants: {
	        inc: 0,
	        dec: 1
	    },
	    handleClick: function handleClick(action) {
	        this.data = this.reducer(this.data, action);
	        this.render();
	    },
	    reducer: function reducer(state, action) {
	        var data = typeof state === 'undefined' ? this.getDefState() : state;
	        switch (action) {
	            case this.constants.inc:
	                this.data.counter += 1;
	                break;
	            case this.constants.dec:
	                this.data.counter -= 1;
	                break;
	        }

	        return data;
	    },
	    render: function render() {
	        this.display.textContent = this.data.counter;
	    }
	};

	setTimeout(function (_) {
	    app.init(document.body);
	    app.render();
	}, 0);

/***/ }
/******/ ]);