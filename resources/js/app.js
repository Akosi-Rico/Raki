import './bootstrap';
// in app.js
import '@fortawesome/fontawesome-free/css/all.min.css';

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

import { route } from 'ziggy-js'
import { Ziggy } from './ziggy'

// make global helper (optional but recommended)
window.route = (name, params = {}, absolute = true) => route(name, params, absolute, Ziggy);