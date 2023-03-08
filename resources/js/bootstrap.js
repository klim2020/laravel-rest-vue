import _ from 'lodash';
window._ = _;
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 @@ -6,7 +7,8 @@ window._ = require('lodash');
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// import Echo from 'laravel-echo';
// window.Pusher = require('pusher-js');
// import Pusher from 'pusher-js';
// window.Pusher = Pusher;
