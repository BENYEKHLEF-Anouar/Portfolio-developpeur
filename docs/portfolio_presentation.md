---
marp: true
title: "Portfolio Développeur"
paginate: true
theme: default
class: lead
backgroundColor: linear-gradient(135deg, #f9fafb, #e5e7eb)
style: |
  /* ======== Global Section ======== */
  section {
    background-color: white;
    color: #003087;
    padding: 40px;
    font-family: "Segoe UI", Roboto, sans-serif;
  }

  /* ======== Headings ======== */
  h1, h2 {
    color: #003087;
  }

  h1 {
    font-size: 2.4em;
    margin-bottom: 0.3em;
  }

  h2 {
    font-size: 1.6em;
    margin-top: 1em;
  }

  /* ======== Image Styling ======== */
  img {
    display: block;
    max-height: 400px;
    width: auto;
    margin: 25px auto;
    border-radius: 16px;
    object-fit: contain;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }


  /* ======== Full-width Diagram ======== */
  .full-diagram {
    max-height: 630px;
    width: 100%;
    border-radius: 12px;
  }

  /* ======== Side-by-side Layout ======== */
  .side-by-side {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
  }

  .side-by-side img {
    flex: 1;
    max-width: 45%;
    min-width: 280px;
  }

  /* ======== Captions ======== */
  figure {
    text-align: center;
    margin: 30px auto;
  }

  figcaption {
    font-size: 0.9em;
    color: #003087cc;
    margin-top: 10px;
  }

  /* ======== Pagination ======== */
  footer {
    color: #003087cc;
    font-size: 0.8em;
  }
---

# Portfolio Développeur

**Benykhlef Anouar**  
Encadré par: **M. Essarraj Fouad**  
DM101  

---

# Analyse

---

## Cahier des charges

**Contexte du projet**  
Site portfolio personnel pour présenter :  
- Compétences  
- Réalisations  
- Parcours de **Aziz Soufiane**

**Objectif**  
Créer une vitrine professionnelle claire.  
**Profil développeur :** nom, bio, compétences  
**Contenu :** liste de projets + détails projet  
Page **À propos / Contact**

---

# Cible utilisateur

- Recruteurs  
- Partenaires  
- Clients potentiels  

**Périmètre fonctionnel**  
- Minimum 3 pages :  
  - Accueil  
  - Projets / Détail projet  
  - À propos / Contact

---

# Étude de l’existant

## Exemple de site inspirant

<figure>
  <img src="images/Capture%20d'écran%202025-10-13%20123115.png" alt="Exemple de site inspirant">
  <figcaption>Figure 1 – Exemple de site portfolio inspirant</figcaption>
</figure>

---

# Diagramme de cas d'utilisation

<figure>
  <img src="images/AA.png" alt="Diagramme de cas d'utilisation">
  <figcaption>Figure 2 – Diagramme de cas d'utilisation du site portfolio</figcaption>
</figure>

---

# Conception

---

## Design Thinking

<figure>
  <img src="images/1_33khN9zpFCMWnF8pLqeVTQ.png" alt="Processus Design Thinking">
  <figcaption>Figure 3 – Étapes du Design Thinking</figcaption>
</figure>

---

1. 🟡 **Empathize** — Comprendre les utilisateurs : besoins, émotions, problèmes 

2. 🟣 **Define** — Définir clairement le problème à résoudre  

3. 🟢 **Ideate** — Générer plusieurs idées créatives 

4. 🔵 **Prototype** — Créer des versions simples ou maquettes  

5. 🟠 **Test** — Tester les prototypes et apprendre des retours  

---

# Schéma

<figure>
  <img src="images/mermaid-diagram-2025-10-21-164539.png" alt="Schéma général du site">
  <figcaption>Figure 4 – Schéma général de l’architecture du site</figcaption>
</figure>

---

# Maquette

<figure>
  <img src="images/screencapture-127-0-0-1-5500-Maquettage-index-html-2025-10-21-09_05_12.png" alt="Maquette du site portfolio">
  <figcaption>Figure 5 – Maquette de la page d’accueil</figcaption>
</figure>

---

# Diagramme de classe

<figure>
  <img src="images/mermaid-diagram-2025-10-21-150600.png" class="full-diagram" alt="Diagramme de classe">
  <figcaption>Figure 6 – Diagramme de classes du projet</figcaption>
</figure>

---

# Merci

