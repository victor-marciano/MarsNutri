window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.Popper = require('popper.js').default;

// /**
//  * We'll load jQuery and the Bootstrap jQuery plugin which provides support
//  * for JavaScript based Bootstrap features such as modals and tabs. This
//  * code may be modified to fit the specific needs of your application.
//  */

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');    
} catch (e) {
    console.log(e);
}


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.feather = require('feather-icons');
window.PerfectScrollbar = require('perfect-scrollbar').default

const sidebarWrapper = document.querySelector('#sidebar-wrapper');
const ps = new PerfectScrollbar(sidebarWrapper);

const mainPanel = document.querySelector('#main-panel');
const ps2 = new PerfectScrollbar(mainPanel);

$("html").addClass("perfect-scrollbar-on");


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
