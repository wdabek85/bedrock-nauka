
import { initMobileMenu } from './components/mobile-menu';
import { initAccordion } from './components/accordion';

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);


document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
  initAccordion();
});