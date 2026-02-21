export function initAccordion() {
    const accordions = document.querySelectorAll('[data-accordion]');

    accordions.forEach((accordion) => {
        const items = accordion.querySelectorAll('[data-accordion-item]');

        // Set initial state — first item open, rest closed
        items.forEach((item, index) => {
            const content = item.querySelector('[data-accordion-content]');
            content.classList.remove('max-h-0');
            if (index === 0) {
                content.style.maxHeight = content.scrollHeight + 'px';
            } else {
                content.style.maxHeight = '0px';
            }
        });

        items.forEach((item) => {
            const trigger = item.querySelector('[data-accordion-trigger]');
            const content = item.querySelector('[data-accordion-content]');

            trigger.addEventListener('click', () => {
                const isOpen = trigger.getAttribute('aria-expanded') === 'true';

                // Close all items
                items.forEach((otherItem) => {
                    const otherTrigger = otherItem.querySelector('[data-accordion-trigger]');
                    const otherContent = otherItem.querySelector('[data-accordion-content]');

                    otherTrigger.setAttribute('aria-expanded', 'false');
                    otherContent.style.maxHeight = '0px';
                    otherItem.classList.remove('border-blue-300', 'text-blue-300');
                    otherItem.classList.add('border-[#8e8e8e]', 'text-black');
                    const chevron = otherTrigger.querySelector('[data-accordion-icon]');
                    if (chevron) chevron.classList.remove('rotate-90');
                });

                // Open clicked item (if it was closed)
                if (!isOpen) {
                    trigger.setAttribute('aria-expanded', 'true');
                    content.style.maxHeight = content.scrollHeight + 'px';
                    item.classList.remove('border-[#8e8e8e]', 'text-black');
                    item.classList.add('border-blue-300', 'text-blue-300');
                    const chevron = trigger.querySelector('[data-accordion-icon]');
                    if (chevron) chevron.classList.add('rotate-90');
                }
            });
        });
    });
}