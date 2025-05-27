# Forbedring av reklamer

## Prosjektbeskrivelse
Prosjektet mitt går ut på at brukere skal sende inn måter en reklame kan bli "forbedret på", dette går da videre til en database og deretter tilbake til siden som folk kan se hva andre har sakt

### Hovedfunksjoner:
- Brukere kan sende in forbedringer til reklamer for kjente merker.
- Forbedringene blir lagret i en database og sent tilbake til siden.

### Programmeringsspråk brukt:
- PHP
- MySQL
- HTML/CSS/JavaScript

## Hvordan kjøre programmet
For å kjøre programmet mitt, trenger du bare IP-adressen til serveren, som i dette tilfellet er:  
`http://172.20.128.67`

## Kildeliste
- [DigitalOcean: How to Install LAMP Stack on Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-lamp-stack-on-ubuntu)
- [[DataCamp: MySQL Tutorial](https://www.datacamp.com/tutorial/my-sql-tutorial?dc_referrer=https%3A%2F%2Fakademiet.instructure.com%2F)](https://www.w3schools.com/css/tryit.asp?filename=trycss_navbar_sticky)
- [ChatGPT](https://chat.openai.com)
- https://webaim.org/resources/contrastchecker/
- Koder fra Canvas

## Brukertesting
Det er ikke gjort bruktesting

## Sikkerhetsprinsipper
For å beskytte brukernes passord har jeg implementert hashing av passordene før de blir sendt til databasen ved registrering via `registrer.php`.

## License
Kort forklart om Licensen som er brukt, er at hvem som helst kan ta koden min selv uten tillatelse, altså at det er open source.
