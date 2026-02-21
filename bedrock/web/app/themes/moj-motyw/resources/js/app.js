
import { initMobileMenu } from './components/mobile-menu';

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);


document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
});