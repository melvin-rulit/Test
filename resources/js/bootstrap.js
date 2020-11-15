// todo window — это глобальный объект предоставляемый браузером, внутри которого содержатся все встроенные в браузерный JavaScript функции и свойства.


window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// axios.defaults.headers.common = {
//     'X-Requested-With': 'XMLHttpRequest',
//     'Authorization': 'Bearer ' + App.apiToken,
//   };

// мутации Vue
// const store = new Vuex.Store({
//     state,
//     getters: {},
//     mutations,
//     actions
// });
// window.store = store;
