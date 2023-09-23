import './bootstrap';

import Alpine from 'alpinejs';
import tagInput from './tagInput';
import articleRedirect from './articleRedirect';

window.Alpine = Alpine;

Alpine.data('tagInput', tagInput);
Alpine.data('articleRedirect', articleRedirect);

Alpine.start();
