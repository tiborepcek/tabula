# Tabuľa

Tabuľa je jednoduchý projekt na uľahčenie vyučovania a učenia sa predmetu Informatika. Kombináciou klasických textových poznámok, obrázkových príkladov a videonávodov online by malo byť vyučovanie a učenie sa rýchlejšie, jednoduchšie a vždy prístupné. Projekt je online na adrese http://esslm.sk/tabula/.

## Súbory

Tieto súbory stačí uploadnuť na hosting, ktorý podporuje PHP:

- **grafika.php** - Príklad spracovania témy v poznámkach. V tejto téme nájdete všetko, čo poznámky môžu obsahovať:
  - text,
  - obrázky,
  - videonávody,
  - otázky a úlohy so skrytými odpoveďami,
  - interaktívny kvíz (vytvorený v [HotPotatoes](https://hotpot.uvic.ca/)),
  - odkaz na predpripravený program (so žltým pozadím) a
  - možnosť komentovať cez Facebook.
- **inc.funcs.php** - Odtiaľto sa načítavajú spoločné časti, ktoré sú v každej téme rovnaké. Napríklad menu, záhlavie, alebo päta. Vkladá sa pomocou kódu `<?php require_once "inc.funcs.php"; ?>` a obsah z neho sa načítava napr. cez `echo $head;`. Čo zmeníte v tomto súbore, zmení sa vo všetkých otatných. Tu treba zmeniť sledovací kód v `$googleAnalytics` (UA-6480797-1) a ID aplikácie v `$FBcommentsJSSDK` (appId=110770745644739).
- **komentare.php** - Tu sú zhrnuté pravidlá, ktorými sa musí riadiť každý, kto chce komentovať cez Facebook pod témou.
- **navod.php** - Jednoduchý návod, ktorý obsahuje základné informácie o možnostiach poznámok.
- **style.css** - Vzhľad pre všetky témy.
- **vyvin.php** - Záznam najdôležitejších zmien projektu.
