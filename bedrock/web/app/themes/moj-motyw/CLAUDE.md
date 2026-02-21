# Projekt Akorn — kontekst dla Claude Code

## Stack
- WordPress + Bedrock (folder: bedrock/)
- Motyw: Sage 11 (Blade templates)
- CSS: Tailwind CSS v4
- ACF PRO (Grupa, Repeater, Flexible Content)
- Build: Vite + npm run build

## Ścieżki
- Motyw: bedrock/web/app/themes/moj-motyw/
- Widoki: resources/views/
- Komponenty: resources/views/components/
- Sekcje: resources/views/sections/
- Kompozytory: app/View/Composers/
- Style: resources/css/app.css + resources/base/

## Konwencje
- Kontener: klasa .wrapper (max-width 1440px, padding 40px)
- Dane ACF: zawsze w Composerze przez get_field(), nigdy w Blade
- Komponenty: x-button, x-header-section, x-icons.nazwa
- Zabezpieczenia: ?? '' dla stringów, ?: [] dla tablic

## Kolory (Tailwind custom)
- primary-100 do 500 (granat)
- blue-100 do 500
- orange-100 do 500 (akcent CTA)

## Typografia
Własne klasy: display-lg-bold, text-sm-regular itp.
Zdefiniowane w resources/base/typography.css

## Ważne zasady
- Przed stworzeniem komponentu sprawdź czy już istnieje w resources/views/components/
- Przed stworzeniem Composera sprawdź czy już istnieje w app/View/Composers/
- Nie duplikuj kodu — rozszerzaj istniejące komponenty
- Po stworzeniu pliku PHP zawsze sprawdź składnię
- Po stworzeniu nowego komponentu lub Composera automatycznie 
  zaktualizuj sekcję "Istniejące komponenty" i "Istniejące Composery" 
  w tym pliku CLAUDE.md

## Linki
- Figma Komponenty: https://www.figma.com/design/X6gwyccPCqoVIJaB8tSQWm/Akorn-Moodboard?node-id=107-1857&p=f&t=1tlHreFPgkiNMHLq-0
- Figma Sekcje: https://www.figma.com/design/X6gwyccPCqoVIJaB8tSQWm/Akorn-Moodboard?node-id=144-205&p=f&t=1tlHreFPgkiNMHLq-0
- Figma Projekt Strony Głównej : 
- GitHub: https://github.com/wdabek85/bedrock-nauka
- Lokalny dev: http://bedrock-nauka.local

## Istniejące komponenty (nie duplikuj!)
- x-button — resources/views/components/button.blade.php
- x-header-section — resources/views/components/header-section.blade.php
- x-icons.hamburger — resources/views/components/icons/hamburger.blade.php
- x-icons.arrow — resources/views/components/icons/arrow.blade.php
- x-navigation.index — resources/views/components/navigation/index.blade.php
- portfolio/card — resources/views/components/portfolio/card.blade.php
- portfolio/grid — resources/views/components/portfolio/grid.blade.php
- x-icons.chevron — resources/views/components/icons/chevron.blade.php

## Istniejące Composery
- Hero.php — obsługuje front-page (top-hero, bottom-hero)
- Services.php — obsługuje front-page (uslugi)
- Portfolio.php — obsługuje front-page, archive-portfolio, page

## Istniejące sekcje
- sections/hero/index.blade.php
- sections/hero/top-hero.blade.php
- sections/hero/bottom-hero.blade.php
- sections/services/index.blade.php

## Sekcja Portfolio (strona główna)
- **Figma node:** 162:479 (Portfolio/ Strona glowna)
  - Desktop: 162:478 | Mobile: 162:477
- **Pliki:**
  - Widok grid: components/portfolio/grid.blade.php (wrapper + header-section)
  - Widok card: components/portfolio/card.blade.php (pojedyncza karta portfolio)
  - Composer: app/View/Composers/Portfolio.php (WP_Query, post_type: portfolio, 6 postów)
- **Użycie w front-page:** @include('components.portfolio.grid')

## Sekcja Usługi (strona główna)
- **Figma node:** 144:321 (Usługi / Strona główna)
  - Desktop: 144:320 | Mobile: 144:319
- **Pliki:**
  - Widok: sections/services/index.blade.php (akordeon usług + intro)
  - Composer: app/View/Composers/Services.php (ACF: uslugi)
  - JS: resources/js/components/accordion.js (initAccordion)
  - Ikona: components/icons/chevron.blade.php
- **Użycie w front-page:** @include('sections.services.index')
- **ACF:** Grupa `uslugi` → tytul, opis, przycisk_tekst, przycisk_link, lista (repeater: nazwa + opis)
- **Design (Figma):** Accordion-style lista z numeracją (01, 02, 03...), pierwszy element rozwinięty (z obrazem 440x250, rounded-10), pozostałe zwinięte. Przycisk ikona strzałki po prawej (biały = rozwinięty, blue-300 = zwinięty). Mobile: elementy kolumnowo, obraz na pełną szerokość.