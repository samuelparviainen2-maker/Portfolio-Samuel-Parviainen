# Samuel Parviainen – portfolio

Henkilökohtainen portfolio- ja CV-sivusto, joka esittelee Samuel Parviaisen osaamista, opintoja ja projekteja. Sivustolla on myös pieniä JavaScript-esimerkkejä.

## Sisältö

- Esittely ja perustiedot
- Osaamisen visualisointi
- Näppäimistöanimaatio
- Esimerkkiohjelmien karuselli ja laskuri
- Säätietokortti
- Yhteydenottolomake

## Teknologiat

- PHP ja Apache
- HTML ja CSS
- JavaScript
- Docker Compose

## Käynnistäminen Dockerilla

Tarvitset Dockerin ja Docker Composen.

1. Avaa komentorivi projektin juurihakemistossa.
2. Käynnistä palvelut:

   ```sh
   docker compose up --build
   ```

3. Avaa selaimessa jompikumpi portfolio:

   - Selkeämpi koodiversio: <http://localhost:8080/selvempi-koodi/>
   - Portfolio-koodiversio: <http://localhost:8080/portfolio-koodi/>

Pysäytä palvelut painamalla komentorivillä `Ctrl+C`. Taustalla käynnistetyt palvelut voi pysäyttää komennolla:

```sh
docker compose down
```

Docker Compose käynnistää PHP-Apache-palvelimen sekä MySQL- ja phpMyAdmin-palvelut. phpMyAdmin löytyy osoitteesta <http://localhost:8081>.

## Hakemistorakenne

```text
.
├── Dockerfile
├── docker-compose.yml
├── README.md
└── src
    ├── selvempi-koodi/   # Sivuston selkeämpi koodiversio
    └── portfolio-koodi/  # Toinen portfolioversio
```

PHP-sivut ja niiden CSS- ja JavaScript-tiedostot sijaitsevat portfoliohakemistoissa.
