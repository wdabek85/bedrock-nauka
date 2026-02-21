export function initMobileMenu(){
    const toggle = document.querySelector('[data-menu-toggle]');
    const closeEl = document.querySelector('[data-menu-close]');
    const drawer = document.getElementById('mobile-menu');


    const open = () => {
        drawer.classList.remove('translate-x-full'); //co to zza kalsa pewnie tailwinodwa klasa z animajca
        toggle.setAttribute('aria-expanded', 'true'); // co to za atrybuty to jakeis urpszoczenie pewnie
        drawer.setAttribute('aria-hidden', 'false');
        document.documentElement.classList.add('overflow-hidden');
        
    };

    const close = () => {
        drawer.classList.add('translate-x-full');
        document.documentElement.classList.remove('overflow-hidden'); //to dodalem bo cos czuje ze to ejst po to zeby zaslonilo cala strone mobilnie
    };

    toggle.addEventListener('click', open);
    closeEl.addEventListener('click', close);
    document.addEventListener('keydown', (e) => e.key === 'Escape' && close()); // a to nie wiem co robi ale pewnie zabezpeicznie jakeis musze dowiedizec sie dokladnie co to
    // w moje jskaldni czuej ze gdzies jest błąd
}
